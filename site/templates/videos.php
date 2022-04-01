<?php snippet('header'); ?>
	
	<main>
		<div class="wrapper wrapper--text">
			<div class="wrapper--text_restrict flow">
				<?= $page->introduction()->kt() ?>	
				<ul class="filters">
					<li><button data-category="safeguarding">Safeguarding</button></li>
					<li><button data-category="stories">Stories from Ukraine</button></li>
					<li><button data-category="hosting">Hosting</button></li>
					<li><button data-category="visa">Visa Applications</button></li>
					<li><button data-category="children">Children</button></li>
					<li><button data-category="trauma">Trauma</button></li>
					<li><button data-category="all">All Videos</button></li>
				</ul>
			</div>
		</div>
		<div class="wrapper wrapper--text">
			<div class="wrapper--text_restrict flow">
				<ul class="video-resources">
					<?= $page->text()->toBlocks() ?>			
				</ul>
			</div>
		</div>
	</main>
	
	<script>
	$('button').click(function(){
		$('button').removeClass('active');
		$(this).addClass('active');
		var category = $(this).data('category');
		if(category == 'all'){
			$('.video-resources li').show();
		}else{
			$('.video-resources li').hide();
			$('.video-resources li.'+category).show();	
		}
	})
	</script>
	
<?php snippet('footer'); ?>