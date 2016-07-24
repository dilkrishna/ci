<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $user_data = $this->session->userdata('user');
        
        if (!isset($user_data['user_id']) 
                and !( $user_data['user_id'] == $_SERVER['HTTP_USER_AGENT'])) {
            redirect('login','refresh');
        }
    }

}
