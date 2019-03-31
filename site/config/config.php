<?php return [
	'debug'                         => false,
	'panel'                         => false,
	'languages'                     => true,
	'date'                          => [
		'handler' => 'strftime'
	],
	'sylvainjule.matomo.url'        => 'https://stats.kleiner-als.de', #required
	'sylvainjule.matomo.id'         => false, #required
	'sylvainjule.matomo.token'      => '', // #required for the panel integration
	'sylvainjule.matomo.active'     => false,
	'sylvainjule.matomo.debug'      => false,
	'sylvainjule.matomo.trackUsers' => false,
	'sylvainjule.matomo.blacklist'  => ['127.0.0.1', '::1'],
];