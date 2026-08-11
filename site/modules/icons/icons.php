<div class="container">

    <?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->kirbytextinline(); ?></h2>
    <?php endif; ?>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <?php foreach (range(1, 4) as $i): ?>

            <?php
            $picture = $module->{'picture' . $i}()->toFile();
            $title   = $module->{'title' . $i}();
            $text    = $module->{'text' . $i}();

            if (!$picture && $title->isEmpty() && $text->isEmpty()) {
                continue;
            }
            ?>

            <div class="col">
                <div class="icon">
                    <?php if ($picture): ?>
                        <img src="<?= $picture->resize(400)->url(); ?>" class="img-fluid" alt="<?= $picture->alt(); ?>">
                    <?php endif; ?>

                    <?php if ($title->isNotEmpty()): ?>
                        <h3><?= $title->kirbytextinline(); ?></h3>
                    <?php endif; ?>

                    <?= $text->kirbytext(); ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</div>
