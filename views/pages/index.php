<?php
/**
 * @var array $movies
 */

?>


<div class="catalog">
	<?php
	foreach ($movies as $movie): ?>
		<?= view('components/film-card', ['movie' => $movie]) ?>
	<?php
	endforeach; ?>
</div>