<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Page {

	public function action_clothing()
	{
        $this->template->content = View::factory('/user/clothing');
	}

	public function action_clothing_add()
	{
        $this->template->content = View::factory('/user/clothing_add');
	}

} // End Main
