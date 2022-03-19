<?php snippet('header'); ?>
	
	<main>
		<?= $page->text()->toBlocks() ?>
		<div class="wrapper wrapper--text">
			<div class="wrapper--text_restrict flow">
				<h2>Resource Type</h2>
				<ul class="subpages">
				<?php foreach($page->children()->listed() as $item):?>
					<li>
						<figure>
							<?php if($item->image()){ ?>
							<a href="<?= $item->url() ?>"><?= $item->image()->resize(768,300) ?></a>
							<?php } ?>
						</figure>
						<a class="button" href="<?= $item->url() ?>"><?= $item->title() ?></a>
					</li>
				<?php endforeach ?>
				</ul>
			</div>
		</div>
	</main>
	
<?php snippet('footer'); ?>