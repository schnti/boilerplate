<?php snippet('header'); ?>

<?php foreach ($pages->listed() as $module) : ?>
    <div class="wrapper <?= str_replace('.', '__', $module->intendedTemplate()); ?> <?= $module->classes()->toCss(); ?>">

        <div class="anchor" id="<?= $module->uid(); ?>"></div>

		<?php if ($next = $module->nextListed()): ?>
            <a class="next-url" href="<?= $page->url(); ?>#<?= $next->uid(); ?>"><span class="sr-only">next listed page</span></a>
		<?php endif; ?>

		<?php snippet('sections/' . $module->intendedTemplate(), ['module' => $module]); ?>

    </div>
<?php endforeach; ?>

<?php snippet('footer'); ?>