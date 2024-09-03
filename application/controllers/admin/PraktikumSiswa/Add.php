<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        // $this->load->model('Praktikum_model');
    }

    public function Process()
    {
        $siswa_data = $this->Siswa_model->Get_All_Siswa()->result();


        $data_praktikum = array(

            "praktikum"         => $this->input->post('praktikum'),

            "soal"              => $this->input->post('soal'),

        );

        $this->db->insert('praktikum', $data_praktikum);

        $praktikum_id =  $this->db->insert_id();
        // $praktikum_data = $this->Praktikum_model->db->Get_Praktikum_Data()->restul();

        foreach ($siswa_data as $item) {

            $siswa = $item->id_siswa;

            $data_praktikum_siswa = array(

                "siswa_id"        => $siswa,

                "praktikum_id"    => $praktikum_id,

            );

            $this->db->insert('praktikum_siswa', $data_praktikum_siswa);
        }

        redirect('Admin/PraktikumSiswa/Page');
    }
}
