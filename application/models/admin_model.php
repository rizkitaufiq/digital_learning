<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function Get_Admin($username, $password){
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');
		return $query->row_array();
	
	}

}
