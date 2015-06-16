<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {
    
    function get_lectorate($id) {
        $this->db->select('lectorate_id');
        $this->db->from('users');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            $value = $query->row()->lectorate_id;
        } else {
            $value = NULL;
        }        
        return $value;
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
    
    /**
	 * Update user
	 *
	 * @return void
     */ 
    function update_user($id, $data) {
        $this->db->where('id',$id);
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
    
    function get_user_drop() {
        $this->db->select('email, name, surname');
        $this->db->from('users');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown)
            {
                $dropdownlist[$dropdown->email] = $dropdown->name.' '.$dropdown->surname;
            }
            $finaldropdown = $dropdownlist;
            return $finaldropdown;
        }
    }
    
    function get_user($mail) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$mail);
        return $this->db->get();
    }
    
    function get_user_id($mail) {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email',$mail);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            $value = $query->row()->id;
        } else {
            $value = NULL;
        }        
        return $value;
    }
    
    function get_user_profile($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        return $this->db->get();
    }
}