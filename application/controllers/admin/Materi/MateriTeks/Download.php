<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriTeks_model');
    }

    public function Process($id_materi)
    {

        $data     = $this->MateriTeks_model->Get_MateriTeks_ID($id_materi)->result();


        foreach ($data as $file) {

            $file_materi = $file->isi;
        }
        $param  = 'upload/materi/teks/' . $file_materi;
        force_download($param, NULL);

        echo "<script>history.go(-1);</script>";
    }
}
