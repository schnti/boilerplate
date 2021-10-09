<?php if ($modules = $page->find('modules')) : ?>

	<?php foreach ($modules->children()->listed() as $module) : ?>
        <div class="wrapper <?= $module->moduleId(); ?>">

            <div class="anchor" id="<?= $module->uid(); ?>"></div>

			<?php snippet('modules/' . $module->intendedTemplate(), ['module' => $module]); ?>

        </div>
	<?php endforeach; ?>

<?php endif; ?>
