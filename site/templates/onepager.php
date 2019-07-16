<?php snippet('header'); ?>

<?php foreach ($page->children()->listed() as $module) : ?>
    <div class="wrapper <?= $module->moduleName(); ?> <?= $module->classes()->toCss(); ?>">

        <div class="anchor" id="<?= $module->uid(); ?>"></div>

		<?php snippet('modules/' . $module->intendedTemplate(), ['module' => $module]); ?>

    </div>
<?php endforeach; ?>

<?php snippet('footer'); ?>