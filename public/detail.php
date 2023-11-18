<?php

require_once __DIR__ . '/../boot.php';
/**
 * @var array $movies
 * @var array $genres
 */

$title = option('APP_NAME', 'Bitflix') . ' :: Detail';
$movie = null;

if (isset($_GET['movie_id']))
{
	$movie_id = $_GET['movie_id'];
	$movie = $movies[$movie_id - 1];
}

echo outputLayout($title, view('pages/detail', ['movie' => $movie]));
