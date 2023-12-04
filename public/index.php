<?php

require_once __DIR__ . '/../boot.php';
$title = option('APP_NAME', 'Bitflix');

$allGenres = getGenres();
$movies = getMovies();

$genres = [];
$search = null;

if (isset($_GET['genre']))
{
	foreach ($_GET['genre'] as $genre)
	{
		$genres[] = $genre;
	}
}

if (isset($_GET['search']))
{
	$search = $_GET['search'] !== "" ? $_GET['search'] : null;
}

$movies = getMovies($genres, $search);

echo outputLayout(
	$title,
	$allGenres,
	view('pages/index', [
		'movies' => $movies,
	])
);