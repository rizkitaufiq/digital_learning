<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LatihanSoal_model');
    }

    public function index($id_soal)
    {
        $param['data'] = $this->LatihanSoal_model->Get_LatihanSoal_ID($id_soal)->result();

        if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
        $this->load->view('admin/materi/latihansoal/update', $param);
    }

    public function Process()
    {
        $id = $this->input->post('id_soal');

        $data = array(

            "soal"                  => $this->input->post('soal'),

            "opsi_a"                => $this->input->post('opsi_a'),

            "opsi_b"                => $this->input->post('opsi_b'),

            "opsi_c"                => $this->input->post('opsi_c'),

            "opsi_d"                => $this->input->post('opsi_d'),

            "jawaban"                => $this->input->post('jawaban'),

            "format"                => $this->input->post('format'),

        );

        $this->db->where('id_soal', $id);
        $this->db->update('latihan_soal', $data);

        redirect('Admin/Materi/LatihanSoal/Page');
    }
}
