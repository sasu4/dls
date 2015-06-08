<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {
    
    function get_profile() {
        $this->db->select('*');
        $this->db->from('user_profile');
        return $this->db->get();
    }
    
    function get_login($login) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$login);
        return $this->db->get();
    }
    
    function get_all($offset = 0, $row_count = 0)
	{
            $this->db->where('activated',0);
		if ($offset >= 0 AND $row_count > 0) {
			$query = $this->db->get('users', $row_count, $offset); 
		} else {
			$query = $this->db->get('users');
		}		
		return $query;
	}
    
    function activate($login) {
        $data = array('activated'=>1);
        $this->db->where('email',$login);
        $this->db->update('users',$data);
    }
    
    function is_admin() {
        $this->db->select('role_id');
        $this->db->from('users');
        $this->db->where('id',$this->dx_auth->get_user_id());
        $query = $this->db->get();
        $row = $query->row();
        $grup = $row->role_id;
        return $grup==='2';
    }
    
    function is_activated($username) {
        $this->db->select('activated');
        $this->db->from('users');
        $this->db->where('email',$username);
        $query = $this->db->get();
        $row = $query->row();
        $value = $row->activated;
        return $value==='1';
    }
}