<div class="wrapper wrapper--gallery">
	<div class="wrapper--gallery_restrict flow">
		<h3><?= $block->text() ?></h3>
		<ul>
			<?php foreach ($block->images()->toFiles() as $image): ?>
			<li>
			  <img src="<?= $image->resize(300)->url() ?>" alt="Refugee Sponsor">
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>