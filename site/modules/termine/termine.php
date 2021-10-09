<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

	<?php $datetime = new DateTime('yesterday'); ?>

    <div class="row">
        <div class="col-sm-12 offset-md-2 col-md-8">

            <div class="row">
				<?php foreach ($module->events()->toStructure()->filterBy('date', '>', $datetime->getTimestamp())->sortBy('date', 'asc') as $event): ?>
                    <div class="col-sm-6">

                        <div class="cal">
                            <span class="glyphicon glyphicon-calendar"></span>

                            <h5><?= $event->title()->value(); ?></h5>

							<?php
							$time = '';

							if ($event->start()->isNotEmpty()) {

								$time .= ', ' . $event->start()->value();

								if ($event->stop()->isNotEmpty()) {
									$time .= ' bis ' . $event->stop()->value();
								}

								$time .= ' Uhr';
							}
							?>

							<?= $event->date('%d. %b. %Y', 'date'); ?><?= $time; ?>

                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
