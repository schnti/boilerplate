<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

	<?= $module->text()->kirbytext() ?>

    <div class="row">
		<?php foreach ($module->files() as $file): ?>
            <div class="
                    <?php e($module->grid()->isNotEmpty(), 'col-' . $module->grid(), 'col-12'); ?>
                    <?php e($module->gridSm()->isNotEmpty(), 'col-sm-' . $module->gridSm(), 'col-sm-6'); ?>
                    <?php e($module->gridMd()->isNotEmpty(), 'col-md-' . $module->gridMd(), 'col-md-4'); ?>
                    <?php e($module->gridLg()->isNotEmpty(), 'col-lg-' . $module->gridLg(), 'col-lg-3'); ?>
                    <?php e($module->gridXl()->isNotEmpty(), 'col-xl-' . $module->gridXl(), 'col-xl-2'); ?>
                    ">
                <div class="picture">
					<?php $thumb = ($module->croping()->bool()) ? $file->crop(300, 300) : $file->resize(300); ?>
                    <img src="<?= $thumb->url(); ?>" class="img-fluid" alt="">
                </div>
            </div>
		<?php endforeach; ?>
    </div>

</div>