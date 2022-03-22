<div class="wrapper wrapper--campaign">
	<div class="wrapper--campaign_restrict">
		<?php if($image = $block->photo()->toFile()): ?>
		<img src="<?= $image->resize(1024)->url() ?>" alt="Campaign">
		<?php endif ?>	
		<div class="content flow">
			<?= $block->text()->kt() ?>
		</div>
		<div class="buttons">
			<?php if (strlen($block->button())>0): ?>
			<a class="button" href="<?= $block->buttonurl() ?>"><?= $block->button() ?></a>
			<?php endif; ?>
			<?php if (strlen($block->buttontwo())>0): ?>
			<a class="button" href="<?= $block->buttontwourl() ?>"><?= $block->buttontwo() ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>