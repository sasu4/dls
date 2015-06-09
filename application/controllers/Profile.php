<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if(!$this->dx_auth->is_logged_in()) {
            ciredirect('home');
        }
    }

  public function index() {    
    $this->load->view('header');
    $this->load->view('profile');
    $this->load->view('footer');
  }
  
  public function activities() {
      $this->load->view('header');
      $this->load->view('Auth/profile/activity');
      $this->load->view('footer');
  }
  
  public function workplace() {
      $this->load->view('header');
      $this->load->view('Auth/profile/workplace');
      $this->load->view('footer');
  }
  
  public function head() {
      $this->load->view('header');
      $this->load->view('Auth/profile/head');
      $this->load->view('footer');
  }
  
  public function types_of_study() {
      $this->load->view('header');
      $this->load->view('Auth/profile/types_study');
      $this->load->view('footer');
  }
  
  public function publication() {
      $this->load->view('header');
      $this->load->view('Auth/profile/publication');
      $this->load->view('footer');
  }
  
  public function students() {
      $this->load->view('header');
      $this->load->view('Auth/profile/students');
      $this->load->view('footer');
  }
  
  public function additional() {
      $this->load->view('header');
      $this->load->view('Auth/profile/additional');
      $this->load->view('footer');
  }
}