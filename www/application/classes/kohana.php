<?php defined('SYSPATH') or die('No direct script access.'); 

class Kohana extends Kohana_Core {

	public static function add_path($path) 
	{
		if (!empty($path) && file_exists($path) && is_dir($path))
		{
			Kohana::$_paths[] = $path;
		}

	}

}