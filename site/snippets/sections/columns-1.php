<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

    <div class="row">
        <div class="col-md-10">
			<?= $module->text()->kirbytext(); ?>
        </div>
    </div>

</div>