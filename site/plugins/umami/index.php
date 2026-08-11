<?php

Kirby::plugin('schnti/umami', [
	'areas' => [
		'umami' => function ($kirby) {
			$cfg  = option('schnti.umami', []);
			$link = $cfg['sharedLink'] ?? null;

			$hasLink = is_string($link) && $link !== '';

			return [
				'label'    => 'Analytics',
				'icon'     => 'chart',
				'menu'     => true,
				'link'     => $hasLink ? $link : 'site', // Fallback: Panel "site"
				'target'   => '_blank',
				'disabled' => !$hasLink, // Wenn kein Link gesetzt ist, Menüpunkt ausgrauen
				'views'    => [] // Keine Views nötig, weil wir nur verlinken
			];
		},
	],

	'snippets' => [
		'umami' => __DIR__ . '/snippets/umami.php'
	],
]);
