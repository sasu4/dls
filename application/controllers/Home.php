<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

  public function index() {
    $this->load->model('Model_lectorate','lectorate');
    
    $data['coun'] = $this->lectorate->get_countries();
    $data['typ'] = 'Lektorát';
    $this->load->view('header');
    $this->load->view('home',$data);
    $this->load->view('footer');
  }
  
  public function other() {
    $this->load->model('Model_lectorate','lectorate');
    
    $data['coun'] = $this->lectorate->get_countries_other();
    $data['typ'] = 'Ostatné organizácie';
    $this->load->view('header');
    $this->load->view('home',$data);
    $this->load->view('footer');
  }
  
  public function pages($title) {
      $this->load->view('header');
      $this->load->view($title);
      $this->load->view('footer');
  }
}