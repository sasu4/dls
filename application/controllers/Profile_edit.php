<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_edit extends CI_Controller {
    
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
  
  /*
   * Sprava lektora
   */
  
  public function lector() {
    $data['query'] = $this->user->get_user_profile($this->user_id);
    $data['countries'] = $this->model_lectorate->get_country_drop();
    $this->load->view('header');
    $this->load->view('Auth/profile/lector',$data);
    $this->load->view('footer');  
  }
  
  public function lector_edit() {
      $id = $this->input->post('id');
      $country = $this->model_lectorate->get_country_id($this->input->post('country_id'));
      $data = array(
        'name' => $this->input->post('name'),
        'surname' => $this->input->post('surname'),
        'telephone' => $this->input->post('telephone'),
        'country_id' => $country
    );
    $this->profile->update_profile_table('users',$id,$data);
    ciredirect('profile_edit');
  }
  
  /*
   * Sprava aktivit
   */
  
  public function activities() {
    $data['query'] = $this->profile->get_activities($this->lectorate);
    $this->load->view('header');
    $this->load->view('Auth/profile/activity',$data);
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
      $this->load->view('Auth/profile/activity_add',$data);
      $this->load->view('footer');
  }
  
  public function add_activities($type) {
    if($type==1)  {
        $data['categ'] = $this->profile->get_categories_drop('Vzdelávanie');
    } elseif($type==2) {
        $data['categ'] = $this->profile->get_categories_drop('Veda');
    } elseif($type==3) {
        $data['categ'] = $this->profile->get_categories_drop('Kultúrne');
    } else {
        ciredirect('error_404');
    }
    if($this->user->is_admin()) {
          $data['idl'] = $this->uri->segment(4);
      } else {
          $data['idl'] = NULL;
      }
    $this->load->view('header');
    $this->load->view('Auth/profile/activity_add',$data);
    $this->load->view('footer');
  }
  
  public function edit_activities() {
      $id = $this->input->post('id');
      if($id==NULL) {
          //zmenit na jednu funkciu
          if($this->user->is_admin()) {
              $lid = $this->input->post('idl');
          } else {
              $lid = $this->lectorate;
          }
          $data = array(
              'category_id' => $this->input->post('category_id'),
              'info' => $this->input->post('info'),
              'year' => $this->input->post('year'),
              'lectorate_id' => $lid,
              'created' => $this->user_id
          );
          $this->db->set('date_created', 'NOW()', FALSE);
          $this->profile->add_profile_table(DB_ACTIV,$data);
      } else {
          $data = array(
              'category_id' => $this->input->post('category_id'),
              'info' => $this->input->post('info'),
              'year' => $this->input->post('year'),
              'last_edited' => $this->user_id
                  );
          $this->profile->update_profile_table(DB_ACTIV,$id,$data);
      }     
      if($this->user->is_admin()) {
          if(!isset($lid)) {
              $lid = $this->profile->get_lectorate_id(DB_ACTIV,$id);
          }
          ciredirect('admin/page/activity/'.$lid);
      } else {
          ciredirect('profile_edit');
      }
  }
  
  /*
   * Sprava pracoviska / lektoratu
   */
  
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
    if($this->user->is_admin()) {
          ciredirect('admin/profile/'.$id);
      } else {
          ciredirect('profile_edit');
      }
  }
  
  /*
   * Sprava veduceho pracoviska
   */
  
  public function head() {
      if($this->profil->is_head($this->lectorate)) {
          $data = $this->profil->get_head($this->lectorate);
          $this->load->view('header');
          $this->load->view('Auth/profile/head',$data);
          $this->load->view('footer');
      } else {
          $data['users'] = $this->user->get_user_drop();
          $this->load->view('header');
          $this->load->view('Auth/profile/head_choose',$data);
          $this->load->view('footer');
      }
  }
  
  public function choose_head() {
      $user = $this->input->post('user_id');
      $id = $this->user->get_user_id($user);
      if($id>0) {
          $data['edit'] = FALSE;
          $data['can_update'] = FALSE;
      } else {
          $data['edit'] = TRUE;
          $data['can_update'] = TRUE;
      }
      $data['query'] = $this->user->get_user($user);
      $this->load->view('header');
      $this->load->view('Auth/profile/head',$data);
      $this->load->view('footer');
  }
  
public function edit_head() {
    $id = $this->input->post('id');
    if($id==NULL) {
        $data = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'expertise' => $this->input->post('expertise'),
            'website' => $this->input->post('website'),
            'about' => $this->input->post('about'),
            'email' => $this->input->post('email'),
            'created' => $this->user_id,
            'lectorate_id' => $this->lectorate
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_HEAD,$data);
        $id_head = $this->profile->get_head_id($data['email'],$this->lectorate);
        $data2['head_id'] = $id_head;
        $this->profile->update_profile_table('lectorate',$this->lectorate,$data2);
    } else {
        //asi by sa nemalo dovolit editovat, len sa zmeni na head
        $hed = $this->input->post('head');
        if($hed==1) {
            $data = array(
                'head' => $this->input->post('head')
            );
            $this->user->update_user($id,$data);
            $data2 = array(
                'head_user' => $id
            );
            $this->profile->update_profile_table('lectorate',$this->lectorate,$data2);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'surname' => $this->input->post('surname'),
                'expertise' => $this->input->post('expertise'),
                'website' => $this->input->post('website'),
                'about' => $this->input->post('about'),
                'email' => $this->input->post('email'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table(DB_HEAD,$id,$data);
        }
    }
    ciredirect('profile_edit');
}

/*
 * Sprava typov studia
 */
  
  public function types_of_study() {
      $data['query'] = $this->profil->studie($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/types_studies',$data);
      $this->load->view('footer');
  }
  
  public function study_more() {
      $id = $this->uri->segment(3);
      $data = $this->profil->study($id);
      if($this->user->is_admin()) {
          $data['idl'] = $this->uri->segment(4);
      } else {
          $data['idl'] = NULL;
      }
      $this->load->view('header');
      $this->load->view('Auth/profile/types_study',$data);
      $this->load->view('footer');
  }
  
  public function edit_study() {
    $id = $this->input->post('id');
    if($id==NULL) {
        if($this->user->is_admin()) {
            $lid = $this->input->post('idl');
        } else {
            $lid = $this->lectorate;
        }
        $data = array(
            'type' => $this->input->post('type'),
            'target_group' => $this->input->post('target_group'),
            'period' => $this->input->post('period'),
            'info' => $this->input->post('info'),
            'lectorate_id' => $lid,
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
    if($this->user->is_admin()) {   
        if(!isset($lid)) {
            $lid = $this->profile->get_lectorate_id(DB_STUDY,$id);
        }
        ciredirect('admin/page/types_study/'.$lid);
    } else {
        ciredirect('profile_edit');
    }
  }
  
  /*
   * Sprava publikacii
   */
  
  public function publication() {
      $data['query'] = $this->profil->publicat($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/publications',$data);
      $this->load->view('footer');
  }
  
  public function publication_more() {
      $id = $this->uri->segment(3);
      $data['query'] = $this->profil->publicat_one($id);
      $this->load->view('header');
      $this->load->view('Auth/profile/publication',$data);
      $this->load->view('footer');
  }
  
  public function add_publication() {
      $data['query'] = $this->profil->publicat(0);
      if($this->user->is_admin()) {
          $data['idl'] = $this->uri->segment(3);
      } else {
          $data['idl'] = NULL;
      }
      $this->load->view('header');
      $this->load->view('Auth/profile/publication',$data);
      $this->load->view('footer');
  }
  
  public function edit_publication() {
    $id = $this->input->post('id');
    if($id==NULL) {
        if($this->user->is_admin()) {
            $lid = $this->input->post('idl');
        } else {
            $lid = $this->lectorate;
        }
        $data = array(
            'publication_info' => $this->input->post('publication_info'),
            'category' => $this->input->post('category'),
            'year' => $this->input->post('year'),
            'lectorate_id' => $lid,
            'created' => $this->user_id
        );
        $this->db->set('date_created', 'NOW()', FALSE);
        $this->profile->add_profile_table(DB_PUBL,$data);
    } else {
        $data = array(
            'publication_info' => $this->input->post('publication_info'),
            'category' => $this->input->post('category'),
            'year' => $this->input->post('year'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_PUBL,$id,$data);
    }
    if($this->user->is_admin()) {   
        if(!isset($lid)) {
            $lid = $this->profile->get_lectorate_id(DB_PUBL,$id);
        }
        ciredirect('admin/page/publications/'.$lid);
    } else {
        ciredirect('profile_edit');
    }
  }
  
  /*
   * Sprava studentov
   */
  
  public function students() {
      $data = $this->profil->students($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/students',$data);
      $this->load->view('footer');
  }
  
  public function edit_students() {
    $id = $this->input->post('id');
    if($id==NULL) {
        if($this->user->is_admin()) {
            $lid = $this->input->post('idl');
        } else {
            $lid = $this->lectorate;
        }
        $data = array(
            'bc' => $this->input->post('bc'),
            'mgr' => $this->input->post('mgr'),
            'phd' => $this->input->post('phd'),
            'nonsvk' => $this->input->post('nonsvk'),
            'public' => $this->input->post('public'),
            'year' => $this->input->post('year'),
            'a1' => $this->input->post('a1'),
            'a2' => $this->input->post('a2'),
            'b1' => $this->input->post('b1'),
            'b2' => $this->input->post('b2'),
            'c1' => $this->input->post('c1'),
            'lectorate_id' => $lid,
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
            'year' => $this->input->post('year'),
            'a1' => $this->input->post('a1'),
            'a2' => $this->input->post('a2'),
            'b1' => $this->input->post('b1'),
            'b2' => $this->input->post('b2'),
            'c1' => $this->input->post('c1'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table(DB_STUDENT,$id,$data);
    }
    if($this->user->is_admin()) {    
        if(!isset($lid)) {
            $lid = $this->profile->get_lectorate_id(DB_STUDENT,$id);
        }
        ciredirect('admin/page/students/'.$lid);
    } else {
        ciredirect('profile_edit');
    }
  }
  
  /*
   * Sprava dalsich informacii
   */
  
  public function additional() {
      $data = $this->profil->addit($this->lectorate);
      $this->load->view('header');
      $this->load->view('Auth/profile/additional',$data);
      $this->load->view('footer');
  }
  
  public function edit_additional() {
    $id = $this->input->post('id');
    if($id==NULL) {
        if($this->user->is_admin()) {
            $lid = $this->input->post('idl');
        } else {
            $lid = $this->lectorate;
        }
        $data = array(
            'info' => $this->input->post('info'),
            'plans' => $this->input->post('plans'),
            'comments' => $this->input->post('comments'),
            'lectorate_id' => $lid,
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
    if($this->user->is_admin()) {
        if(!isset($lid)) {
            $lid = $this->profile->get_lectorate_id(DB_ADDIT,$id);
        }
        ciredirect('admin/page/additional/'.$lid);
    } else {
        ciredirect('profile_edit');
    }
  }
}