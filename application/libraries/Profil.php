<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profil {
    function Profil() {
        $this->ci =& get_instance();
        $this->ci->load->model('model_profile','profile');
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
                    'c_sel' => $row->country_id,
                    'psc' => $row->zip,
                    'tel' => $row->telephone,
                    'web' => $row->website,
                    'focus' => $row->focus
                );
            }
        }
        return $data;
    }
}