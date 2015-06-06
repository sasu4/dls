<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {
    
    function get_profile() {
        $this->db->select('*');
        $this->db->from('user_profile');
        return $this->db->get();
    }
}