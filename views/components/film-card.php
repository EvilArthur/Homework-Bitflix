<?php
/**
 * @var array $movie
 */

?>

<div class="movie-item">
	<div class="poster">
		<img src="<?= sprintf("/img/%s.jpg", $movie['id']) ?>" alt="<?= $movie['title'] ?>" height="430px">
	</div>
	<div class="title">
		<h2><?= truncate($movie['title'], option('TRUNCATE_TITLE', 24)) ?></h2>
		<h3><?= truncate($movie['original-title'], option('TRUNCATE_ORIGINAL_TITLE', 45)) ?></h3>
	</div>
	<hr>
	<div class="description">
		<p><?= truncate($movie['description'], option('TRUNCATE_DESCRIPTION', 200)) ?></p>
	</div>
	<div class="footer">
		<img src="<?= "/img/clock.svg" ?>" alt="clock">
		<p class="time"><?= $movie['duration'] . ' мин. / ' . convertMinutesToHours($movie['duration']) ?></p>
		<p class="genre"><?= truncate(implode(', ', $movie['genres']), option('TRUNCATE_GENRES', 31)) ?></p>
	</div>
	<div class="movie-item-hover">
		<a class="detail-button" href="<?= 'detail.php?movie_id=' . $movie['id'] ?>">
			<button>Подробнее</button>
		</a>
	</div>
</div>