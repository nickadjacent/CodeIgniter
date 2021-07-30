<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class UserModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_all_entries()
    {
        $query = $this->db->get('users');
        $results = array();
        foreach ($query->result() as $result) {
            $results[] = $result;
        }
        return $results;
    }

    function addUser($data)
    {
        $this->db->insert("users", $data);
    }

    function findUser($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function deleteUser($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}
