<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Load External Function on Core Directory
 */
require_once(APPPATH.'core/autoload.php');

class User extends ModelController {

    protected $options = array(
        'modulename' => 'User',
        'route' => 'user',
        'tablename' => 'sys_user',
        'modelfield' => array(
            'id' => array(
                'type' => 'hidden',
                'fieldname' => 'ID'
            ),
            'name' => array(
                'type' => 'text',
                'fieldname' => 'User',
                'columnview' => 'true'
            ),
            'email' => array(
                'type' => 'email',
                'fieldname' => 'Email Address',
                'columnview' => 'true'
            ),
            'password' => array(
                'type' => 'password',
                'fieldname' => 'Password'
            ),
            'picture' => array(
                'type' => 'file',
                'fieldname' => 'Picture',
                'optional' => true
            ),
            'user_group_id' => array(
                'type' => 'dropdown',
                'fieldname' => 'User Group',
                'reference' => array(
                    'table_name' => 'sys_user_group',
                    'foreign_key' => 'user_group_id',
                    'source_key' => 'group_name',
                    'alias' => 'user_group_name'
                ),
                'columnview' => true
            ),
        ),
        'view' => array(
            'create' => 'user/create'
        )
    );

    public function __construct() 
    {        
        parent::__construct($this->options);
    }

    /**
     * Redirect to Create Page
     * @param params Array
     */
    public function create($params = array())
    {
        $params = $this->_getParamsCreate();
        $page = 'model/create';
        if (array_key_exists('view', $this->modelOptions)) {
            $v = $this->modelOptions['view'];
            if (array_key_exists('create', $v)) {
                $page = $v['create'];
            }
        }
        $params['store'] = $this->db->query('SELECT * from app_store where is_delete=0 order by name ASC')->result();
        $params['supplier'] = $this->db->query('SELECT * from app_supplier where is_delete=0 order by name ASC')->result();
        $params['warehouse'] = $this->db->query('SELECT * from app_warehouse where is_delete=0 order by name ASC')->result();

        $this->view->genView($page, $params);
    }

    public function beforeSave($payload, $model)
    {
        $payload['password'] = md5($payload['password']);
        return $payload;
    }

    public function beforeUpdate($payload, $model)
    {
        if ($payload['password'] == '') {
            unset($payload['password']);
        } else {        
            $payload['password'] = md5($payload['password']);
        }
        return $payload;
    }
}