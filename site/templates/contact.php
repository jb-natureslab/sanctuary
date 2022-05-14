<?php snippet('header'); ?>
	
	<main>
		<?= $page->text()->toBlocks() ?>
		<div class="wrapper wrapper--text" id="<?= $block->containerid() ?>">
			<div class="contact">
				<?php if($success): ?>
		        <div class="alert success">
		            <p><?= $success ?></p>
		        </div>
		        <?php else: ?>
		        <?php if (isset($alert['error'])): ?>
		            <div class="alert error">
			            <p><?= $alert['error'] ?></p>
			        </div>
		        <?php endif ?>
		        <h2>Send Us a Message</h2>
		        <form class="form" method="post" action="<?= $page->url() ?>">
		            <div class="honeypot">
		                <label for="website">Website <abbr title="required">*</abbr></label>
		                <input type="url" id="website" name="website" tabindex="-1">
		            </div>
		            <div class="field">
		                <label for="name">
		                    Name <abbr title="required">*</abbr>
		                </label>
		                <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
		                <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
		            </div>
		            <div class="field">
		                <label for="email">
		                    Email <abbr title="required">*</abbr>
		                </label>
		                <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
		                <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
		            </div>
		            <div class="field">
		                <label for="text">
		                    Message <abbr title="required">*</abbr>
		                </label>
		                <textarea id="text" name="text" required>
		                    <?= esc($data['text'] ?? '') ?>
		                </textarea>
		                <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
		            </div>
		            <button type="submit" name="submit">Submit</button>
		        </form>
		        <?php endif ?>
			</div>
		</div>
	</main>
	
<?php snippet('footer'); ?>