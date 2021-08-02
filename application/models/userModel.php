<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_entries()
    {
        $query = $this->db->get('users');
        $results = array();
        foreach ($query->result() as $result) {
            $results[] = $result;
        }
        return $results;
    }

    public function addUser($data)
    {
        $this->db->insert("users", $data);
    }

    public function findUser($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function deleteUser($userID)
    {
        return $this->db->delete('users', array('id' => $userID));
    }
}
