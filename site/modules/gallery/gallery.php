<div class="container">

    <?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->kirbytextinline(); ?></h2>
    <?php endif; ?>

    <div class="row g-4 photoswipe
        <?php e($module->grid()->isNotEmpty(), 'row-cols-' . $module->grid(), 'row-cols-1'); ?>
        <?php e($module->gridSm()->isNotEmpty(), 'row-cols-sm-' . $module->gridSm(), 'row-cols-sm-2'); ?>
        <?php e($module->gridMd()->isNotEmpty(), 'row-cols-md-' . $module->gridMd(), 'row-cols-md-4'); ?>
        <?php e($module->gridLg()->isNotEmpty(), 'row-cols-lg-' . $module->gridLg(), 'row-cols-lg-6'); ?>
        <?php e($module->gridXl()->isNotEmpty(), 'row-cols-xl-' . $module->gridXl(), 'row-cols-xl-8'); ?>
        <?php e($module->gridXxl()->isNotEmpty(), 'row-cols-xxl-' . $module->gridXxl(), 'row-cols-xxl-12'); ?>
       ">
        <?php foreach ($module->gallery()->toFiles() as $image) : ?>
            <div class="col">
                <div class="picture">

                    <?php $pic = $image->resize(2000, null, 90); ?>

                    <a href="<?= $pic->url(); ?>" data-pswp-width="<?= $pic->width(); ?>" data-pswp-height="<?= $pic->height(); ?>" target="_blank">
                        <?php $thumb = ($module->croping()->bool()) ? $image->crop(375, 250) : $image->resize(null, 400); ?>
                        <img src="<?= $thumb->url(); ?>" width="<?= $thumb->width(); ?>" height="<?= $thumb->height(); ?>" class="img-fluid" alt="<?= $image->alt(); ?>">

                        <span class="hidden-caption-content">
                            <?= $image->alt(); ?><?php if ($image->copyright()->isNotEmpty()) echo ' | &copy; ' . $image->copyright(); ?>
                        </span>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>