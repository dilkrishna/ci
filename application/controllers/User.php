<?php


class User extends MY_Controller{
    
    public function index()
    {    
        $this->load->model('user_model');
        $data['username'] = $this->user_model->getuser();
        $this->load->view('public/user_list',$data);
    }
}