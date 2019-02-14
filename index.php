<?php

Kirby::plugin('medienbaecker/shy', [
	'hooks' => [
		'kirbytags:before' => function ($text, $data, $options) {
			return Str::replace($text, "(-)", "&shy;");
		}
	]
]);