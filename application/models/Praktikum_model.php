<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Praktikum_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function Get_Praktikum_Paginate($limit, $start, $search = '')
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

    public function Count_Praktikum($search = '')
    {
        if ($search) {
            $this->db->like('penjelasan', $search);
        }
        return $this->db->count_all_results('siswa');
    }
}
