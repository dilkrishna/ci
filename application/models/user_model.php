<?php

class user_model extends CI_Model{
    
    public function getuser()
    {
        $q = $this->db->get('user_table');
        return $q->result();

                
    }
}