<?php return [
	'debug'     => false,
	'panel'     => false,
	'languages' => true,
	'date'      => [
		'handler' => 'intl'
	],
	'slugs'     => 'de',

	// Salt und Cookie-Key: pro Projekt einmalig eigene Werte erzeugen und
	// die beiden Zeilen einkommentieren — NIEMALS aus der Vorlage
	// übernehmen, sonst laufen alle Kundenseiten auf demselben Schlüssel.
	//
	//   php -r 'echo bin2hex(random_bytes(32)), PHP_EOL;'
	//
	// Solange sie fehlen, weist Kirby im Panel unter System darauf hin.
	// Diese Warnung ist die Erinnerung und wird bewusst nicht stillgelegt.
	'content' => [
		'uuid' => false,
		//		'salt' => '',
	],

	//	'cookie' => ['key' => ''],

	// Nur einschalten, wenn ein Panel-Plugin seine Vue-Templates erst im
	// Browser übersetzt. Prüfen mit:
	//
	//   grep -rlE 'template:\s*[`"'"'"']' site/plugins/*/ --include='*.js'
	//
	// Gepunktet, weil die Host-Configs 'panel' => true setzen und Kirby mit
	// array_replace_recursive merged — ein Skalar ersetzt ein Array komplett.
	'panel.vue.compiler'                => false,

	'home'                              => 'home',

	//	'medienbaecker.modules.default' => 'gallery',
	'medienbaecker.modules.autopublish' => true,

	'thumbs' => [
		'format' => 'webp',
		'quality' => 90,
	],

	'schnti.sitemap.xml.sites.blacklist'     => ['error', 'sitemap', 'thankyou'],
	'schnti.sitemap.xml.sites.whitelist'     => ['home', 'impressum', 'datenschutzerklaerung'],
	'schnti.sitemap.xml.sites.prio'          => [],
	'schnti.sitemap.xml.templates.blacklist' => [],
	'schnti.sitemap.xml.templates.whitelist' => [],
	'schnti.sitemap.xml.showUnlistedSites'   => false,
	'schnti.sitemap.xml.showOnePagerModules' => false,
	'schnti.sitemap.xml.showTags'            => false,
	//
	//	'schnti.sitemap.html.sites.blacklist'     => ['error', 'sitemap', 'thankyou'],
	//	'schnti.sitemap.html.sites.whitelist'     => ['home', 'impressum', 'datenschutzerklaerung'],
	//	'schnti.sitemap.html.sites.prio'          => [],
	//	'schnti.sitemap.html.templates.blacklist' => [],
	//	'schnti.sitemap.html.templates.whitelist' => [],
	//	'schnti.sitemap.html.showUnlistedSites'   => false,
	//	'schnti.sitemap.html.showOnePagerModules' => false,
	//	'schnti.sitemap.html.showTags'            => false,
	//
	//	'schnti.sitemap.json.sites.blacklist'     => ['error', 'sitemap', 'thankyou'],
	//	'schnti.sitemap.json.sites.whitelist'     => ['home', 'impressum', 'datenschutzerklaerung'],
	//	'schnti.sitemap.json.sites.prio'          => [],
	//	'schnti.sitemap.json.templates.blacklist' => [],
	//	'schnti.sitemap.json.templates.whitelist' => [],
	//	'schnti.sitemap.json.showUnlistedSites'   => false,
	//	'schnti.sitemap.json.showOnePagerModules' => false,
	//	'schnti.sitemap.json.showTags'            => false

	'schnti.legal.username'   => '',
	'schnti.legal.password'   => '',
	'schnti.legal.cache.data' => false,

	// Fallback für Seiten ohne eigene Auswahl. Ab schnti/legal 1.5 wird die
	// Klauselauswahl im Panel gepflegt (Legal-Seite -> Abschnitt "Klauseln");
	// sobald dort etwas gewählt ist, hat das Vorrang vor dieser Liste.
	// Die auskommentierten Zeilen bleiben als Nachschlagewerk stehen.

	// Leer lassen und pro Projekt füllen. Ohne Werte gibt das Snippet nichts
	// aus und der Panel-Menüpunkt "Analytics" bleibt ausgegraut.
	'schnti.umami'            => [
		'sharedLink' => '',
		'script'     => '',
		'id'         => '',
	],
];
