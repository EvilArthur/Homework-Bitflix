<?php

/**
 * @var array $genres
 */
require_once __DIR__ . '/../boot.php';

$title = option('APP_NAME', 'Bitflix') . ' :: Add movie';

echo outputLayout($title, $genres, view('pages/add-movie'));
