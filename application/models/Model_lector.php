<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lector extends CI_Model {
    
    function get_lectors() {
        $this->db->select('*');
        $this->db->from('lector');
        return $this->db->get();
    }
    
    function get_lector($id) {
        $this->db->select('*');
        $this->db->from('lector');
        $this->db->where('id',$id);
        return $this->db->get();
    }
   
    function add_lector($data) {
        $this->db->add('lector',$data);
    }
    
    /**
	 * Update lectorate
	 *
	 * @return void
     */ 
    function update_lector($id, $data) {
        $this->db->where('id',$id);
        $this->db->update('lector',$data);
    }
    
}