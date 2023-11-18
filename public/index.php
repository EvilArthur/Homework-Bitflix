<?php

/**
 * @var array $movies
 * @var array $genres
*/


require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');
$genreSelected = false;
$genre = null;
if (isset($_GET['movie_id']))
{
	$movie_id = $_GET['movie_id'];
	$movie = $movies[$movie_id - 1];
}

if (isset($_GET['genre']))
{
	$genre = $_GET['genre'];
	$genreSelected = true;
}

echo outputLayout(
	$title,
				  view('pages/index', [
					  'movies' => $movies,
					  'genres' => $genres,
					  'genre' => $genre,
					  'genreSelected' => $genreSelected,
				  ])
);