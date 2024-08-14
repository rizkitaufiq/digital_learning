<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MateriTeks_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function Get_Materi_ID($id_bab, $limit, $offset)
    {
        $this->db->from('materi_teks');
        $this->db->join('bab', 'materi_teks.bab_id = bab.id_bab');
        $this->db->where('bab_id', $id_bab);
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function Get_Total_Bab_ID($id_bab)
    {

        $this->db->where('bab_id', $id_bab);
        return $this->db->count_all_results('materi_teks');
    }

    public function Get_Materi()
    {
        $this->db->select('*');
        $this->db->from('bab');
        $this->db->join('materi_teks', 'materi_teks.bab_id = bab.id_bab');
        return $this->db->get();
    }


    public function Get_Materi_Detail_ID($id_materi)
    {
        $this->db->from('materi_teks');
        $this->db->where('id_materi', $id_materi);
        return $this->db->get();
    }
}
