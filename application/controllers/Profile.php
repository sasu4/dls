<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    var $lectorate; //id of lectorate coresponding to user
    var $user_id;
    
    function __construct() {
        parent::__construct();
        if(!$this->dx_auth->is_logged_in()) {
            ciredirect('home');
        }
        $this->load->model('model_profile','profile');
        $this->load->model('model_user','user');
        $this->load->model('model_lectorate');
        $this->load->library('profil');
        $this->user_id = $this->dx_auth->get_user_id();
        $this->lectorate = $this->user->get_lectorate($this->user_id);
        if($this->lectorate==NULL) {
            ciredirect('lectorate/new_lectorate');
        }
    }

  public function index() {    
    $this->load->view('header');
    $this->load->view('Auth/profile/profile');
    $this->load->view('footer');
  }
  
  public function activities() {
      $data['query'] = $this->profile->get_activities($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/activity',$data);
      $this->load->view('footer');
  }
  
  public function workplace() {
      $data = $this->profil->work($this->lectorate);
      $data['countries'] = $this->model_lectorate->get_country_drop();
      $this->load->view('header');
      $this->load->view('Auth/profile/workplace',$data);
      $this->load->view('footer');
  }
  
  public function edit_workplace() {
      $id = $this->input->post('id');
      $country = $this->model_lectorate->get_country_id($this->input->post('country'));
      $data = array(
        'name_orig' => $this->input->post('lect_name_o'),
        'name_sk' => $this->input->post('lect_name_s'),
        'univ_orig' => $this->input->post('uni_name_o'),
        'univ_sk' => $this->input->post('uni_name_s'),
        'street' => $this->input->post('street'),
        'number' => $this->input->post('numb'),
        'city' => $this->input->post('city'),
        'country_id' => $country,
        'zip' => $this->input->post('psc'),
        'telephone' => $this->input->post('tel'),
        'website' => $this->input->post('web'),
        'focus' => $this->input->post('focus'),
        'last_edited' => $this->user_id
    );
    $this->profile->update_profile_table('lectorate',$id,$data);
    ciredirect('profile');
  }
  
  public function head() {
      $data = $this->profil->head($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/head',$data);
      $this->load->view('footer');
  }
  
  public function edit_head() {
      $id = $this->input->post('id');
  }
  
  public function types_of_study() {
      $data = $this->profil->study($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/types_study',$data);
      $this->load->view('footer');
  }
  
  public function edit_types() {
    $id = $this->input->post('id');
    if($id==NULL) {
        $data = array(
            'type' => $this->input->post('type'),
            'target_group' => $this->input->post('target_group'),
            'period' => $this->input->post('period'),
            'info' => $this->input->post('info'),
            'lectorate_id' => $this->lectorate,
            'created' => $this->user_id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_STUDY,$data);
    } else {
        $data = array(
            'type' => $this->input->post('type'),
            'target_group' => $this->input->post('target_group'),
            'period' => $this->input->post('period'),
            'info' => $this->input->post('info'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_STUDY,$id,$data);
    }
    ciredirect('profile');
  }
  
  public function publication() {
      $data = $this->profil->publicat($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/publication',$data);
      $this->load->view('footer');
  }
  
  public function edit_publication() {
    $id = $this->input->post('id');
    //tu by to bolo mozno lepsie natahovat priamo z DB, ale ako vyriesit potom pridavanie...
    if($id==NULL) {
        $data = array(
            'publication_info' => $this->input->post('publication_info'),
            'category' => $this->input->post('category'),
            'year' => $this->input->post('year'),
            'lectorate_id' => $this->lectorate,
            'created' => $this->user_id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_PUBL,$data);
    } else {
        $data = array(
            'publication_info' => $this->input->post('publication'),
            'category' => $this->input->post('category'),
            'year' => $this->input->post('year'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_PUBL,$id,$data);
    }
    ciredirect('profile');
  }
  
  public function students() {
      $data = $this->profil->students($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/students');
      $this->load->view('footer');
  }
  
  public function edit_students() {
    $id = $this->input->post('id');
    if($id==NULL) {
      $data = array(
            'bc' => $this->input->post('bc'),
            'mgr' => $this->input->post('mgr'),
            'phd' => $this->input->post('phd'),
            'nonsvk' => $this->input->post('nonsvk'),
            'public' => $this->input->post('public'),
            'a1' => $this->input->post('a1'),
            'a2' => $this->input->post('a2'),
            'b1' => $this->input->post('b1'),
            'b2' => $this->input->post('b2'),
            'c1' => $this->input->post('c1'),
            'lectorate_id' => $this->lectorate,
            'created' => $this->user_id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_STUDENT,$data);
    } else {
        $data = array(
            'bc' => $this->input->post('bc'),
            'mgr' => $this->input->post('mgr'),
            'phd' => $this->input->post('phd'),
            'nonsvk' => $this->input->post('nonsvk'),
            'public' => $this->input->post('public'),
            'a1' => $this->input->post('a1'),
            'a2' => $this->input->post('a2'),
            'b1' => $this->input->post('b1'),
            'b2' => $this->input->post('b2'),
            'c1' => $this->input->post('c1'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_STUDENT,$id,$data);
    }
    ciredirect('profile');
  }
  
  public function additional() {
      $data = $this->profil->addit($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/additional',$data);
      $this->load->view('footer');
  }
  
  public function edit_additional() {
    $id = $this->input->post('id');
    if($id==NULL) {
        $data = array(
            'info' => $this->input->post('info'),
            'plans' => $this->input->post('plans'),
            'comments' => $this->input->post('comments'),
            'lectorate_id' => $this->lectorate,
            'created' => $this->user_id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_ADDIT,$data);
    } else {
        $data = array(
            'info' => $this->input->post('info'),
            'plans' => $this->input->post('plans'),
            'comments' => $this->input->post('comments'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_ADDIT,$id,$data);
    }
    ciredirect('profile');
  }
}