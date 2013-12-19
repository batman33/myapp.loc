<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Page {


	public function action_index()
	{
		$this->title = 'Авторизация';
	
		if($this->auth->logged_in()) 
		{
			HTTP::redirect('/');
		}
		else
		{
			if ($_REQUEST) 
			{
			$data = Arr::extract($_REQUEST, array('username', 'password', 'save'));
				
				if($this->auth->login($data['username'], $data['password'], $data['save'])) 
				{
					HTTP::redirect('/');
				}
				else
				{
					page::error('Ошибка авторизации');
				}
		
			}
		
		}
		
		$this->template->content =  View::factory('auth/main');
	}
	
	public function action_logout()
	{   
		$this->auth->logout();
		
		HTTP::redirect('/');
	}

 

} // End Auth