<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Praktikum_model');
    }

    public function Process($id_praktikum_siswa)
    {

        $data     = $this->Praktikum_model->file($id_praktikum_siswa)->result();

        foreach ($data as $file) {

            $file_praktikum = $file->file_praktikum;
        }
        $param  = 'upload/praktikum/' . $file_praktikum;
        force_download($param, NULL);

        redirect('Admin/PraktikumSiswa/Page');
    }
}
