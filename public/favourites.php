<?php

require_once __DIR__ . '/../boot.php';
$genres = getGenres();

$title = option('APP_NAME', 'Bitflix') . ' :: Favourites';

echo outputLayout($title, $genres, view('pages/favourites'));
