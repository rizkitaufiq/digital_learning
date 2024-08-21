<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Praktikum_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Admin
    public function Get_Praktikum_Paginate($limit, $start, $search = '')
    {
        if ($search) {
            $this->db->like('nama', $search);
            $this->db->or_like('kelas', $search);
            $this->db->order_by('nama', 'ASC');
        }
        $this->db->select('*');
        $this->db->from('praktikum_siswa');
        $this->db->join('siswa', 'praktikum_siswa.siswa_id = siswa.id_siswa');
        $this->db->join('praktikum', 'praktikum_siswa.praktikum_id = praktikum.id_praktikum');
        $this->db->order_by('nama', 'ASC');

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Count_Praktikum($search = '')
    {
        if ($search) {
            $this->db->like('penjelasan', $search);
        }
        return $this->db->count_all_results('siswa');
    }

    function file($id_praktikum_siswa)
    {
        $this->db->select('*');
        $this->db->from('praktikum_siswa');
        $this->db->where('id_praktikum_siswa', $id_praktikum_siswa);
        return $this->db->get();
    }

    // Siswa
    public function Get_Praktikum($limit, $offset)
    {
        $this->db->from('praktikum');
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function Get_Total_Praktikum()
    {
        return $this->db->count_all_results('praktikum');
    }
}
