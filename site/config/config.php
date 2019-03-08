<?php return [
	'debug'                         => true,
	'languages'                     => true,
	'date'                          => [
		'handler' => 'strftime'
	],
	'sylvainjule.matomo.url'        => 'https://stats.kleiner-als.de', #required
	'sylvainjule.matomo.id'         => 6, #required
	'sylvainjule.matomo.token'      => '', //1d90efa5b195a8b539b34593bf55d467 #required for the panel integration
	'sylvainjule.matomo.active'     => false,
	'sylvainjule.matomo.debug'      => false,
	'sylvainjule.matomo.trackUsers' => false,
	'sylvainjule.matomo.blacklist'  => ['127.0.0.1', '::1'],
];