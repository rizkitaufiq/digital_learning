<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Process()
    {
        date_default_timezone_set('Asia/Jakarta');

        $id_siswa                     = $this->session->userdata('id_siswa');

        $id_praktikum_siswa           = $this->input->post('id_praktikum_siswa');

        $file_praktikum               = $_FILES['file_praktikum'];

        $config['upload_path']        = 'upload/praktikum';

        $config['allowed_types']      = 'pdf';

        $this->upload->initialize($config);

        $this->upload->do_upload('file_praktikum');

        $file_praktikum = $this->upload->data('file_name');

        $data = array(

            "tanggal"       => date('y-m-d'),

            "waktu"         => date('H:i:s'),

            "file_praktikum" => $file_praktikum,

        );

        $this->db->where('id_praktikum_siswa', $id_praktikum_siswa);
        $this->db->update('praktikum_siswa', $data);

        echo "<script>alert('Praktikum Berhasil Dikirim !');history.go(-1);</script>";
    }
}
