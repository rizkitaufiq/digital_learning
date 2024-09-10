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
        $data = array(

            "judul"         => $this->input->post('judul'),

            "isi"           => $this->input->post('isi'),

            "penjelasan"    => $this->input->post('penjelasan'),

            "bab_id"        => $this->input->post('id_bab'),

        );

        $this->db->insert('materi_teks', $data);
        echo "<script>alert('Materi Berhasil Di Tambahkan !');history.go(-1);</script>";
    }
}
