<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Images extends ORM {

    protected $_table_name = 'images';
    protected $_primary_key = 'id';

    public function rules()
    {
        return array(
        	'title' => array(
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 126)),
        	),
        	'path' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 126)),
        	),
        	'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 126)),
        	),
        );
    }

    public function filters()
    {
        return array(
            'title' => array(
                array('trim'),
            ),
            'path' => array(
                array('trim'),
            ),
            'name' => array(
                array('trim'),
            )
        );
    }

}



