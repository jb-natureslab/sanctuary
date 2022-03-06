<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page->seotitle() ?></title>
	
	<meta name="description" content="<?= $page->meta() ?>">
	<meta property="og:title" content="Sanctuary Foundation | Supporting New Arrivals from Ukraine">
	<meta property="og:description" content="<?= $page->meta() ?>">
	<meta property="og:site_name" content="Sanctuary Foundation">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://sanctuaryfoundation.org.uk">
	<meta property="og:image" content="https://sanctuaryfoundation.org.uk/assets/images/og.jpg">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">  
	<?= css('/assets/css/stylesheet.css?v='.rand()) ?>
</head>
<body>
	<header>
		<div class="header_restrict">
			
			<?php
				if($page->title()=='Home' || $page->title()=='Thanks'){
					echo '<a class="logo" href="/"><img src="/assets/images/sanctuary-white.svg" alt="Sanctuary Foundation" /></a>';		
				}else{
					echo '<a class="logo" href="/"><img src="/assets/images/sanctuary-color.svg" alt="Sanctuary Foundation" /></a>';
				}
			?>
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