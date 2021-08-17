<?php $service = $block->service()->toPage() ?>
		<?php if($service->icon()->isNotEmpty()): ?>
			<span class="icon-wrapper"><span class="icon is-large has-style"><ion-icon name="<?= $service->icon() ?>"></ion-icon></span></span>
		<?php endif ?>
  <p><a href="<?= $service->url() ?>" class="is-size-5"><?= $service->title() ?></a></p>