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
        return $this->db->get();
    }
}
