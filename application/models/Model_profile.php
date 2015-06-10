<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profile extends CI_Model {
    
    function get_activities($lec_id) {
        $this->db->select('*');
        $this->db->from(DB_ACTIV);
        $this->db->where('lectorate_id',$lec_id);
        return $this->db->get();
    }
    
    //add activities
    //update activities
    
    function get_profile_table($table,$lec_id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('lectorate_id',$lec_id);
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