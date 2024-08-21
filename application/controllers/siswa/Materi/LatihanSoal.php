<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LatihanSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bab_model');
        $this->load->model('LatihanSoal_model');
        $this->load->model('Siswa_model');
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

    public function Add()
    {
        $id_soal = $this->input->post('id_soal');


        $soal = $this->LatihanSoal_model->Get_Soal_ID($id_soal)->result();

        foreach ($soal as $item) {
            $jawaban = $item->jawaban;
        }

        if ($jawaban === $this->input->post('jawaban'))

            $latihan_soal = +10;


        $id_siswa = $this->session->userdata('id_siswa');

        $siswa = $this->Siswa_model->Get_Siswa_ID($id_soal)->result();

        foreach ($siswa as $item) {
            $nama_siswa = $item->nama;
        }

        $data = array(
            'nama_siswa'      => $nama_siswa,
            'latihan_soal'    => $latihan_soal,
        );

        $this->db->insert('nilai', $data);

        redirect('Siswa/Materi/LatihanSoal');
    }
}
