<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Bundles {

	/**
	 * @param array $bundles
	 * @return void
	 */
	public static function init(array $bundles = NULL)
	{
		if ( ! empty($bundles) AND count($bundles) > 0)
		{
			Kohana::modules(Arr::merge($bundles, Kohana::modules()));
		}
	}
}
