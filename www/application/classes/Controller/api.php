<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

	// public function action_index()
	// {
	// $this->template->content = View::factory('/pages/main');
	// }

	public function action_type_get()
	{
		$type = ORM::factory('type')->find_all();

		$types = array();

		foreach($type as $key)
		{
		    $types[] = array(
		    	'id' => $key->id,
		    	'name' => $key->name,
		    	'description' => $key->description,
			);
		}

		echo json_encode($types);
	}

	public function action_type_create()
	{
		print_r($_GET);
	}

} // End Main
