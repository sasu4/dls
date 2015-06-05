<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectors extends CI_Controller {

  public function index()
  {
      //zoznam lectorov
      //info o lektoroch
    $this->load->view('header');
    $this->load->view('list_lectors');
    $this->load->view('footer');
  }
  
  public function pages($title) {
      $this->load->view('header');
      $this->load->view($title);
      $this->load->view('footer');
  }
}