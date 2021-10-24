<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->kirbytextinline(); ?></h2>
	<?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="box">
				<?= $module->text()->kirbytext(); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
				<?= $module->text2()->kirbytext(); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
				<?= $module->text3()->kirbytext(); ?>
            </div>
        </div>
    </div>

</div>