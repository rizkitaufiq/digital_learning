<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('MateriTeks_model');
    }

    public function Process($id_materi)
    {
        $file_materi = $this->MateriTeks_model->Get_MateriTeks_ID($id_materi)->result();

        foreach ($file_materi as $item) {
            $file = $item->isi;

            if ($file) {
                $file_path = 'upload/materi/teks/' . $file;

                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $id = array(
                "id_materi" => $id_materi
            );

            $this->db->delete('materi_teks', $id);
            echo "<script>alert('Data Berhasil Dihapus !');history.go(-1);</script>";
        }
    }
}
