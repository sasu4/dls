<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profile extends CI_Model {
    
    function get_activities($lec_id) {
        $this->db->select('*');
        $this->db->from(DB_ACTIV);
        $this->db->where('lectorate_id',$lec_id);
        return $this->db->get();
    }
    
    function get_categorie_info($id) {
        $this->db->select('id, type, description');
        $this->db->from(DB_CTG);
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $data['type'] = $row->type;
                $data['description'] = $row->description;
                $data['id'] = $row->id;
            }
        }
        return $data;
    }
    
    function get_categories_drop($type) {
        $this->db->select('id, description');
        $this->db->from(DB_CTG);
        $this->db->where('type',$type);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->id] = $dropdown->description;
            }
            $finaldropdown = $dropdownlist;
            return $finaldropdown;
        }
    }
    
    function get_head_id($email,$lec){
        $this->db->select('id');
        $this->db->from(DB_HEAD);
        $this->db->where('email',$email);
        $this->db->where('lectorate_id',$lec);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            foreach($query->result() as $row) {
                $value = $row->id;
            }
        }
        return $value;
    }
    
    //add activities
    //update activities
    
    function get_profile_table($table,$lec_id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('lectorate_id',$lec_id);
        return $this->db->get();
    }
    
    function get_profile_table_id($table,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id',$id);
        return $this->db->get();
    }
    
    function get_lectorate($table,$lec_id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id',$lec_id);
        return $this->db->get();
    }
    
    /**
	 * Insert
	 *
	 * @return void
     */ 
    function add_profile_table($table,$data) {
        $this->db->insert($table,$data);
    }
    
    /**
	 * Update additional
	 *
	 * @return void
     */ 
    function update_profile_table($table,$id, $data) {
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }
}