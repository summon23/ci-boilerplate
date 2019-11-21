<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // public $dashboardController = '/home';

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $dashboardController = '/home';
        if ($this->session->userdata('authLogin')) {
            redirect($dashboardController, 'refresh');
        } else {
            return $this->view->genView('default/login', array(), true);
        }
    }
    
    public function doAuth()
    {
        $userdata = $this->input->post(NULL);
        $dashboardController = '/home';
        
        // form validation
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]');
        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('warning', 'Username not Valid');
            redirect('/auth', 'refresh');
        }
        
        // get data
        $getUserData = $this->db->where('name', $userdata['username'])
                                ->where('password', md5($userdata['password']))
                                ->get('sys_user')
                                ->result();  

        // debug($getUserData);
             
        if (empty($getUserData)) {
            $this->session->set_flashdata('warning', 'Username or Password Wrong');
            return redirect('/auth', 'refresh');
        }

        if ($getUserData[0]->status === 0) {
            $this->session->set_flashdata('warning', 'User not Active');
            return redirect('/auth', 'refresh');
        }

        $userId = $getUserData[0]->id;

        $u = $this->db->query('SELECT u.*,
        g.id as group_store_id,
        g.type as group_store_type_id
        FROM sys_user u
        LEFT JOIN app_store s
        ON s.id = u.store_id
        LEFT JOIN app_group_store g
        ON s.id_group_store = g.id
        WHERE u.id='.$userId)->row();

        if (count($getUserData)) {
            $groupId = $getUserData[0]->user_group_id;
            $group = $this->db->query('SELECT u.*
            from sys_user_group u            
            where u.id='.$groupId)->result_array();
            $group = array_shift($group);
            $group_name = strtolower($group['group_name']);
            $userSession = array(
                'id' => $getUserData[0]->id,
                'username' => $getUserData[0]->name,
                'group' => $groupId,
                'store' => $getUserData[0]->store_id, 
                'groupstore' => $u->group_store_id,
                'groupstoretype' => $u->group_store_type_id,
                'warehouse' => $u->warehouse_id,
                'supplier' => $getUserData[0]->supplier_id,
                'groupname' => $group_name,
                'authLogin' => true                
            );
            $this->session->set_userdata($userSession);
            return redirect($dashboardController);
        }
    }

    public function doLogout()
    {
        $this->session->sess_destroy();
        return redirect('/auth');
    }
    
}
