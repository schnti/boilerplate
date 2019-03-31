<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

    <div class="row">
        <div class="col-md-4">
			<?= $module->text()->kirbytext(); ?>
        </div>
        <div class="col-md-4">
			<?= $module->text2()->kirbytext(); ?>
        </div>
        <div class="col-md-4">
			<?= $module->text3()->kirbytext(); ?>
        </div>
    </div>

</div>