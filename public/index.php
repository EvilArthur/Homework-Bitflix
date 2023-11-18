<?php

/**
 * @var array $movies
 * @var array $genres
*/


require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');
$genreSelected = false;
$genre = null;
$search = null;
if (isset($_GET['movie_id']))
{
	$movie_id = $_GET['movie_id'];
	$movie = $movies[$movie_id - 1];
}

if (isset($_GET['genre']))
{
	$genre = $genres[$_GET['genre']];
	$movies = array_filter($movies, fn($movie) => in_array($genre, $movie['genres'], true));
}

if (isset($_GET['search']))
{
	$search = $_GET['search'];
	$movies = array_filter($movies, fn($movie) => stripos($movie['title'], $search) !== false);
}



echo outputLayout(
	$title,
				  view('pages/index', [
					  'movies' => $movies,
				  ])
);