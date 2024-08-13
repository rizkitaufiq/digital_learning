<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Process($id_soal)
    {
        $id = array(
            "id_soal" => $id_soal
        );

        $this->db->delete('latihan_soal', $id);
        echo "<script>alert('Data Berhasil Dihapus !');history.go(-1);</script>";
    }
}
