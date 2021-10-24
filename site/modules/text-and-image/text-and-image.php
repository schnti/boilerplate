<div class="container">

    <?php $imageLeft = ($module->position()->value() == 'left'); ?>

    <div class="row justify-content-md-center">
        <div class="col-md-8 col-lg-4 <?php e($imageLeft, 'offset-lg-1'); ?>">
			<?php if ($module->titleDisplay()->bool()): ?>
                <h2><?= $module->title()->kirbytextinline(); ?></h2>
			<?php endif; ?>

            <?= $module->text()->kirbytext(); ?>
        </div>
        <div class="col-md-4 col-lg-5 <?php e($imageLeft, 'order-first', 'offset-lg-1'); ?>">

			<?php if ($image = $module->picture()->toFile()) : ?>
                <div class="image">
                    <img src="<?= $image->crop(800, 600)->url(); ?>" class="img-fluid" alt=""/>
                </div>
			<?php endif; ?>
        </div>

    </div>

</div>