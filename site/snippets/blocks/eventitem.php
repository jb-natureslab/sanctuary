<div class="wrapper wrapper--event">
	<div class="wrapper--event_text">
		<div class="restrict">
			<div class="flow">
			<?php if($image = $block->photo()->toFile()): ?>
			<img src="<?= $image->resize(1024)->url() ?>" alt="<?= $block->photoalt() ?>">
			<?php endif ?>
			</div>
			<div class="flow">
			<h2><?= $block->heading() ?></h2>
			<h3><?= $block->subheading() ?></h3>
			<?= $block->intro()->kt() ?>
			<?php if (strlen($block->button())>0): ?>
			<a class="button light" href="<?= $block->buttonurl() ?>"><?= $block->button() ?></a>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>