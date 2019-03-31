<?php if ($page->isModule()) go(url()); ?>

<?php snippet('header'); ?>

<div class="container">

    <div class="logo-subsites">
		<?php if ($p = $pages->find('header')): ?>
			<?php if ($logo = $p->logo()->toFile()): ?>
                <a href="<?= url(); ?>">
                    <img src="<?= $logo->resize(300)->url(); ?>">
                </a>
			<?php endif; ?>
		<?php endif; ?>
    </div>

    <div class="wrapper">

        <h1><?= $page->title()->html(); ?></h1>

		<?= $page->text()->kirbytext(); ?>
    </div>
</div>

<?php snippet('footer'); ?>
