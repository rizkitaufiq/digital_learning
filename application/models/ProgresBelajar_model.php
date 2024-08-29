<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgresBelajar_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
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
