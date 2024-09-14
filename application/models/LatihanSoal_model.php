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

    public function Get_SoalBab_ID($id_bab)
    {
        $this->db->select('*');
        $this->db->from('latihan_soal');
        $this->db->join('bab', 'latihan_soal.bab_id = bab.id_bab');
        $this->db->where('bab_id', $id_bab);
        $this->db->order_by('RAND()');
        $query =  $this->db->get();
        return $query->result();
    }

    public function Get_Soal_ID($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        $this->db->from('latihan_soal');
        return $this->db->get();
    }

    public function Get_Count_Latihan_Soal($id_bab)
    {
        $this->db->where('bab_id', $id_bab);
        return $this->db->count_all_results('latihan_soal');
    }

    public function Get_Nilai_Latihan_Soal_ID($id_nilai)
    {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->from('nilai_latihan_soal');
        return $this->db->get();
    }
}
