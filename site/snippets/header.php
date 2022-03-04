<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page->seotitle() ?></title>
	<meta name="description" content="<?= $page->meta() ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">  
	<?= css('/assets/css/stylesheet.css?v='.rand()) ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>
<body>
	<header>
		<div class="header_restrict">
			<a class="logo" href="<?= $site->url() ?>"><img src="/assets/images/sanctuary.svg" alt="Sanctuary Foundation" /></a>
<!--
			<nav>
				<button class="bars"><i class="fa fa-bars"></i></button>
				<ul>
					<li class="home"><a href="/">Home</a></li>
				<?php foreach($site->children()->listed() as $item):?>
					<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
				<?php endforeach ?>
				</ul>
			</nav>
-->
		</div>
	</header>