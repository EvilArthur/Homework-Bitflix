<?php

/**
 * @var array $genres
 */
require_once __DIR__ . '/../boot.php';

$title = option('APP_NAME', 'Bitflix') . ' :: Favourites';

echo outputLayout($title, view('pages/favourites'));
