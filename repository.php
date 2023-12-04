<?php

function getGenres(): array
{
	$connection = getDbConnection();

	$result = mysqli_query(
		$connection,
		"
			SELECT * FROM genre;
		"
	);

	if (!$result)
	{
		throw new Exception(mysqli_error($connection));
	}

	while ($row = mysqli_fetch_assoc($result))
	{
		$genres[$row['CODE']] = $row['NAME'];
	}

	return $genres ?? [];
}

function getMovies(?array $genres = null, ?string $search = null): array
{
	$genresCondition = '';
	$searchCondition = '';
	$connection = getDbConnection();
	if ($genres !== null)
	{
		for ($i = 0, $iMax = count($genres); $i < $iMax; $i++)
		{
			$genreEscaped = mysqli_real_escape_string($connection, $genres[$i]);
			$genres[$i] = $genreEscaped;
		}
		$genresCondition = makeGenresCondition($genres);
	}
	if ($search !== null)
	{
		$searchEscaped = mysqli_real_escape_string($connection, $search);
		$searchCondition = "m.TITLE LIKE '{$searchEscaped}%'";
	}
	$result = mysqli_query(
		$connection,
		makeQuery($genresCondition, $searchCondition)
	);

	if (!$result)
	{
		throw new Exception(mysqli_error($connection));
	}

	$movies = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$movies[] = [
			'id' => (int)$row['ID'],
			'title' => $row['TITLE'],
			'original-title' => $row['ORIGINAL_TITLE'],
			'description' => $row['DESCRIPTION'],
			'duration' => (int)$row['DURATION'],
			'genres' => explode(',', $row['GENRES']),
			'cast' => explode(',', $row['CAST']),
			'director' => $row['DIRECTOR'],
			'age-restriction' => (int)$row['AGE_RESTRICTION'],
			'release-date' => (int)$row['RELEASE_DATE'],
			'rating' => (float)$row['RATING'],
		];
	}

	return $movies;
}

function getMovieById(int $id): array
{
	$connection = getDbConnection();

	$result = mysqli_query(
		$connection,
		makeQuery("m.ID  = {$id}")
	);
	if (!$result)
	{
		throw new Exception(mysqli_error($connection));
	}

	$row = mysqli_fetch_assoc($result);

	return [
		'id' => (int)$row['ID'],
		'title' => $row['TITLE'],
		'original-title' => $row['ORIGINAL_TITLE'],
		'description' => $row['DESCRIPTION'],
		'duration' => (int)$row['DURATION'],
		'genres' => explode(',', $row['GENRES']),
		'cast' => explode(',', $row['CAST']),
		'director' => $row['DIRECTOR'],
		'age-restriction' => (int)$row['AGE_RESTRICTION'],
		'release-date' => (int)$row['RELEASE_DATE'],
		'rating' => (float)$row['RATING'],
	];
}

function makeQuery(string ...$conditions): string
{
	$conditions = implode(
		" AND ",
		array_filter(
			$conditions,
			fn($value) => $value !== ""
		)
	);
	$conditions = $conditions !== '' ? "WHERE " . $conditions : "";
	$query = "
			SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION,
					GROUP_CONCAT(DISTINCT g.NAME ORDER BY G.ID) GENRES, GROUP_CONCAT(DISTINCT a.NAME ORDER BY A.ID) CAST,
					d.NAME DIRECTOR, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING FROM movie m
					INNER JOIN director d ON m.DIRECTOR_ID = d.ID
					INNER JOIN movie_genre mg ON m.ID = mg.MOVIE_ID
					INNER JOIN genre g ON mg.GENRE_ID = g.ID
					INNER JOIN movie_actor ma ON m.ID = ma.MOVIE_ID
					INNER JOIN actor a ON ma.ACTOR_ID = a.ID
					{$conditions}
					GROUP BY m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING
					LIMIT 50;
		";

	return $query;
}

function makeGenresCondition(array $genres): string
{
	$condition = "";
	if (!empty($genres))
	{
		for ($i = 0, $iMax = count($genres); $i < $iMax; $i++)
		{
			$genres[$i] = "g.CODE LIKE \"{$genres[$i]}\"";
		}
		$condition = implode(" OR ", $genres);
		$condition = "m.ID IN (SELECT m.ID
               FROM movie m
	                    INNER JOIN movie_genre mg ON m.ID = mg.MOVIE_ID
	                    INNER JOIN genre g ON mg.GENRE_ID = g.ID
               WHERE mg.MOVIE_ID = m.ID AND mg.GENRE_ID = g.ID AND {$condition})";
	}

	return $condition;
}