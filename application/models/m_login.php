<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class M_login extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('user_id, username, password');
        $this->db->from('st_users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
         
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) { 
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}
  
/* End of file m_login.php */
/* Location: ./application/models/m_login.php */