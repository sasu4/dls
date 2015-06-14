<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_lectorate','lectorate');
    }

    public function index() {
        $data['query']=$this->lectorate->get_lectorates();
        $this->load->view('header');
        $this->load->view('admin/home',$data);
        $this->load->view('footer');
    }
}