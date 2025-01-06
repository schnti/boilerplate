<?php

Kirby::plugin('schnti/website', [
	'hooks'        => [
		'kirbytags:before' => function ($text, array $data = []) {
			if (!is_string($text)) {
				return $text;
			}
			return str_replace(['(-)', '(br)'], ['&shy;', '<br class="test">'], $text);
		}
	]
]);
