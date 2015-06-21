<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lectorate extends CI_Model {
    
    function get_lectorates() {
        $this->db->select('*');
        $this->db->from('lectorate');
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
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('public',1);
        $this->db->where('organization','lektorát');
        return $this->db->get();
    }
    
    function get_countries_other() {
        $this->db->order_by('country_id');
        $this->db->select('*');
        $this->db->from('lectorate');
        $this->db->where('public',1);
        $this->db->where('organization','iné');
        return $this->db->get();
    }
    
    function get_lectorate_c($c) {
        $this->db->select('*');
        $this->db->from('country');
        $this->db->where('id',$c);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $data['name'] = $row->name;
                $data['id'] = $row->id;
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
        $this->db->select('name');
        $this->db->from('country');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->name] = $dropdown->name;
            }
            $finaldropdown = $dropdownlist;
            return $finaldropdown;
        }
    }
    
    function get_country_id($name) {
        $this->db->select('id');
        $this->db->from('country');
        $this->db->where('name',$name);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->id;
            }
        }
        return $value;
    }
    
    function get_country_name($id) {
        $this->db->select('name');
        $this->db->from('country');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->name;
            }
        }
        return $value;
    }
}