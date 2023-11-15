<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
	</style>

</head>
<body>
<div class="wrapper">
	<header class="sidebar">
		<a href="/" class="logo-link">
			<img src="../img/logo.svg" alt="logo">
		</a>
		<nav class="menu">
			<ul>
				<li class="menu-item"><a href="/html/index.html" class="menu-link">Главная</a></li>
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
				<img src="../img/search.svg" alt="search">
				<label><input name="search" placeholder="Поиск по каталогу..." type="search"></label>
			</div>
			<button type="submit">Искать</button>
		</form>
		<form class="add-film" action="#">
			<button type="submit">Добавить фильм</button>
		</form>
	</section>
	<section class="catalog">
		<div class="movie-item">
			<img src="../img/No Time to Die.png" alt="Не время умирать">
			<div class="title">
				<h2>Не время умирать (2021)</h2>
				<h3>No Time To Die</h3>
			</div>
			<hr>
			<div class="description">
				<p>Джеймс Бонд оставил оперативную службу и наслаждается спокойной жизнью на Ямайке. Все меняется, когда на острове появляется его старый друг Феликс Лейтер из ЦРУ с просьбой о помощи.</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
		<div class="movie-item">
			<img src="../img/Dune.png" alt="Дюна">
			<div class="title">
				<h2>Дюна (2021)</h2>
				<h3>Dune</h3>
			</div>
			<hr>
			<div class="description">
				<p>Человечество расселилось по далёким планетам, а за власть над обитаемым пространством постоянно борются разные могущественные семьи. В центре противостояния оказывается пустынная...</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
		<div class="movie-item active">
			<img src="../img/La casa de parel.png" alt="Бумажный дом">
			<div class="title">
				<h2>Бумажный дом</h2>
				<h3>La casa de parel</h3>
			</div>
			<hr>
			<div class="description">
				<p>Восемь воров берут заложников и запираются в Королевском монетном дворе Испании, пока криминальный авторитет манипулирует полицией, чтобы реализовать свой план.</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
		<div class="movie-item">
			<img src="../img/Wonder Woman 1984.png" alt="Чудо-женщина: 1984">
			<div class="title">
				<h2>Чудо-женщина: 1984 (2020)</h2>
				<h3>Wonder Woman 1984</h3>
			</div>
			<hr>
			<div class="description">
				<p>1984 год. Диана всё ещё грустит по погибшему Стиву, борется с мелким криминалом и работает в музее Смитсоновского института. Однажды она знакомится с новой коллегой Барбарой, специалисткой широкого...</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
		<div class="movie-item">
			<img src="../img/Rick and Morty.png" alt="Рик и морти">
			<div class="title">
				<h2>Рик и Морти</h2>
				<h3>Rick and Morty</h3>
			</div>
			<hr>
			<div class="description">
				<p>В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников. А вот его дедуля занимается необычными научными...</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
		<div class="movie-item">
			<img src="../img/Raya and the Last Dragon.png" alt="Райя и последний дракон">
			<div class="title">
				<h2>Райя и последний дракон</h2>
				<h3>Raya and the Last Dragon</h3>
			</div>
			<hr>
			<div class="description">
				<p>Давным-давно в волшебной стране Кумандре бок о бок с людьми жили драконы — создатели и хранители воды. Мирной жизни пришел конец, когда появились друуны. Порождения тьмы обращали людей и драконов в ...</p>
			</div>
			<div class="footer">
				<img src="../img/clock.svg" alt="clock">
				<p class="time">163 мин. / 02:43</p>
				<p class="genre">боевик, триллер, приключения</p>
			</div>
			<div class="movie-item-hover">
				<form class="detail-button" action="detail.html">
					<button type="submit">Подробнее</button>
				</form>
			</div>
		</div>
	</section>
</div>
</body>
</html>