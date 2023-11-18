<?php

/**
 * @var array $genres
 */
require __DIR__ . '/data/movies.php';

$items = [];

$items[] = ['url' => '/', 'text' => 'Главная'];
$items[] = ['url' => '/favourites.php', 'text' => 'Избранное'];
foreach ($genres as $url => $name)
{
	$items[] = ['url' => "/?genre=$url", 'text' => $name];
}

return $items;