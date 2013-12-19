<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registration extends Page {


	public function action_index()
	{ 
		$this->title = 'Регистрация';
		$data = array();

		if ($_POST) {

			$user = ORM::factory('user');

			$data = Arr::extract($_POST, array('username', 'email', 'password', 'confirm_password'));

			$user->values($data,  array('username', 'email', 'password'));

			$extra_validation = Validation::factory(
				array(
					'password' => $data['password'],
					'password_confirm' => $data['confirm_password']
				)
			);

			$extra_validation->rule('password' , 'not_empty')
							 ->rule('password' , 'min_length', array(':value', 4))
							 ->rule('password' , 'max_length', array(':value', 32))
							 ->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'));
			try {

				$user->save($extra_validation);

				$user->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());

				$this->auth->login($data['username'], $data['password'], 1);

				$this->template->content =  View::factory('registration/ok',$data);

				return TRUE;

			} catch (ORM_Validation_Exception $e) {

				//page::error($e->errors('validation'));
				print_r($e->errors('validation'));

			}
		}

		$this->template->content =  View::factory('registration/main');
	}


} // End Registration