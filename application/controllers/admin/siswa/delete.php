<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function process($id_siswa)
	{
        $id = array(
            "id_siswa" => $id_siswa
        );

        $this->db->delete('siswa', $id);
        echo "<script>alert('Data Berhasil Dihapus !');history.go(-1);</script>";
	}

}
