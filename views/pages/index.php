<?php
/**
 * @var array $movies
*/
?>



<div class="catalog">
	<?php foreach($movies as $movie): ?>
	<div class="movie-item">
		<img src="<?= sprintf("/img/%s.jpg", $movie['id'])?>" alt="<?= $movie['title']?>" width="370px" height="430px">
		<div class="title">
			<h2><?= truncate($movie['title'], option('TRUNCATE_TITLE', 24))?></h2>
			<h3><?= truncate($movie['original-title'], option('TRUNCATE_ORIGINAL_TITLE', 45))?></h3>
		</div>
		<hr>
		<div class="description">
			<p><?= truncate($movie['description'], option('TRUNCATE_DESCRIPTION', 200))?></p>
		</div>
		<div class="footer">
			<img src="<?= "/img/clock.svg"?>" alt="clock">
			<p class="time"><?=$movie['duration'] . '. / ' . $movie['duration'] / 60?></p>
			<p class="genre"><?= implode(', ', $movie['genres'])?></p>
		</div>
		<div class="movie-item-hover">
			<form class="detail-button" action="#">
				<button type="submit">Подробнее</button>
			</form>
		</div>
	</div>
	<?php endforeach; ?>
</div>