<?php

/**
 * @var array $movies
*/


require_once __DIR__ . '/../boot.php';

$title = option('APP_NAME', 'Bitflix');



echo view('layout', [
	'title' => $title,
	'content' => view('pages/index', ['movies' => $movies,
											])
]);