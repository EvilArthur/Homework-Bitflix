<?php
/**
 * @var array $movies
 * @var array $genres
 * @var string $genre
 * @var bool $genreSelected
 * @var null|string $search
 */

?>


<div class="catalog">
	<?php
	foreach ($movies as $movie): ?>
		<?php
		if ($genreSelected): ?>
			<?php
			if (!(in_array($genres[$genre], $movie['genres'], true)))
			{
				continue;
			} ?>
		<?php
		endif ?>
		<?php
		if ($search !== null)
		{
			if (strpos($movie['title'], $search) === false)
			{
				continue;
			}
		}
		?>
		<?= view('components/film-card', ['movie' => $movie]) ?>
	<?php
	endforeach; ?>
</div>