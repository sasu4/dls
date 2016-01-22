<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->model('Model_lectorate', 'lectorate');
        $this->load->model('Model_user','user');
    }
    
    function index() {
        $data['coun'] = $this->lectorate->get_countries();
        $data['typ'] = 'Lektorát';
        $data['list'] = $this->lectorate->get_lectorates();
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('countries', $data);
        $this->load->view('footer2');
    }
    
    function profile() {
        $id = $this->uri->segment(3);
        $data['query'] = $this->lectorate->get_lectorate($id);
        $data['id'] = $id;
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('lectorate_profil', $data);
        $this->load->view('footer');
    }
    
    function test() {
        $data['coun'] = $this->lectorate->get_countries();
        $data['typ'] = 'Lektorát';
        $data['list'] = $this->lectorate->get_lectorates();
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('countries2', $data);
        $this->load->view('footer2');
    }

}