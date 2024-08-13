<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LatihanSoal_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function Get_LatihanSoal($limit, $offset)
    {
        $this->db->from('latihan_soal');
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function Get_Total_LatihanSoal()
    {
        return $this->db->count_all_results('latihan_soal');
    }

    public function Get_LatihanSoal_ID($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        $this->db->from('latihan_soal');
        return $this->db->get();
    }
}
