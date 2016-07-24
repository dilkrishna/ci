<?php 

class login_model extends CI_Model{
    public function login_valid($username,$password)
    {
        $q = $this->db->where(['username'=>$username , 'password'=> $password])
                ->get('user_table');

        if($q->num_rows()){
            return $q->row();
        }
        else
        {
            return FALSE;
        }
    }
//    public function getuser($username)
//    {
//    $q = $this->db->select('username')
//            ->where(['username'=>$username])
//                ->get('user_table');
//        return $q->result();
// 
//    }
}
