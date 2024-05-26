<?php return [
	'debug'     => false,
	'panel'     => false,
	'languages' => true,
	'date'      => [
		'handler' => 'intl'
	],
	'slugs'     => 'de',

	'content' => [
		'uuid' => false
	],

	'home'                              => 'home',

	//	'medienbaecker.modules.default' => 'gallery',
	'medienbaecker.modules.autopublish' => true,

	'medienbaecker.autoresize.maxWidth' => 2000,

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

	// En-/disable all logging (true/false)
	'distantnative.retour.logs'              => true,
	// Array of paths to ignore as 404s
	'distantnative.retour.ignore'            => [],
	// Number of months after which logs should be deleted automatically
	'distantnative.retour.deleteAfter'       => 1,
	// Absolut path for location of redirects config
	// Default: site/config/redirects.yml
	'distantnative.retour.config'            => '../redirects/redirects.yaml',
	// Absolut path for location of database
	// Default: site/logs/retour.sqlite
	'distantnative.retour.database'          => '../redirects/retour.sqlite',

	'schnti.legal.username'   => '',
	'schnti.legal.password'   => '',
	'schnti.legal.cache.data' => false,
	'schnti.legal.data'       => [
		"datenschutz/datenschutz-auf-einen-blick/allgemeine-hinweise",
		"datenschutz/datenschutz-auf-einen-blick/datenerfassung-auf-unserer-website",
		//							"datenschutz/datenschutz-auf-einen-blick/analyse-tools-und-tools-von-drittanbietern",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/datenschutz",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/hinweis-zur-verantwortlichen-stelle",
		//							"datenschutz/allgemeine-hinweise-und-pflichtinformationen/gesetzlich-vorgeschriebener-datenschutzbeauftragter",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/widerruf-ihrer-einwilligung-zur-datenverarbeitung",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/widerspruchsrecht-gegen-die-datenerhebung-in-besonderen-fallen-sowie-gegen-direktwerbung-art-21-dsgvo",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/beschwerderecht-bei-der-zustaendigen-aufsichtsbehoerde",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/recht-auf-datenubertragbarkeit",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/ssl-bzw-tls-verschlusselung",
		//							"datenschutz/allgemeine-hinweise-und-pflichtinformationen/verschlusselter-zahlungsverkehr-auf-dieser-website",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/auskunft-sperrung-loschung",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/recht-auf-einschrankung-der-verarbeitung",
		"datenschutz/allgemeine-hinweise-und-pflichtinformationen/widerspruch-gegen-werbe-mails",
		//		"datenschutz/datenerfassung-auf-unserer-website/cookies",
		"datenschutz/datenerfassung-auf-unserer-website/server-log-dateien",
		//							"datenschutz/datenerfassung-auf-unserer-website/kontaktformular",
		"datenschutz/datenerfassung-auf-unserer-website/anfrage-per-e-mail-telefon-oder-telefax",
		//							"datenschutz/datenerfassung-auf-unserer-website/registrierung-auf-dieser-website",
		//							"datenschutz/datenerfassung-auf-unserer-website/registrierung-mit-facebook-connect",
		//							"datenschutz/datenerfassung-auf-unserer-website/verarbeiten-von-daten-kunden-und-vertragsdaten",
		//							"datenschutz/datenerfassung-auf-unserer-website/datenubermittlung-bei-vertragsschluss-fur-online-shops-handler-und-warenversand",
		//							"datenschutz/datenerfassung-auf-unserer-website/datenubermittlung-bei-vertragsschluss-fur-dienstleistungen-und-digitale-inhalte",
		//							"datenschutz/soziale-medien/erecht24-safe-sharing-tool",
		//							"datenschutz/soziale-medien/social-media-plugins-mit-shariff",
		//							"datenschutz/soziale-medien/facebook-plugins-like-and-share-button",
		//							"datenschutz/soziale-medien/twitter-plugin",
		//							"datenschutz/soziale-medien/google-plugin",
		//							"datenschutz/soziale-medien/instagram-plugin",
		//							"datenschutz/soziale-medien/tumblr-plugin",
		//							"datenschutz/soziale-medien/linkedin-plugin",
		//							"datenschutz/soziale-medien/xing-plugin",
		//							"datenschutz/soziale-medien/pinterest-plugin",
		//							"datenschutz/analyse-tools-und-werbung/matomo",
		//							"datenschutz/newsletter/newsletterdaten",
		//							"datenschutz/plugins-und-tools/youtube",
		//							"datenschutz/plugins-und-tools/youtube-mit-erweitertem-datenschutz",
		//							"datenschutz/plugins-und-tools/vimeo",
		//							"datenschutz/plugins-und-tools/google-web-fonts",
		//		"datenschutz/plugins-und-tools/google-web-fonts-lokal",
		//							"datenschutz/plugins-und-tools/adobe-typekit-web-fonts",
		//							"datenschutz/plugins-und-tools/google-maps",
		//							"datenschutz/plugins-und-tools/google-maps-mit-einwilligung",
		//							"datenschutz/plugins-und-tools/openstreetmap",
		//							"datenschutz/plugins-und-tools/google-recaptcha",
		//							"datenschutz/plugins-und-tools/soundcloud",
		//							"datenschutz/plugins-und-tools/spotify",
		//							"datenschutz/plugins-und-tools/zendesk",
		//							"datenschutz/zahlungsanbieter/paypal",
		//							"datenschutz/zahlungsanbieter/klarna",
		//							"datenschutz/zahlungsanbieter/sofortuberweisung",
		//							"datenschutz/zahlungsanbieter/paydirect",
		//							"datenschutz/eigene-dienste/bewerbungen",
		"disclaimer/haftung-fur-inhalte",
		"disclaimer/haftung-fur-links",
		"disclaimer/urheberrecht"
	],
];
