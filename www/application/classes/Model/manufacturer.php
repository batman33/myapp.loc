<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Manufacturer extends ORM {

    protected $_table_name = 'manufacturer';
    protected $_primary_key = 'id';

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 126)),
            ),
            'description' => array(
                array('max_length', array(':value', 255)),
            ),
        );
    }

    public function filters()
    {
        return array(
            'name' => array(
                array('trim'),
            ),
            'description' => array(
                array('trim'),
            )
        );
    }

}