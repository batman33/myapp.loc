<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Page extends Controller_Template {

    public $template = 'default';
    public $main_config;
	public $title;
	public $keywords;
	public $description;
	
	protected $auth,$user;
 
    public function before()
    {
		$this->auth = Auth::instance();
		$this->user = $this->auth->get_user();
		
		$this->main_config = Kohana::$config->load('main');
		
	    Kohana::add_path('themes/'.$this->main_config->get('web_theme').'/');
	    parent::before();
		
		$this->template->styles = array('main');
		$this->template->scripts = array();
		
    }
	
	public function error($error)
	{
	
	
	}
    
	public function after()
	{
		View::set_global(array(
		    'title' => !isset($this->title)?$this->main_config->get('title'):$this->title,
			'keywords' => !isset($this->keywords)?$this->main_config->get('keywords'):$this->keywords,
		    'description' => !isset($this->description)?$this->main_config->get('description'):$this->description,
			'user' => $this->user
	    ));
		
		parent::after();
	}
	
}
