<?php
/**
 * @var string $title
 * @var string $content
*/
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$title?></title>

	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
	</style>

</head>
<body>
<div class="wrapper">
	<header class="sidebar">
		<a href="/public" class="logo-link">
			<img src="<?= "/img/logo.svg"?>" alt="logo">
		</a>
		<nav class="menu">
			<ul>
				<li class="menu-item"><a href="/index.html" class="menu-link">Главная</a></li>
				<li class="menu-item"><a href="#" class="menu-link active">Триллер</a></li>
				<li class="menu-item"><a href="#" class="menu-link">Комедия</a></li>
				<li class="menu-item"><a href="#" class="menu-link">...</a></li>
				<li class="menu-item"><a href="#" class="menu-link">Фантастика</a></li>
				<li class="menu-item"><a href="#" class="menu-link">Избранное</a></li>
			</ul>
		</nav>
	</header>
	<section class="toolbar">
		<form class="search" action="" method="get">
			<div class="field">
				<img src="<?= "/img/search.svg"?>" alt="search">
				<label><input name="search" placeholder="Поиск по каталогу..." type="search"></label>
			</div>
			<button type="submit">Искать</button>
		</form>
		<form class="add-film" action="#">
			<button type="submit">Добавить фильм</button>
		</form>
	</section>
	<section class="content">
		<?= $content?>
	</section>
</div>
</body>
</html>