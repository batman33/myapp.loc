<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_TypeCloth extends ORM {

    protected $_table_name = 'type_cloth';
    protected $_primary_key = 'id';

    // protected $_has_one = array(
    //     'type' => array(
    //         'model' => 'type',
    //         'foreign_key' => 'id',
    //         ),
    //     );
    protected $_belongs_to = array(
          'type'  => array(
                   'model'       => 'type',
                   'foreign_key' => 'type_id',
              )
        );


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
            'type_id' => array(
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
            'description' => array(
                array('trim'),
            )
        );
    }

}