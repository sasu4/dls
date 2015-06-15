<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profil {
    function Profil() {
        $this->ci =& get_instance();
        $this->ci->load->model('model_profile','profile');
    }
    
    function activ($id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table_id(DB_ACTIV,$id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id' => $row->id,
                    'info' => $row->info,
                    'category_id' => $row->category_id,
                    'year' => $row->year,
                );
            }
        } else {
            ciredirect('show_404');
        }
        return $data;
    }
    
    function addit($lec_id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table(DB_ADDIT,$lec_id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id' => $row->id,
                    'info' => $row->info,
                    'plans' => $row->plans,
                    'comments' => $row->comments
                );
            }
        } else {
            $data = array(
                    'id' => NULL,
                    'info' => '',
                    'plans' => '',
                    'comments' => ''
                );
        }
        return $data;
    }
    
    function work($lec_id) {
        $this->Profil();
        $this->ci->load->model('model_lectorate');
        $query = $this->ci->profile->get_lectorate('lectorate',$lec_id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id' => $row->id,
                    'lect_name_o' => $row->name_orig,
                    'lect_name_s' => $row->name_sk,
                    'uni_name_o' => $row->univ_orig,
                    'uni_name_s' => $row->univ_sk,
                    'street' => $row->street,
                    'numb' => $row->number,
                    'city' => $row->city,
                    'c_sel' => $this->ci->model_lectorate->get_country_name($row->country_id),
                    'psc' => $row->zip,
                    'tel' => $row->telephone,
                    'web' => $row->website,
                    'focus' => $row->focus
                );
            }
        }
        return $data;
    }
    
    function publicat($lec_id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table(DB_PUBL,$lec_id);
        return $query;
    }
    
    function publicat_one($id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table_id(DB_PUBL,$id);
        return $query;
    }
    
    function students($lec_id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table(DB_STUDENT,$lec_id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id' => $row->id,
                    'bc' => $row->bc,
                    'mgr' => $row->mgr,
                    'phd' => $row->phd,
                    'nonsvk' => $row->nonsvk,
                    'public' => $row->public,
                    'year' => $row->year,
                    'a1' => $row->a1,
                    'a2' => $row->a2,
                    'b1' => $row->b1,
                    'b2' => $row->b2,
                    'c1' => $row->c1
                );
            }
        } else {
            $data = array(
                'id' => NULL,
                'bc' => '',
                'mgr' => '',
                'phd' => '',
                'nonsvk' => '',
                'public' => '',
                'year' => '',
                'a1' => '',
                'a2' => '',
                'b1' => '',
                'b2' => '',
                'c1' => ''
            );
        }
        return $data;
    }
    
    function study($id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table_id(DB_STUDY,$id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id' => $row->id,
                    'type' => $row->type,
                    'target_group' => $row->target_group,
                    'period' => $row->period,
                    'info' => $row->info
                );
            }
        } else {
            $data = array(
                'id' => NULL,
                'type' => '',
                'target_group' => '',
                'period' => '',
                'info' => ''
            );
        }
        return $data;
    }
    
    function studie($lec_id) {
        $this->Profil();
        $query = $this->ci->profile->get_profile_table(DB_STUDY,$lec_id);
        return $query;
    }
    
    function is_head($lec_id) {
        $this->Profil();
        $value = FALSE;
        $query = $this->ci->profile->get_lectorate('lectorate',$lec_id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                if($row->head_id!=NULL) {
                    $value = TRUE;
                } 
                if($row->head_user!=NULL) {
                    $value = TRUE;
                }
            }
        }
        return $value;
    }
    
    function get_head($lec_id) {
        $this->Profil();
        $query = $this->ci->profile->get_lectorate('lectorate',$lec_id);
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                if($row->head_id!=NULL) {
                    $value = $this->ci->profile->get_head($row->head_id);
                } 
                if($row->head_user!=NULL) {
                    $this->ci->load->model('model_user');
                    $value = $this->ci->model_user->get_user_profile($row->head_user);
                }
            }
        }
        return $value;
    }
}