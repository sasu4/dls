<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_lectorate','lectorate');
        $this->load->model('Model_profile','profile');
        $this->load->model('Model_user','user');
        if(!$this->user->is_admin()) {
            ciredirect('home');
        }
    }

    public function index() {
        $data['query']=$this->lectorate->get_lectorates();
        $data['typ'] = 'Lektorát';
        $this->load->view('header');
        $this->load->view('admin/home',$data);
        $this->load->view('footer');
    }
    
    public function other() {
        $data['query']=$this->lectorate->get_lectorates_other();
        $data['typ'] = 'Ostatné organizácie';
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
    
    public function profile($id) {
        $data['idl'] = $id;
        $data['query'] = $this->profile->get_lectorate('lectorate',$id);
        $this->load->view('header');
        $this->load->view('admin/profile',$data);
        $this->load->view('admin/workplace',$data);
        $this->load->view('footer');
    }
    
    public function page($title,$id) {
        if($title=='activity') {
            $data['query'] = $this->profile->get_profile_table(DB_ACTIV,$id);
        } elseif($title=='additional') {
            $data['query'] = $this->profile->get_profile_table(DB_ADDIT,$id);
        } elseif($title=='head') {
            $data['query'] = $this->profile->get_profile_table(DB_HEAD,$id);
        } elseif($title=='publication') {
            $data['query'] = $this->profile->get_profile_table(DB_PUBL,$id);
        } elseif($title=='students') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDENT,$id);
        } elseif($title=='types_study') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDY,$id);
        } else {
            ciredirect('show_404');
        }
        $data['idl'] = $id;
        $this->load->view('header');
        $this->load->view('admin/profile',$data);
        $this->load->view('admin/'.$title,$data);
        $this->load->view('footer');
    }
}