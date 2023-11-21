<?php


function convertMinutesToHours(int $minutes): string
{
	$nonSignificantZeroHour = '0';
	$nonSignificantZeroMinutes = '0';
	$hours = intdiv($minutes, 60);
	if ($hours > 10)
	{
		$nonSignificantZeroHour = '';
	}
	$remainingMinutes = $minutes % 60;

	if ($remainingMinutes > 10)
	{
		$nonSignificantZeroMinutes = '';
	}
	return sprintf("%s%s:%s%s", $nonSignificantZeroHour, $hours, $nonSignificantZeroMinutes, $remainingMinutes);
}

function getMoviesByGenres(array $movies, string $genre): array
{
	return array_filter($movies, fn($movie) => in_array($genre, $movie['genres'], true));
}

function getMoviesByTitle(array $movies, string $search): array
{
	return array_filter($movies, fn($movie) => mb_stripos($movie['title'], $search) !== false);
}