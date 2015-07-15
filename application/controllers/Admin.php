<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_lectorate');
        $this->load->model('Model_lectorate','lectorate');
        $this->load->model('Model_profile','profile');
        $this->load->model('Model_user','user');
        $this->load->library('profil');
        if(!$this->user->is_admin()) {
            ciredirect('home');
        }
    }

    public function index() {
        $data['query']=$this->lectorate->get_lectorates();
        $data['typ'] = 'Lektorát';
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('admin/home',$data);
        $this->load->view('footer');
    }
    
    public function other() {
        $data['query']=$this->lectorate->get_lectorates_other();
        $data['typ'] = 'Ostatné organizácie';
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('admin/home',$data);
        $this->load->view('footer');
    }
    
    public function lec_publicize() {
        $id = $this->input->post('id');
        $data['public'] = $this->input->post('publ');
        $this->lectorate->update_lectorate($id,$data);
        ciredirect('admin');
    }
    
    public function lector() {
        $id = $this->input->post('id');
        $data['query'] = $this->user->get_user_profile($id);
        $data['countries'] = $this->lectorate->get_country_drop();
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/lector', $data);
        $this->load->view('footer');
    }
    
    public function profile($id) {
        $data['idl'] = $id;
        $data['query'] = $this->profile->get_lectorate('lectorate',$id);
        $data['countries'] = $this->lectorate->get_country_drop();
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('admin/profile',$data);
        $this->load->view('admin/workplace',$data);
        $this->load->view('footer');
    }
    
    public function activity_more() {
        $id = $this->uri->segment(3);
        $data = $this->profil->activ($id);
        $type = $this->profile->get_category($data['category_id']);
        if($type=='Vzdelávanie')  {
            $data['categ'] = $this->profile->get_categories_drop('Vzdelávanie');
        } elseif($type=='Veda') {
            $data['categ'] = $this->profile->get_categories_drop('Veda');
        } elseif($type=='Kultúrne') {
            $data['categ'] = $this->profile->get_categories_drop('Kultúrne');
        } else {
            ciredirect('error_404');
        }
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/activity_add',$data);
        $this->load->view('footer');
    }
    
    public function page($title,$id) {
        if($title=='activity') {
            $data['query'] = $this->profile->get_profile_table(DB_ACTIV,$id);
        } elseif($title=='additional') {
            $data['query'] = $this->profile->get_profile_table(DB_ADDIT,$id);
        } elseif($title=='head') {
            if($this->profil->is_head($id)) {
                $data = $this->profil->get_head($id,1);
                $data['idl'] = $id;
                $data['name'] = $this->lectorate->get_name($id);
                $this->load->view('header');
                $this->load->view('navigation');
                $this->load->view('admin/profile',$data);
                $this->load->view('Auth/profile/head',$data);
                $this->load->view('footer');
            } else {
                $data['users'] = $this->user->get_user_drop();
                $data['idl'] = $id;
                $data['name'] = $this->lectorate->get_name($id);
                $this->load->view('header');
                $this->load->view('navigation');
                $this->load->view('admin/profile',$data);
                $this->load->view('Auth/profile/head_choose',$data);
                $this->load->view('footer');
            }
        } elseif($title=='publications') {
            $data['query'] = $this->profile->get_profile_table(DB_PUBL,$id);
        } elseif($title=='students') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDENT,$id);
        } elseif($title=='types_study') {
            $data['query'] = $this->profile->get_profile_table(DB_STUDY,$id);
        } else {
            ciredirect('show_404');
        }
        if($title!='head') {
            $data['idl'] = $id;
            $data['name'] = $this->lectorate->get_name($id);
            $this->load->view('header');
            $this->load->view('navigation');
            $this->load->view('admin/profile',$data);
            $this->load->view('admin/'.$title,$data);
            $this->load->view('footer');
        }
    }
}