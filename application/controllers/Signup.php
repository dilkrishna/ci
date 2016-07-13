<?php

class Signup extends MY_Controller{
    
    public function index()
    {
        $this->load->view('public/view_signup');
    }
    
    public function create()
    {
        $this->form_validation->set_rules('username','username','required|alpha|trim');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('fname','firstname','required|alpha|trim');
        $this->form_validation->set_rules('lname','lastname','required|alpha|trim');
        $this->form_validation->set_error_delimiters('<P class= "text-danger">','</p>');
        
        if($this->form_validation->run()){
            
        $data = array(
            'username' => $this->input->post('username'),
            'password' => hash('sha512',$this->input->post('password')),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname')
        );
        $this->load->model('signup_model');
        $this->signup_model->addItem($data);
        redirect('admin');
        }
        else{

            $this->load->view('public/view_signup');
        }
        
    }
}

