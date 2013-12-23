<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Clothing extends ORM {

    protected $_table_name = 'clothing';
    protected $_primary_key = 'id';

    public function rules()
    {
        return array(
			'name' => array(
				array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 126)),
			),
			'type_cloth_id' => array(
				array('not_empty'),
			),
			'user_id' => array(
				array('not_empty'),
			),
        );
    }

    public function filters()
    {
        return array(
            'name' => array(
                array('trim'),
            ),
        );
    }

}