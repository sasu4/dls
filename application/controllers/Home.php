<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('Model_lectorate', 'lectorate');
        $this->load->model('model_profile');
        $this->load->helper('text');

        $data['coun'] = $this->lectorate->get_countries();
        $data['typ'] = 'Lektorát';
        $data['qnews'] = $this->model_profile->get_news_home();
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('home2', $data);
        $this->load->view('footer2');
    }

    public function pages($title) {
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view($title);
        $this->load->view('footer');
    }

}

