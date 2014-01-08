<?php defined('SYSPATH') OR die('No direct script access.');

if ( ! defined('BUNDPATH'))
{
	$bundles = '../bundles';

	if ( ! is_dir($bundles) AND is_dir(DOCROOT.$bundles))
		$bundles = DOCROOT.$bundles;

	define('BUNDPATH', realpath($bundles).DIRECTORY_SEPARATOR);

	unset($bundles);
}

Bundles::init(Kohana::$config->load('bundles')->as_array());
