<?php if ($file = $module->logo()->toFile()): ?>
    <img class="logo" src="<?= $file->resize(800)->url(); ?>"> </div>
<?php endif; ?>

