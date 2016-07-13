<?php

class signup_model extends CI_Model{
    
    public function index()
        {

        }

    public function addItem($data)
        {
            $this->db->set($data);
            $this->db->insert('user_table');

        }
    
}
