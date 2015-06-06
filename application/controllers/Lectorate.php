<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectorate extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    function index() {
        $id = $this->uri->segment(3);
        print_r($id);
        $this->lect($id);
    }
    
    function lect($id) {
        $this->load->model('Model_lectorate','lectorate');
        
        $data['list'] = $this->lectorate->get_lectorate($id);
        
        $this->load->view('header');
        $this->load->view('lectora',$data);
        $this->load->view('footer');
    }
}