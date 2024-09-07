<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Siswa
    public function Get_Status_Tes_ID($id_siswa, $id_bab)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->where('bab_id', $id_bab);
        $this->db->from('siswa');
        $this->db->join('nilai_latihan_soal', 'siswa.id_siswa = nilai_latihan_soal.siswa_id');
        return $this->db->get();
    }

    public function Get_Jawaban_Data_ID($id_nilai)
    {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->from('latihan_soal');
        $this->db->join('nilai_latihan_soal', 'latihan_soal.id_soal = nilai_latihan_soal.latihan_soal_id');
        return $this->db->get();
    }

    public function Get_Nilai_Latihan_Soal_ID($id_siswa, $id_bab)
    {
        $this->db->where('siswa_id', $id_siswa);
        $this->db->where('bab_id', $id_bab);
        $this->db->from('nilai_latihan_soal');
        return $this->db->get();
    }
}
