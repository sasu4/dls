<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_edit extends CI_Controller {

    var $lectorate; //id of lectorate coresponding to user
    var $user_id;

    function __construct() {
        parent::__construct();
        if (!$this->dx_auth->is_logged_in()) {
            ciredirect('home');
        }
        $this->load->model('model_profile', 'profile');
        $this->load->model('model_user', 'user');
        $this->load->model('model_lectorate');
        $this->load->library('profil');
        $this->user_id = $this->dx_auth->get_user_id();
        $this->lectorate = $this->user->get_lectorate($this->user_id);
    }

    public function index() {
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('Auth/profile/profile');
        $this->load->view('footer2');
    }

    function id_lectorate() {
        if ($this->user->is_admin()) {
            return $this->input->post('idl');
        } else {
            return $this->lectorate;
        }
    }

    /*
     * Sprava lektora
     */

    public function lector() {
        $data['query'] = $this->user->get_user_profile($this->user_id);
        $data['countries'] = $this->model_lectorate->get_country_drop();
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('Auth/profile/lector', $data);
        $this->load->view('footer2');
    }

    public function lector_edit() {
        $id = $this->input->post('id');
        $country = $this->model_lectorate->get_country_id($this->input->post('country_id'));
        if($this->dx_auth->is_admin()) { $visible = 0; }
        else {$visible = 1;}
        $data = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'telephone' => $this->input->post('telephone'),
            'expertise' => $this->input->post('expertise'),
            'about' => $this->input->post('about'),
            'website' => $this->input->post('website'),
            'facebook' => $this->input->post('facebook'),
            'linkedin' => $this->input->post('linkedin'),
            'twitter' => $this->input->post('twitter'),
            'visible' => $visible,
            'country_id' => $country
        );
        $this->profile->update_profile_table('users', $id, $data);
        ciredirect('home');
    }
    
    public function news() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data['query'] = $this->profile->get_news_user($this->user_id);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/news',$data);
        $this->load->view('footer');
    }
    
    public function news_more() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->uri->segment(3);
        $data = $this->profil->news($id);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/news_more', $data);
        $this->load->view('footer');
    }
    
    public function news_add() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data = $this->profil->news(0);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/news_more', $data);
        $this->load->view('footer');
    }
    
    public function edit_news() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'user_id' => $this->user_id,
                'created' => $this->user_id
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table('news', $data);
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table('news', $id, $data);
        }
        if ($this->user->is_admin()) {
            ciredirect('admin/news');
        } else {
            ciredirect('profile_edit/news');
        }
    }

    /*
     * Sprava aktivit
     */

    public function activities() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data['query'] = $this->profile->get_activities($this->lectorate);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/activity', $data);
        $this->load->view('footer');
    }

    public function activity_more() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->uri->segment(3);
        $data = $this->profil->activ($id);
        $type = $this->profile->get_category($data['category_id']);
        if ($type == 'Vzdelávanie') {
            $data['categ'] = $this->profile->get_categories_drop('Vzdelávanie');
        } elseif ($type == 'Veda') {
            $data['categ'] = $this->profile->get_categories_drop('Veda');
        } elseif ($type == 'Kultúrne') {
            $data['categ'] = $this->profile->get_categories_drop('Kultúrne');
        } else {
            ciredirect('error_404');
        }
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/activity_add', $data);
        $this->load->view('footer');
    }

    public function add_activities($type) {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        if ($type == 1) {
            $data['categ'] = $this->profile->get_categories_drop('Vzdelávanie');
        } elseif ($type == 2) {
            $data['categ'] = $this->profile->get_categories_drop('Veda');
        } elseif ($type == 3) {
            $data['categ'] = $this->profile->get_categories_drop('Kultúrne');
        } else {
            ciredirect('error_404');
        }
        if ($this->user->is_admin()) {
            $data['idl'] = $this->uri->segment(4);
        } else {
            $data['idl'] = NULL;
        }
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/activity_add', $data);
        $this->load->view('footer');
    }

    public function edit_activities() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'info' => $this->input->post('info'),
                'year' => $this->input->post('year'),
                'lectorate_id' => $lid,
                'created' => $this->user_id
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table(DB_ACTIV, $data);
        } else {
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'info' => $this->input->post('info'),
                'year' => $this->input->post('year'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table(DB_ACTIV, $id, $data);
        }
        if ($this->user->is_admin()) {
            if (!isset($lid)) {
                $lid = $this->profile->get_lectorate_id(DB_ACTIV, $id);
            }
            ciredirect('admin/page/activity/' . $lid);
        } else {
            ciredirect('home');
        }
    }

    /*
     * Sprava pracoviska / lektoratu
     */

    public function workplace() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data = $this->profil->work($this->lectorate);
        $data['countries'] = $this->model_lectorate->get_country_drop();
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/workplace', $data);
        $this->load->view('footer');
    }

    public function edit_workplace() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
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
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'linkedin' => $this->input->post('linkedin'),
            'focus' => $this->input->post('focus'),
            'last_edited' => $this->user_id
        );
        $this->profile->update_profile_table('lectorate', $id, $data);
        if ($this->user->is_admin()) {
            ciredirect('admin/profile/' . $id);
        } else {
            ciredirect('home');
        }
    }

    /*
     * Sprava veduceho pracoviska
     */

    public function head() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        if ($this->profil->is_head($this->lectorate)) {
            $data = $this->profil->get_head($this->lectorate,$this->user_id);
            $data['idl'] = NULL; // toto
            $this->load->view('header');
            $this->load->view('navigation');
            $this->load->view('Auth/profile/head', $data);
            $this->load->view('footer');
        } else {
            $data['users'] = $this->user->get_user_drop();
            $data['idl'] = NULL;
            $this->load->view('header');
            $this->load->view('navigation');
            $this->load->view('Auth/profile/head_choose', $data);
            $this->load->view('footer');
        }
    }

    public function choose_head() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $user = $this->input->post('user_id');
        $id = $this->user->get_user_id($user);
        if ($this->user->is_admin()) {
            $data['idl'] = $this->input->post('idl');
        } else {
            $data['idl'] = NULL;
        }
        if ($id > 0) {
            if(($this->user_id == $id)&&($this->user_id == $user)) {
                $data['edit'] = TRUE;
                $data['can_update'] = TRUE;
            } else {
                $data['edit'] = FALSE;
                $data['can_update'] = FALSE;
            }
        } else {
            $data['edit'] = TRUE;
            $data['can_update'] = TRUE;
        }
        $data['query'] = $this->user->get_user($user);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/head', $data);
        $this->load->view('footer');
    }

    public function edit_head() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
            $data = array(
                'name' => $this->input->post('name'),
                'surname' => $this->input->post('surname'),
                'expertise' => $this->input->post('expertise'),
                'website' => $this->input->post('website'),
                'about' => $this->input->post('about'),
                'email' => $this->input->post('email'),
                'created' => $this->user_id,
                'lectorate_id' => $lid
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table(DB_HEAD, $data);
            $id_head = $this->profile->get_head_id($data['email'], $lid);
            $data2['head_id'] = $id_head;
            $this->profile->update_profile_table('lectorate', $lid, $data2);
        } else {
            //asi by sa nemalo dovolit editovat, len sa zmeni na head
            $lid = $this->id_lectorate();
            $hed = $this->input->post('head');
            if ($hed == 1) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'surname' => $this->input->post('surname'),
                    'expertise' => $this->input->post('expertise'),
                    'website' => $this->input->post('website'),
                    'about' => $this->input->post('about'),
                    'head' => $hed
                );
                $this->user->update_user($id, $data);
                $data2 = array(
                    'head_user' => $id
                );
                $this->profile->update_profile_table('lectorate', $lid, $data2);
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
                $this->profile->update_profile_table(DB_HEAD, $id, $data);
            }
        }
        if ($this->user->is_admin()) {
            ciredirect('admin/page/head/' . $lid);
        } else {
            ciredirect('home');
        }
    }

    /*
     * Sprava typov studia
     */

    public function types_of_study() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data['query'] = $this->profil->studie($this->lectorate);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/types_studies', $data);
        $this->load->view('footer');
    }

    public function study_more() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->uri->segment(3);
        $data = $this->profil->study($id);
        if ($this->user->is_admin()) {
            $data['idl'] = $this->uri->segment(4);
        } else {
            $data['idl'] = NULL;
        }
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/types_study', $data);
        $this->load->view('footer');
    }

    public function edit_study() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
            $data = array(
                'type' => $this->input->post('type'),
                'target_group' => $this->input->post('target_group'),
                'period' => $this->input->post('period'),
                'info' => $this->input->post('info'),
                'lectorate_id' => $lid,
                'created' => $this->user_id
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table(DB_STUDY, $data);
        } else {
            $data = array(
                'type' => $this->input->post('type'),
                'target_group' => $this->input->post('target_group'),
                'period' => $this->input->post('period'),
                'info' => $this->input->post('info'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table(DB_STUDY, $id, $data);
        }
        if ($this->user->is_admin()) {
            if (!isset($lid)) {
                $lid = $this->profile->get_lectorate_id(DB_STUDY, $id);
            }
            ciredirect('admin/page/types_study/' . $lid);
        } else {
            ciredirect('profile_edit/types_of_study');
        }
    }

    /*
     * Sprava publikacii
     */

    public function publication() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data['query'] = $this->profil->publicat($this->lectorate);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/publications', $data);
        $this->load->view('footer');
    }

    public function publication_more() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->uri->segment(3);
        $data['query'] = $this->profil->publicat_one($id);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/publication', $data);
        $this->load->view('footer');
    }

    public function add_publication() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data['query'] = $this->profil->publicat(0);
        if ($this->user->is_admin()) {
            $data['idl'] = $this->uri->segment(3);
        } else {
            $data['idl'] = NULL;
        }
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/publication', $data);
        $this->load->view('footer');
    }

    public function edit_publication() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
            $data = array(
                'publication_info' => $this->input->post('publication_info'),
                'category' => $this->input->post('category'),
                'year' => $this->input->post('year'),
                'lectorate_id' => $lid,
                'created' => $this->user_id
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table(DB_PUBL, $data);
        } else {
            $data = array(
                'publication_info' => $this->input->post('publication_info'),
                'category' => $this->input->post('category'),
                'year' => $this->input->post('year'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table(DB_PUBL, $id, $data);
        }
        if ($this->user->is_admin()) {
            if (!isset($lid)) {
                $lid = $this->profile->get_lectorate_id(DB_PUBL, $id);
            }
            ciredirect('admin/page/publications/' . $lid);
        } else {
            ciredirect('home');
        }
    }

    /*
     * Sprava studentov
     */

    public function students() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data = $this->profil->students($this->lectorate);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/students', $data);
        $this->load->view('footer');
    }

    public function edit_students() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
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
            $this->profile->add_profile_table(DB_STUDENT, $data);
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
            $this->profile->update_profile_table(DB_STUDENT, $id, $data);
        }
        if ($this->user->is_admin()) {
            if (!isset($lid)) {
                $lid = $this->profile->get_lectorate_id(DB_STUDENT, $id);
            }
            ciredirect('admin/page/students/' . $lid);
        } else {
            ciredirect('home');
        }
    }

    /*
     * Sprava dalsich informacii
     */

    public function additional() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $data = $this->profil->addit($this->lectorate);
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('Auth/profile/additional', $data);
        $this->load->view('footer');
    }

    public function edit_additional() {
        if ($this->lectorate == NULL) { ciredirect('lectorate/new_lectorate'); }
        $id = $this->input->post('id');
        if ($id == NULL) {
            $lid = $this->id_lectorate();
            $data = array(
                'info' => $this->input->post('info'),
                'plans' => $this->input->post('plans'),
                'comments' => $this->input->post('comments'),
                'lectorate_id' => $lid,
                'created' => $this->user_id
            );
            $this->db->set('date_created', 'NOW()', FALSE);
            $this->profile->add_profile_table(DB_ADDIT, $data);
        } else {
            $data = array(
                'info' => $this->input->post('info'),
                'plans' => $this->input->post('plans'),
                'comments' => $this->input->post('comments'),
                'last_edited' => $this->user_id
            );
            $this->profile->update_profile_table(DB_ADDIT, $id, $data);
        }
        if ($this->user->is_admin()) {
            if (!isset($lid)) {
                $lid = $this->profile->get_lectorate_id(DB_ADDIT, $id);
            }
            ciredirect('admin/page/additional/' . $lid);
        } else {
            ciredirect('home');
        }
    }

}

