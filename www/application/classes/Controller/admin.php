<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Page {

	// public function action_index()
	// {
	// $this->template->content = View::factory('/pages/main');
	// }


	public function action_type()
	{
		$this->template->content = view::factory('/admin/type');
	}

	public function action_type_cloth()
	{
		$this->template->content = view::factory('/admin/type_cloth');
	}

	public function action_manufacturer()
	{
		$this->template->content = view::factory('/admin/manufacturer');
	}

	public function action_cloth()
	{
		$this->template->content = view::factory('/admin/cloth');
	}




} // End Main
