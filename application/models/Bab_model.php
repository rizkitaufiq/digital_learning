<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bab_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function Get_Bab()
    {

        $this->db->select('*');
        $this->db->from('bab');
        return $this->db->get();
    }

    public function Get_Bab_ID($id_bab)
    {

        $this->db->where('id_bab', $id_bab);
        $this->db->from('bab');
        return $this->db->get();
    }
}
