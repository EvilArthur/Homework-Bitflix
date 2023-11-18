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