<?php

require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');

$genres = getGenres();
$movies = getMovies();

if (isset($_GET['genre']))
{

	$genre = $genres[$_GET['genre']];
	$movies = getMovies(null, $genre);
}

if (isset($_GET['search']))
{
	$search = $_GET['search'];
	if ($search !== "")
	{
		$movies = getMovies(null, null, $search);
	}
}

echo outputLayout(
	$title,
	$genres,
	view('pages/index', [
		'movies' => $movies,
	])
);