<div class="container">

	<?php if ($module->titleDisplay()->bool()): ?>
        <h2><?= $module->title()->html(); ?></h2>
	<?php endif; ?>

    <div class="row">
        <div class="col-md-6">
			<?= $module->text()->kirbytext(); ?>
        </div>
        <div class="col-md-6">

			<?= $module->text2()->kirbytext(); ?>


			<?php $events = $module->events()->toStructure()->filter(function ($p) {
				return $p->from()->toDate('%Y%m%d') >= date('Ymd') || ($p->to()->isNotEmpty() && $p->to()->toDate('%Y%m%d') >= date('Ymd'));
			})->sortBy('to', 'asc'); ?>

            <ul>
				<?php foreach ($events as $event): ?>

					<?php

					// only start
					if ($event->to()->isEmpty()) {
						$date = $event->from()->toDate('%d. %B %Y');
						//same year
					} else if ($event->from()->toDate('%Y') == $event->to()->toDate('%Y')) {
						//same month
						if ($event->from()->toDate('%m.%Y') == $event->to()->toDate('%m.%Y')) {
							//same day
							if ($event->from()->toDate('%d.%m.%Y') == $event->to()->toDate('%d.%m.%Y')) {
								$date = $event->from()->toDate('%d. %B %Y', 'date');
							} else {
								$date = $event->from()->toDate('%d.') . ' - ' . $event->to()->toDate('%d. %B %Y');
							}
						} else {
							$date = $event->from()->toDate('%d. %B') . ' - ' . $event->to()->toDate('%d. %B %Y');
						}
					} else {
						$date = $event->from()->toDate('%d. %B %Y') . ' - ' . $event->to()->toDate('%d. %B %Y');
					}

					?>

                    <li><strong><?= $date; ?></strong> <?= $event->title()->html(); ?></li>

				<?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>