<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgresBelajar_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // admin
    public function Get_ProgresBelajar($limit, $start)
    {
        $this->db->select('siswa.nama,
                          (SUM(CASE WHEN bab.id_bab = 1 THEN progres_belajar.persentase ELSE 0 END)) as bab_1,
                          (SUM(CASE WHEN bab.id_bab = 2 THEN progres_belajar.persentase ELSE 0 END)) as bab_2,
                          (SUM(CASE WHEN bab.id_bab = 3 THEN progres_belajar.persentase ELSE 0 END)) as bab_3,
                          (SUM(CASE WHEN bab.id_bab = 4 THEN progres_belajar.persentase ELSE 0 END)) as bab_4,
                          (SUM(CASE WHEN bab.id_bab = 5 THEN progres_belajar.persentase ELSE 0 END)) as bab_5,
                          (SUM(CASE WHEN bab.id_bab = 6 THEN progres_belajar.persentase ELSE 0 END)) as bab_6,
                          (SUM(CASE WHEN bab.id_bab = 7 THEN progres_belajar.persentase ELSE 0 END)) as bab_7,
                          (SUM(CASE WHEN bab.id_bab = 8 THEN progres_belajar.persentase ELSE 0 END)) as bab_8,
                          (SUM(CASE WHEN bab.id_bab = 9 THEN progres_belajar.persentase ELSE 0 END)) as bab_9,
                          (SUM(CASE WHEN bab.id_bab = 10 THEN progres_belajar.persentase ELSE 0 END)) as bab_10,
                          (SUM(progres_belajar.persentase) / COUNT(DISTINCT progres_belajar.bab_id) / 10) as rata_rata
        ');
        $this->db->from('progres_belajar');
        $this->db->join('bab', 'progres_belajar.bab_id = bab.id_bab');
        $this->db->join('siswa', 'progres_belajar.siswa_id = siswa.id_siswa');
        $this->db->group_by('progres_belajar.siswa_id');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function Get_Total_ProgresBelajar()
    {
        return $this->db->count_all_results('progres_belajar');
    }

    public function Get_Progres_Check_Data($id_siswa, $id_materi)
    {
        $this->db->select('*');
        $this->db->from('progres_belajar');
        $this->db->where('siswa_id', $id_siswa);
        $this->db->where('materi_id', $id_materi);
        $this->db->group_by('id_progres_belajar');
        return $this->db->get();
    }

    public function Get_ProgresBelajar_ID_Bab($id_bab)
    {
        $this->db->select_sum('persentase');
        $this->db->select('bab_id, nama');
        $this->db->from('progres_belajar');
        $this->db->join('siswa', 'progres_belajar.siswa_id = siswa.id_siswa');
        $this->db->where('bab_id', $id_bab);
        $this->db->group_by('siswa_id');
        $this->db->order_by('siswa_id', "ASC");
        return $this->db->get();
    }
}
