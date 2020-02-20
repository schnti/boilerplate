<div class="nav-placeholder">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= url(); ?>">
				<?= $site->title(); ?>
				<?php if ($logo = $site->image('logo.svg')): ?>
                    <img class="img-responsive" src="<?= $logo->url(); ?>" width="100" alt=""/>
				<?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
					<?php foreach ($pages->listed() as $p): ?>
                        <li class="nav-item "><a class="nav-link" href="<?= $p->url(); ?>"><span><?= $p->title()->html(); ?></span>
								<?php e($p->isOpen(), '<span class="sr-only">(current)</span>'); ?>  </a></li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>