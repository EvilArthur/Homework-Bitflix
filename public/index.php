<?php

require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');

$genres = getGenres();
$movies = getMovies();

if (isset($_GET['genre']))
{
	$genre = $genres[$_GET['genre']];
	$movies = getMoviesByGenres($movies, $genre);
}

if (isset($_GET['search']))
{
	$search = $_GET['search'];
	if ($search !== "")
	{
		$movies = getMoviesByTitle($movies, $search);
	}
}

echo outputLayout(
	$title,
	$genres,
	view('pages/index', [
		'movies' => $movies,
	])
);