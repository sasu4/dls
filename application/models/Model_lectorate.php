<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lectorate extends CI_Model {
    
    function get_lectorates() {
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->order_by('country_id, name_sk');
        $this->db->where('organization','lektorát');
        $this->db->where('public',1);
        return $this->db->get();
    }
    
    function get_lectorates_other() {
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('organization','iné');
        return $this->db->get();
    }
    
    function get_lectorate($id) {
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('id',$id);
        return $this->db->get();
    }
    
    function get_name($id) {
        $this->db->select('name_orig');
        $this->db->from('lectorate');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->name_orig;
            }
        }
        return $value;
    }
   
    function add_lectorate($data) {
        $this->db->insert('lectorate',$data);
    }
    
    function delete_data($table, $id) {
        $this->db->where('id', $id);
        $this->db->delete($table); 
    }
    
    /**
	 * Update lectorate
	 *
	 * @return void
     */ 
    function update_lectorate($id, $data) {
        $this->db->where('id',$id);
        $this->db->update('lectorate',$data);
    }
    
    function get_countries() {
        $this->db->order_by('country_id');
        $this->db->distinct();
        $this->db->select('country_id');
        $this->db->from('lectorate');
        $this->db->where('public',1);
        //$this->db->where('organization','lektorát');
        return $this->db->get();
    }
    
    function get_mapa_data() {
        $this->db->select('name_orig, street, number, city, name');
        $this->db->from('lectorate');
        $this->db->join('country','country.id=country_id');
        $query = $this->db->get();
        $i=0;
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $data[] = array(
                    "adresa" => $row->street.', '.$row->number.', '.$row->name,
                    "nazov" => $row->name_orig
                );
                $i++;
            }
        }
        return $data;        
    }
    
    function get_countries_other() {
        $this->db->order_by('country_id');
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('public',1);
        $this->db->where('organization','iné');
        return $this->db->get();
    }
    
    function get_lectorate_of_country($coun) {
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('country_id',$coun);
        $this->db->where('public',1);
        //$this->db->where('organization','lektorát');
        return $this->db->get();
    }
    
    function get_lectorate_c($c) {
        $this->db->select('*');
        $this->db->from('country');
        $this->db->where('id', $c);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $data['name'] = $row->name;
                $data['id'] = $row->id;
                $data['name_sk'] = $row->name_sk;
            }
        }
        return $data;
    }
    
    function get_lectorate_id($user) {
        $this->db->select('id');
        $this->db->from('lectorate');
        $this->db->where('created',$user);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->id;
            }
        }
        return $value;
    }
    
    function get_country_drop() {
        $this->db->select('name_sk');
        $this->db->from('country');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->name_sk] = $dropdown->name_sk;
            }
            $finaldropdown = $dropdownlist;
            return $finaldropdown;
        }
    }
    
    function get_country_id($name) {
        $this->db->select('id');
        $this->db->from('country');
        $this->db->where('name_sk',$name);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->id;
            }
        }
        return $value;
    }
    
    function get_country_name($id) {
        $this->db->select('name_sk');
        $this->db->from('country');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->name_sk;
            }
        }
        return $value;
    }
}