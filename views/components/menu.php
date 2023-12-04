<?php
/**
 * @var array $items
 */

$currentPage = $_SERVER['REQUEST_URI'];
?>

<nav class="menu">
	<ul>
		<?php
		foreach ($items as $item):?>
			<li class="menu-item"><a href="<?= $item['url'] ?>" class="menu-link <?=
				((stripos($currentPage, substr($item['url'], 2)) !== false and $item['url'] !== '/') or
					($currentPage === $item['url']))
					? 'active' : ''?>">
					<?= $item['text'] ?></a></li>
		<?php
		endforeach;?>
	</ul>
</nav>
