<div class="container">
	<?php if ($file = $module->picture()->toFile()): ?>
        <img class="logo" src="<?= $file->resize(800)->url(); ?>">
	<?php endif; ?>
</div>