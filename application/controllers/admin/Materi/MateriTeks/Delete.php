<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function Process($id_materi)
	{
        $id = array(
            "id_materi" => $id_materi
        );

        $this->db->delete('materi_teks', $id);
        echo "<script>alert('Data Berhasil Dihapus !');history.go(-1);</script>";
	}

}
