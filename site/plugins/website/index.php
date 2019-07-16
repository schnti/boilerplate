<?php

Kirby::plugin('schnti/website', [
	'fieldMethods' => [
		'toCss' => function ($field) {
			return strtolower(implode(' ', $field->split()));
		},
	],
	'pageMethods'  => [
		'isModule'          => function () {
			return substr($this->intendedTemplate(), 0, 7) === 'module.';
		},
		'moduleName'        => function () {
			return str_replace('.', '__', $this->intendedTemplate());
		},
		'moduleDisplayName' => function () {
			if ($this->isModule())
				return ucwords(str_replace('-', ' ', substr($this->intendedTemplate(), 7)));
			else
				return ucwords($this->intendedTemplate());
		}
	],
	'hooks'        => [
		'kirbytags:before' => function ($text, $data, $options) {
			//			return str::replace($text, "", "");
			return Str::replace($text, ['(-)', '(br)'], ['&shy;', '<br class="test">']);
		}
	]
]);