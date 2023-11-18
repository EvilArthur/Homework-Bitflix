<?php
/**
 * @var array $movies
 * @var array $genres
 * @var string $genre
 * @var bool $genreSelected
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
		<?= view('components/film-card', ['movie' => $movie]) ?>
	<?php
	endforeach; ?>
</div>