<?php

class Login extends CI_Controller {

    public function index() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required|alpha|trim');
            $this->form_validation->set_rules('password', 'password', 'required|');

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                $password = hash('sha512', $this->input->post('password'));

                $this->load->model('login_model');
                $user = $this->login_model->login_valid($username, $password);

                if ($user) {
                    $this->load->library('session');
                    $this->session->set_userdata('user', [
                        'userAgent' => $_SERVER['HTTP_USER_AGENT'],
                        'user_id' => $user->id,
                        'username' => $user->username
                    ]);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('login_failed', 'invalid username or password');
                    redirect('login');
                }
            }
        }
        
        $this->load->view('public/admin_login');
    }

    public function admin_login() {
        
    }

    public function logout() {
        $this->session->unset_userdata('user');
        session_destroy();
        return redirect('login');
    }

}
