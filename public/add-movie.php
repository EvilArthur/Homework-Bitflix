<?php

require_once __DIR__ . '/../boot.php';
$genres = getGenres();

$title = option('APP_NAME', 'Bitflix') . ' :: Add movie';

echo outputLayout($title, $genres, view('pages/add-movie'));
