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
        $this->db->where('file_praktikum !=', ' ');
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
    public function Get_Praktikum($id_siswa, $limit, $offset)
    {
        $this->db->from('praktikum');
        $this->db->join('praktikum_siswa', 'praktikum.id_praktikum = praktikum_siswa.praktikum_id');
        $this->db->where('siswa_id', $id_siswa);
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function Get_Total_Praktikum()
    {
        return $this->db->count_all_results('praktikum');
    }

    public function Get_Praktikum_Siswa_ID($id_siswa)
    {
        $this->db->from('praktikum_siswa');
        $this->db->where('siswa_id', $id_siswa);
        return $this->db->get();
    }

    public function Get_Status_Praktikum_Siswa_ID($id_siswa, $praktikum_id)
    {
        $this->db->from('praktikum_siswa');

        $this->db->where('siswa_id', $id_siswa);
        $this->db->where('praktikum_id', $praktikum_id);
        return $this->db->get();
    }
}
