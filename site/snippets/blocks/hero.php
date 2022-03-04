<div class="wrapper wrapper--hero">
	<?php if($image = $block->photo()->toFile()): ?>
	<img src="<?= $image->resize(1280)->url() ?>" alt="<?= $block->photoalt() ?>">
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