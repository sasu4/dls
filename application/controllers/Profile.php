<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_profile', 'profile');
        $this->load->model('model_lectorate');
        $this->load->library('profil');
    }

    public function index() {
        ciredirect('home');
    }

    public function lectorate($id) {
        $data['query'] = $this->profile->get_lectorate('lectorate', $id);
        $data['idl'] = $id;
        $data['name'] = $this->model_lectorate->get_name($id);
        $this->load->view('header');
        $this->load->view('navigation');  
     //   $this->load->view('profile/navigation', $data);
        $this->load->view('profile/sidebar', $data);
        $this->load->view('profile/workplace', $data);
        $this->load->view('footer');
    }

    public function pages($title, $id) {
        if ($title == 'activity') {
            $data['query'] = $this->profile->get_profile_table(DB_ACTIV, $id);
        } elseif ($title == 'additional') {
            $data['query'] = $this->profile->get_profile_table(DB_ADDIT, $id);
        } elseif ($title == 'head') {
            if ($this->profil->is_head($id)) {
                $data = $this->profil->get_head($id,1);
            }
            $data['query'] = $this->profile->get_profile_table(DB_HEAD,$id);
            //zistit kde je head
        } elseif ($title == 'publication') {
            $data['query'] = $this->profile->get_profile_table(DB_PUBL, $id);
        } elseif ($title == 'students') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDENT, $id);
        } elseif ($title == 'types_study') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDY, $id);
        } else {
            ciredirect('show_404');
        }
        $data['idl'] = $id;
        $data['name'] = $this->model_lectorate->get_name($id);
        $this->load->view('header');
        $this->load->view('navigation');
        //$this->load->view('profile/navigation', $data);
        $this->load->view('profile/sidebar', $data);
        $this->load->view('profile/' . $title, $data);
        $this->load->view('footer');
    }

}

