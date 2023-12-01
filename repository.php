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

	return $genres;
}

function getMovies(): array
{
	$connection = getDbConnection();

	$result = mysqli_query(
		$connection,
		"
			SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION,
					GROUP_CONCAT(DISTINCT g.NAME ORDER BY G.ID) GENRES, GROUP_CONCAT(DISTINCT a.NAME ORDER BY A.ID) CAST,
					d.NAME DIRECTOR, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING FROM movie m
					INNER JOIN director d ON m.DIRECTOR_ID = d.ID
					INNER JOIN movie_genre mg ON m.ID = mg.MOVIE_ID
					INNER JOIN genre g ON mg.GENRE_ID = g.ID
					INNER JOIN movie_actor ma ON m.ID = ma.MOVIE_ID
					INNER JOIN actor a ON ma.ACTOR_ID = a.ID
					GROUP BY m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING;
		"
	);

	if (!$result)
	{
		throw new Exception(mysqli_error($connection));
	}

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
