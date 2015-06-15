<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_lectorate','lectorate');
        $this->load->model('Model_profile','profil');
    }

    public function index() {
        $data['query']=$this->lectorate->get_lectorates();
        $this->load->view('header');
        $this->load->view('admin/home',$data);
        $this->load->view('footer');
    }
    
    public function lec_publicize() {
        $id = $this->input->post('id');
        $data['public'] = $this->input->post('publ');
        $this->lectorate->update_lectorate($id,$data);
        ciredirect('admin');
    }
    
    public function profile() {
        $data['id'] = $this->input->post('id');
        $this->load->view('header');
        $this->load->view('admin/profile',$data);
        $this->load->view('footer');
    }
    
    public function page($title,$id) {
        if($title=='activity') {
          $data['query'] = $this->profile->get_profile_table(DB_ACTIV,$id);
      } elseif($title=='additional') {
          $data['query'] = $this->profile->get_profile_table(DB_ADDIT,$id);
      } elseif($title=='head') {
          $data['query'] = $this->profile->get_profile_table(DB_HEAD,$id);
          //zistit kde je head
      } elseif($title=='publication') {
          $data['query'] = $this->profile->get_profile_table(DB_PUBL,$id);
      } elseif($title=='students') {
          $data['query'] = $this->profile->get_profile_table(DB_STUDENT,$id);
      } elseif($title=='types_study') {
          $data['query'] = $this->profile->get_profile_table(DB_STUDY,$id);
      } else {
          ciredirect('show_404');
      }
        $this->load->view('header');
        $this->load->view('admin/'.$title,$data);
        $this->load->view('footer');
    }
}