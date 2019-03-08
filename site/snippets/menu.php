<div class="nav-placeholder">
    <nav class="navbar fixed-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="<?= url(); ?>">
				<?php if ($logo = $site->image('logo.svg')): ?>
                    <img class="img-responsive" src="<?= $logo->url(); ?>" alt="" height="50"/>
				<?php endif; ?>
            </a>

			<?php

			$links = $site->homePage()->moduleList();

			if (count($links) > 0): ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto mx-auto text-right">
						<?php foreach ($links as $p): ?>
							<? if ($p->navDisplay()->bool()) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $site->homePage()->url(); ?>#<?= $p->uid(); ?>"><span><?= $p->title()->html(); ?></span></a>

									<?php if ($p->hasVisibleChildren()): ?>

										<?php $children = $p->children()->visible(); ?>

                                        <ul class="navbar-nav subnav">
											<?php foreach ($children as $child): ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= $child->url(); ?>"><?= $child->title()->html() ?></a>&nbsp;-&nbsp;&nbsp;&nbsp;
                                                </li>
											<?php endforeach ?>
                                        </ul>

									<?php endif; ?>
                                </li>
							<?php endif; ?>
						<?php endforeach; ?>
						<?php if ($impressum = $pages->find('impressum')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $impressum->url(); ?>"><span><?= $impressum->title()->html(); ?></span></a>
                            </li>
						<?php endif; ?>
                    </ul>
                </div>

			<?php endif; ?>
        </div>
    </nav>
</div>