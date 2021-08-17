<div class="<?= $block->class()?>" style="<?= $block->style() ?>" id="<?= $block->settingsId() ?>">
<?= $block->content()->text()->toBlocks() ?>
</div>