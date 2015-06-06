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
   
    function add_lectorate($data) {
        $this->db->add('lectorate',$data);
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
        $this->db->distinct();
        $this->db->select('id_country');
        $this->db->from('lectorate');
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
}