<?php

/**
 * @var array $movies
 * @var array $genres
 */

require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');

if (isset($_GET['genre']))
{
	$genre = $genres[$_GET['genre']];
	$movies = getMoviesByGenres($movies, $genre);
}

if (isset($_GET['search']))
{
	$search = $_GET['search'];
	$movies = getMoviesByTitle($movies, $search);
}

echo outputLayout(
	$title,
	$genres,
	view('pages/index', [
		'movies' => $movies,
	])
);