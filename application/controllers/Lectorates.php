<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectorates extends CI_Controller {

  public function index()
  {
      //zoznam lectoratov
      //zoznam krajin a lektoraty v danej krajine
      //info o lektoratoch - lektori, vseobecne info, studium, predmety, aktivity, publikacie
    $this->load->view('header');
    $this->load->view('list_lectorates');
    $this->load->view('footer');
  }
  
  public function pages($title) {
      $this->load->view('header');
      $this->load->view($title);
      $this->load->view('footer');
  }
}