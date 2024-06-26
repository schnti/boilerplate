<?php snippet('header'); ?>

<?php if ($page->hasModules()) : ?>
	<?php foreach ($page->modules() as $module) : ?>
		<div class="anchor" id="<?= $module->uid(); ?>"></div>
		<div class="wrapper <?= $module->moduleId(); ?> <?= implode(" ", $module->classes()->split()); ?>">
			<?php echo $module->renderModule(); ?>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

<?php snippet('footer'); ?>