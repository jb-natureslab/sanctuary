<li class="<?php foreach ($block->categories()->split() as $category): ?><?= $category ?> <?php endforeach ?>">
	<iframe
	  width="560"
	  height="315"
	  src="https://www.youtube.com/embed/<?= $block->videoid() ?>&autoplay=1"
	  srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?= $block->videoid() ?>?autoplay=1><img src=https://img.youtube.com/vi/<?= $block->videoid() ?>/hqdefault.jpg alt='Sanctuary Foundation'><span>▶</span></a>"
	  frameborder="0"
	  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
	  allowfullscreen
	  title="Sanctuary Foundation" 
	  loading="lazy"
	></iframe>
	<h2><?= $block->videoheading() ?></h2>
</li>