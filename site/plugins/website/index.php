<?php

Kirby::plugin('schnti/website', [
	'hooks'        => [
		'kirbytags:before' => function ($text, $data, $options) {
			//			return str::replace($text, "", "");
			return Str::replace($text, ['(-)', '(br)'], ['&shy;', '<br class="test">']);
		}
	]
]);