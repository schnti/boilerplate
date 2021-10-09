<div class="container">

    <div class="row align-items-center">
        <div class="col-sm-7 col-md-8">
			<?php if ($module->titleDisplay()->bool()): ?>
                <h2><?= $module->title()->html(); ?></h2>
			<?php endif; ?>

            <?= $module->text()->kirbytext(); ?>
        </div>
        <div class="col-sm-5 <?php e($module->position()->value() == 'left', 'order-sm-first'); ?> col-md-4">

			<?php if ($image = $module->picture()->toFile()) : ?>
                <div class="image">
                    <img src="<?= $image->crop(600, 600)->url(); ?>" class="img-fluid" alt=""/>
                </div>
			<?php endif; ?>
        </div>

    </div>

</div>