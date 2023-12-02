<?php

require_once __DIR__ . '/../boot.php';
$genres = getGenres();

$title = option('APP_NAME', 'Bitflix') . ' :: Detail';
$movie = null;

if (isset($_GET['movieId']))
{
	$movieId = $_GET['movieId'];
	if ((string)(int)($movieId) === $movieId)
	{
		$movie = getMovies($movieId)[0];
	}
}

echo outputLayout($title, $genres, view('pages/detail', ['movie' => $movie]));
