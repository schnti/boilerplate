<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-9">

			<?php if ($module->titleDisplay()->bool()): ?>
                <h2><?= $module->title()->html(); ?></h2>
			<?php endif; ?>

			<?= $module->text()->kirbytext(); ?>
        </div>
    </div>

</div>