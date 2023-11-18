<?php

/**
 * @var int|null $movie
 */

?>


<div class="detail">
	<?php
	if ($movie === null): ?>
		<p>You need choose film to see detail</p>
	<?php
	else: ?>
		<div class="header">
			<div class="title">
				<h2><?= $movie['title'] ?></h2>
				<img src="img/heart.svg" alt="heart">
			</div>
			<div class="subtitle">
				<h3>Inside Out <span class="age-limit"><?= $movie['age-restriction'] . '+' ?></span></h3>
			</div>
		</div>
		<hr>
		<div class="detail-information">
			<div>
				<img src="<?= sprintf("/img/%s.jpg", $movie['id']) ?>" alt="<?= $movie['title'] ?>" height="430px">
			</div>
			<div class="all-info">
				<div class="rating">
					<?php
					for ($i = 0; $i < floor($movie['rating']); $i++): ?>
						<div class="active square"></div>
					<?php
					endfor ?>
					<?php
					for ($i = 0; $i < 10 - floor($movie['rating']); $i++): ?>
						<div class="non-active square"></div>
					<?php
					endfor ?>
					<div class="circle"><?= $movie['rating'] ?></div>
				</div>
				<div class="about-film">
					<h2>О фильме</h2>
					<table>
						<colgroup>
							<col span="1">
							<col>
						</colgroup>
						<tr>
							<td class="row-title">Год производства:</td>
							<td class="row-info"><?= $movie['release-date'] ?></td>
						</tr>
						<tr>
							<td class="row-title">Режиссер:</td>
							<td class="row-info"><?= $movie['director'] ?></td>
						</tr>
						<tr>
							<td class="row-title">
								В главных ролях:
							</td>
							<td class="row-info">
								<?= implode(', ', $movie['cast']) ?>
							</td>
						</tr>
					</table>
				</div>
				<div class="detail-description">
					<h2>Описание</h2>
					<p><?= $movie['description'] ?></p>
				</div>
			</div>
		</div>
	<?php
	endif ?>
</div>