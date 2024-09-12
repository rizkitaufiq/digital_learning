<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bab_model');
        $this->load->model('MateriTeks_model');
    }

    public function Process()
    {
        $isi                          = $_FILES['isi'];

        $config['upload_path']        = 'upload/materi/teks';

        $config['allowed_types']      = 'pdf';

        $this->upload->initialize($config);

        $this->upload->do_upload('isi');

        $isi                         = $this->upload->data('file_name');

        $data = array(

            "judul"         => $this->input->post('judul'),

            "isi"           => $isi,

            "penjelasan"    => $this->input->post('penjelasan'),

            "bab_id"        => $this->input->post('id_bab'),

        );

        $this->db->insert('materi_teks', $data);
        echo "<script>alert('Materi Berhasil Di Tambahkan !');history.go(-1);</script>";
    }
}
