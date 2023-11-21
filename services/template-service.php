<?php

function view(string $path, array $variables = []): string
{
	if (!preg_match('/^[0-9A-Za-z\/_-]+$/', $path))
	{
		throw new Exception('Invalid template path');
	}
	$absolutePath = ROOT . "/views/$path.php";

	if (!file_exists($absolutePath))
	{
		throw new Exception('Template not found');
	}

	extract($variables);

	ob_start();
	require $absolutePath;

	return ob_get_clean();
}

function truncate(string $text, ?int $maxLength = null): string
{
	if ($maxLength === null)
	{
		return $text;
	}

	$cropped = mb_substr($text, 0, $maxLength);
	if ($cropped !== $text)
	{
		$cropped = trim($cropped);

		return "$cropped...";
	}

	return $text;
}

function outputLayout(string $title, array $genres, string $content): string
{
	return view('layout', [
		'title' => $title,
		'menu' => prepareMenu($genres),
		'content' => $content,
	]);
}

function prepareMenu($genres): array
{
	$items = [];

	$items[] = ['url' => '/', 'text' => 'Главная'];
	$items[] = ['url' => '/favourites.php', 'text' => 'Избранное'];
	foreach ($genres as $url => $name)
	{
		$items[] = ['url' => "/?genre=$url", 'text' => $name];
	}

	return $items;
}