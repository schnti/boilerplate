<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

	<?= $module->text()->kirbytext() ?>

    <div class="row g-4
        <?php e($module->grid()->isNotEmpty(), 'row-cols-' . $module->grid(), 'row-cols-1'); ?>
        <?php e($module->gridSm()->isNotEmpty(), 'row-cols-sm-' . $module->gridSm(), 'row-cols-sm-2'); ?>
        <?php e($module->gridMd()->isNotEmpty(), 'row-cols-md-' . $module->gridMd(), 'row-cols-md-4'); ?>
        <?php e($module->gridLg()->isNotEmpty(), 'row-cols-lg-' . $module->gridLg(), 'row-cols-lg-6'); ?>
        <?php e($module->gridXl()->isNotEmpty(), 'row-cols-xl-' . $module->gridXl(), 'row-cols-xl-8'); ?>
        <?php e($module->gridXxl()->isNotEmpty(), 'row-cols-xxl-' . $module->gridXxl(), 'row-cols-xxl-12'); ?>
       ">
		<?php foreach ($module->files() as $file): ?>
            <div class="col"> ">
                <div class="picture">
					<?php $thumb = ($module->croping()->bool()) ? $file->crop(400, 400) : $file->resize(400); ?>
                    <img src="<?= $thumb->url(); ?>" class="img-fluid" alt="">
                </div>
            </div>
		<?php endforeach; ?>
    </div>

</div>