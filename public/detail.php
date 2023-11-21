<?php

require_once __DIR__ . '/../boot.php';
/**
 * @var array $movies
 * @var array $genres
 */

$title = option('APP_NAME', 'Bitflix') . ' :: Detail';
$movie = null;

if (isset($_GET['movieId']))
{
	$movieId = $_GET['movieId'];
	if (array_key_exists($movieId - 1, $movies))
	{
		$movie = $movies[$movieId - 1];
	}
}

echo outputLayout($title, $genres, view('pages/detail', ['movie' => $movie]));
