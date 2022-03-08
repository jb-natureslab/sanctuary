<div class="wrapper wrapper--hero">
	<?php if($image = $block->photo()->toFile()): ?>
	<img src="<?= $image->resize(400)->url() ?>" srcset="<?= $image->srcset([
	  '400w'  => ['width' => 400, 'format' => 'webp'],
	  '640w'  => ['width' => 640, 'format' => 'webp'],
	  '800w'  => ['width' => 800, 'format' => 'webp'],
	  '1200w' => ['width' => 1200, 'format' => 'webp']
	]); ?>" alt="<?= $block->photoalt() ?>">
	
	<?php endif ?>
	<div class="wrapper--hero_text">
		<div class="restrict flow">
			<h1><?= $block->heading() ?></h1>
			<h2><?= $block->subheading() ?></h2>
			<?= $block->intro()->kt() ?>
			<?php if (strlen($block->button())>0): ?>
			<a class="button" href="<?= $block->buttonurl() ?>"><?= $block->button() ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>