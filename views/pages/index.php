<?php
/**
 * @var array $movies
 */

?>


<div class="catalog">
	<?php if(empty($movies)):?>
		<p>There are no films with this name</p>
	<?php endif;?>
	<?php
	foreach ($movies as $movie): ?>
		<?= view('components/film-card', ['movie' => $movie]) ?>
	<?php
	endforeach; ?>
</div>