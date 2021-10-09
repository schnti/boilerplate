<!DOCTYPE html>
<html lang="<?= $kirby->language() ? $kirby->language()->code() : 'de'; ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php e(!$page->isHomePage(), $page->title()->value() . ' - '); ?><?= $site->title()->value(); ?></title>
    <meta name="description" content="<?= $site->description()->value(); ?>">
    <meta name="keywords" content="<?= $site->keywords()->value(); ?>">

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
    <meta name="theme-color" content="#ea1c42">

</head>
<body>

<header class="header">
	<?php snippet('menu'); ?>
</header>

<main class="main">
