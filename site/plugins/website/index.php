<?php

Kirby::plugin('schnti/website', [
	'fieldMethods' => [
		'toCss' => function ($field) {
			return strtolower(implode(' ', $field->split()));
		}
	]
]);