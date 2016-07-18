<?php


class Login extends MY_Controller{
    
    public function index()
    {      
        $this->load->view('public/admin_login');
    }
    
    public function admin_login()
    {
        $this->form_validation->set_rules('username','Username','required|alpha|trim');
        $this->form_validation->set_rules('password','password','required|');
        
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = hash('sha512',$this->input->post('password'));
//            echo "username: $username and Password: $password";
//            echo "form validation successful";
            $this->load->model('login_model');
            $login_id=$this->login_model->login_valid($username,$password);
            if($login_id){
                $this->load->library('session');
                $this->session->set_userdata('user_id',$login_id);
                redirect('admin');
            }
            else{
                $this->session->set_flashdata('login_failed','invalid username or password');
                redirect('login');
            }
        }
        else{
            redirect('login');
//        $this->load->view('public/admin_login');
        }

    }
    public function logout()
    {
        $this->session->unset_userdata('login');
        session_destroy();
        return redirect('login');
    }
}