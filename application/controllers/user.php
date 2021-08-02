<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $all_users = $this->UserModel->get_all_entries();

        $data = array();
        $data['users'] = $all_users;

        $this->load->view('welcome_message', $data);
    }

    public function addUser()
    {
        $data = array(
            "username" => $this->input->post("username"),
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email_address" => $this->input->post("email_address")
        );

        $this->UserModel->addUser($data);

        redirect(base_url());
    }

    public function editUser($id)
    {

        $user = $this->UserModel->findUser($id);

        $data = array();
        $data['user'] = $user;

        $this->load->view('editUser', $data);
    }

    public function updateUser($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),
        );

        $this->UserModel->updateUser($id, $data);

        redirect(base_url());
    }

    public function deleteUser($id)
    {

        $this->UserModel->deleteUser($id);

        redirect(base_url());
    }
}
