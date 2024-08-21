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

        $data = array(

            "praktikum"         => $this->input->post('praktikum'),

            "soal"              => $this->input->post('soal'),

        );

        $this->db->insert('praktikum', $data);
        redirect('Admin/PraktikumSiswa/Page');
    }
}
