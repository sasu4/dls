<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectorate extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    function index() {
        $this->load->model('Model_lectorate','lectorate');
    
        $data['list'] = $this->lectorate->get_lectorates();
        $this->load->view('header');
        $this->load->view('lectorates',$data);
        $this->load->view('footer');
    }
    
    function lect() {
        $this->load->model('Model_lectorate','lectorate');
        $id = $this->uri->segment(3);
        $data['list'] = $this->lectorate->get_lectorate($id);
        $data['id'] = $id;
        
        $this->load->view('header');
        $this->load->view('lectorate',$data);
        $this->load->view('footer');
    }
}