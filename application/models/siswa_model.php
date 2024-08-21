<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function Get_Siswa($username, $password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('siswa');
        return $query->row_array();
    }

    public function Get_Siswa_Paginate($limit, $start, $search = '')
    {
        if ($search) {
            $this->db->like('nama', $search);
            $this->db->or_like('kelas', $search);
            $this->db->order_by('nama', 'ASC');
        }
        $this->db->order_by('nama', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get('siswa');
        return $query->result_array();
    }

    public function Count_Siswa($search = '')
    {
        if ($search) {
            $this->db->like('nama', $search);
            $this->db->or_like('kelas', $search);
        }
        return $this->db->count_all_results('siswa');
    }

    public function Get_Siswa_ID($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->from('siswa');
        return $this->db->get();
    }
}
