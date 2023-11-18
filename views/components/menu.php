<?php
/**
 * @var array $items
 * class="menu-link
 */

$currentPage = $_SERVER['REQUEST_URI'];
?>

<nav class="menu">
	<ul>
		<?php
		foreach ($items as $item): ?>
			<li class="menu-item"><a href="<?= $item['url'] ?>" class="menu-link <?= ($currentPage === $item['url'])
					? 'active' : ''; ?>">
					<?= $item['text'] ?></a></li>
		<?php
		endforeach; ?>
	</ul>
</nav>
