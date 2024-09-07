<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Admin
    public function Get_Nilai($limit, $start)
    {
        $this->db->select('siswa.nama,
                          MAX(CASE WHEN bab.id_bab = 1 THEN nilai_latihan_soal.skor ELSE 0 END) as bab_1,
                          MAX(CASE WHEN bab.id_bab = 2 THEN nilai_latihan_soal.skor ELSE 0 END) as bab_2,
                          MAX(CASE WHEN bab.id_bab = 3 THEN nilai_latihan_soal.skor ELSE 0 END) as bab_3,
                          MAX(CASE WHEN bab.id_bab = 4 THEN nilai_latihan_soal.skor ELSE 0 END) as bab_4,
                          (SUM(nilai_latihan_soal.skor) / COUNT(DISTINCT nilai_latihan_soal.bab_id)) as rata_rata
        ');
        $this->db->from('nilai_latihan_soal');
        $this->db->join('bab', 'nilai_latihan_soal.bab_id = bab.id_bab');
        $this->db->join('siswa', 'nilai_latihan_soal.siswa_id = siswa.id_siswa');
        $this->db->group_by('nilai_latihan_soal.siswa_id');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function Get_Total_Nilai()
    {
        return $this->db->count_all_results('nilai_latihan_soal');
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
