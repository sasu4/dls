<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectors extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user','user');
    }
    
  public function index()
  {
    $data['query'] = $this->user->get_users();  
    $this->load->view('header');
    $this->load->view('list_lectors',$data);
    $this->load->view('footer');
  }
  
  public function profile($id) {
      $this->load->model('model_lectorate');
      $data['query']=$this->user->get_user_profile($id);
      $this->load->view('header');
      $this->load->view('user_profile',$data);
      $this->load->view('footer');
  }
}