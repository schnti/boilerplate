<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?? 'de'; ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php e(!$page->isHomePage(), $page->title()->value() . ' - '); ?><?= $site->title()->value(); ?></title>
    <meta name="description" content="<?= $page->seoDescription()->or($site->seoDescription()); ?>">

    <?= css('assets/main.css'); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#952641">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="<?= $site->title()->value(); ?>">
    <meta name="application-name" content="<?= $site->title()->value(); ?>">
    <meta name="msapplication-TileColor" content="#952641">
    <meta name="msapplication-TileImage" content="/assets/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <!--    <meta name="theme-color" content="#ea1c42">-->

</head>

<body>

    <header class="header">
        <div class="nav-placeholder">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="<?= $site->url(); ?>">
                        <?= $site->title(); ?>
                        <?php if ($logo = $site->image('logo.svg')) : ?>
                            <img class="img-responsive" src="<?= $logo->url(); ?>" width="100" alt="<?= $logo->alt(); ?>" />
                        <?php endif; ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapse">
                        <ul class="navbar-nav ms-auto">
                            <!-- Page Nav -->
                            <?php foreach ($pages->listed() as $p) : ?>
                                <li class="nav-item "><a class="nav-link <?php e($p->isOpen(), 'active'); ?>" href="<?= $p->url(); ?>" <?php e($p->isOpen(), 'aria-current="page"'); ?>><span><?= $p->title()->kirbytextinline(); ?></span></a></li>
                            <?php endforeach; ?>
                            <!-- Module Nav -->
                            <?php foreach ($pages->find('home')->modules() as $module) : ?>
                                <?php if ($module->navDisplay()->bool()) : ?>
                                    <li class="nav-item "><a class="nav-link" href="<?= $module->url(); ?>"><span><?= $module->title()->kirbytextinline(); ?></span></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">