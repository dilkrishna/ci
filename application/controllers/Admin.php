<?php 

class Admin extends MY_Controller{
    
    public function index()
    {
        $this->load->model('articles_model');
       $articles = $this->articles_model->articles_list();
        
        
        $this->load->view('admin/dashboard',['articles', $articles]);
    }
}