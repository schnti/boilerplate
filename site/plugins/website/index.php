<?php

Kirby::plugin('schnti/website', [
	'hooks'        => [
		'kirbytags:before' => function ($text, array $data = []) {

			$text = Str::replace($text, ['(-)', '(br)'], ['&shy;', '<br class="test">']);

			// optional
			// $text = preg_replace_callback('!\(center(…|\.{3})\)(.*?)\((…|\.{3})center\)!is', function ($matches) use ($text) {
			// 	$html = kirbytext($matches[2]);
			// 	return '<div class="' . kirby()->option('center.class', 'text-center') . '">' . $html . '</div>';
			// }, $text);

			return $text;
		}
	]
]);
