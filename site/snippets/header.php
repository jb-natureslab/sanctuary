<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page->seotitle() ?></title>
	
	<meta name="description" content="<?= $page->meta() ?>">
	
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@krishk" />
	<meta name="twitter:creator" content="@krishk" />
	<meta name="twitter:image:alt" content="Supporting New Arrivals from Ukraine to the UK">
	<meta property="og:title" content="<?= $page->seotitle() ?>">
	<meta property="og:description" content="<?= $page->meta() ?>">
	<meta property="og:site_name" content="Sanctuary Foundation">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://sanctuaryfoundation.org.uk">
	<meta property="og:image" content="https://sanctuaryfoundation.org.uk/assets/images/og.jpg">
	
	<link rel="preconnect" href="https://www.youtube.com">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@700&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@700&display=swap" media="print" onload="this.media='all'" />
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@700&display=swap" />
	</noscript>
	
	<script src='//code.jquery.com/jquery-3.4.1.min.js'></script>
	<script>
		$(document).ready(function(){
			$('#menu').click(function(){
				console.log('click');
				$('nav ul').toggleClass('show');
			});
		});
	</script>
	<?= css('/assets/css/stylesheet.css?v='.rand()) ?>
</head>
<body>
	<header>
		<div class="header_restrict">
			
			<?php
				if($page->isHomePage()){
					echo '<a class="logo" href="/"><img src="/assets/images/sanctuary-white.svg" alt="Sanctuary Foundation" /></a>';		
				}else{
					echo '<a class="logo" href="/"><img src="/assets/images/sanctuary-color.svg" alt="Sanctuary Foundation" /></a>';
				}
				
				$items = $pages->listed();
			?>
			<nav <?php if(!$page->isHomePage()){echo 'class="internal"';} ?>>
				<button id="menu">Menu</button>
				<ul>
					<li><a href="/#about">About</a></li>
					<li><a href="/#pledge">Pledge Your Support</a></li>
					<li><a href="/#give">Give</a></li>
					<?php foreach($items as $item): ?>
				    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
				    <?php endforeach ?>
				</ul>
			</nav>
		</div>
	</header>
