<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LatihanSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bab_model');
        $this->load->model('LatihanSoal_model');
    }

    public function index()
    {
        $param['data'] = $this->Bab_model->Get_Bab()->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/latihan_soal', $param);
    }

    public function Soal($id_bab)
    {
        $param['data'] = $this->LatihanSoal_model->Get_SoalBab_ID($id_bab);
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/soal', $param);
    }
}
