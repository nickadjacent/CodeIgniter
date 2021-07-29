<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $all_users = $this->User_model->get_all_entries();

        $data = array();
        $data['users'] = $all_users;

        $this->load->view('welcome_message', $data);
    }

    public function new_user()
    {
        echo 'ok';
    }
}
