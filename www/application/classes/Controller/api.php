<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

    /**
     * @var Kohana_Auth_ORM
     */
    public $auth = NULL;
 
    /**
     * @var Model_User
     */
    public $user = NULL;
 
    /**
     * Login page URL
     *
     * @var string
     */
    public $login_url = 'auth';
 
    /**
     * Roles
     *
     * @var array
     */
    public $roles = array('login', 'admin');
 
    /**
     * Before execute action
     */
    public function before()
    {
        parent::before();
 
        // auth
        $this->auth = Auth::instance();
 
        // user
        $this->user = $this->auth->get_user();
 
        // check access
        if (is_array($this->roles) AND !(empty($this->roles)) AND !$this->auth->logged_in($this->roles))
        {
            $this->request->redirect($this->login_url);
        }

 		if (!$this->request->is_ajax())
		{
			$this->request->redirect();
		}
		
		$this->response->headers('Content-Type', 'application/json; charset=utf-8');
    }

	/********************************************************/
	/*		                  Types 						*/
	/********************************************************/
    /**
     * Get All Type By AJAX
     */
	public function action_type_get()
	{
		$type = ORM::factory('type')->find_all();

		$types = array();

		foreach($type as $key)
		    $types[] = array(
		    	'id' => $key->id,
		    	'name' => $key->name,
		    	'description' => $key->description,
			);

		print json_encode($types);
	}
    /**
     * Action New Type By AJAX
     */
	public function action_type_create()
	{
		$models = $this->request->query('models'); 
		
		foreach ($models as $key => $value){
			$type = ORM::factory('type')->values(
				array(
					'name' => $value['name'],
					'description' => $value['description'],
				)
			)->save();

			$models[$key]['id'] = $type->id;
		}

		print json_encode($models);
	}
    /**
     * Action Update Type By AJAX
     */
	public function action_type_update()
	{
		$models = $this->request->query('models'); 
		
		foreach ($models as $key)
			ORM::factory('type', $key['id'])->values(
				array(
					'name' => $key['name'],
					'description' => $key['description'],
				)
			)->save();

		print json_encode($models);
	}
    /**
     * Action Delete Type By AJAX
     */
	public function action_type_destroy()
	{
		$models = $this->request->query('models'); 
		
		foreach ($models as $key)
			ORM::factory('type', $key['id'])->delete();

		print json_encode(array('status' => 'success'));
	}

} // End Main