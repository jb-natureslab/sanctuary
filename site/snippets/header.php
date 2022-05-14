<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $page->seotitle() ?></title>
	
	<meta name="description" content="<?= $page->meta() ?>">
	
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@sanctuaryfd" />
	<meta name="twitter:creator" content="@sanctuaryfd" />
	<meta name="twitter:image:alt" content="Supporting New Arrivals from Ukraine to the UK">
	<meta property="og:title" content="<?= $page->seotitle() ?>">
	<meta property="og:description" content="<?= $page->meta() ?>">
	<meta property="og:site_name" content="Sanctuary Foundation">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://sanctuaryfoundation.org.uk">
	<meta property="og:image" content="https://sanctuaryfoundation.org.uk/assets/images/og_2.jpg">
	
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
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
