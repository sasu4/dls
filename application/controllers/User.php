<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        if (!$this->dx_auth->is_logged_in()) {
            ciredirect('title');
        } 
    }

  public function index()
  {
      //zoznam lectorov
      //info o lektoroch
    $this->load->view('header');
    $this->load->view('list_users');
    $this->load->view('footer');
  }
  
  public function profile() {
      //nacitanie udajov
      $data['query'] = $this->model_user->get_profile();
      $this->load->view('header');
      $this->load->view('profile',$data);
      $this->load->view('footer');
  }
}