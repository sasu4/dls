<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectorate extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->model('Model_lectorate','lectorate');
        $this->load->model('Model_user','user');
    }
    
    function index() {
        $data['list'] = $this->lectorate->get_lectorates();
        $this->load->view('header');
        $this->load->view('lectorates',$data);
        $this->load->view('footer');
    }
    
    function lect() {
        $id = $this->uri->segment(3);
        $data['list'] = $this->lectorate->get_lectorate($id);
        $data['id'] = $id;
        
        $this->load->view('header');
        $this->load->view('lectorate',$data);
        $this->load->view('footer');
    }
    
    function new_lectorate() {
        //osetrit ak uz ma pouzivatel lektorat
        if(!$this->dx_auth->is_logged_in()) {
            ciredirect('home');
        }
        $this->load->view('header');
        $this->load->view('new_lectorate');
        $this->load->view('footer');
    }
    
    function add_lect() {
        if(!$this->dx_auth->is_logged_in()) {
            ciredirect('home');
        }
        $id = $this->dx_auth->get_user_id();
        $data = array(
            'name_orig' => $this->input->post('lect_name_o'),
            'name_sk' => $this->input->post('lect_name_s'),
            'public' => 1,
            'created' => $id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->lectorate->add_lectorate($data);
        $data2['lectorate_id'] = $this->lectorate->get_lectorate_id($id);
        $this->user->update_user($id,$data2);
        ciredirect('profile');
    }
}