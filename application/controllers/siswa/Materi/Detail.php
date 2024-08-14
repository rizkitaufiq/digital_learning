<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriTeks_model');
    }

    public function index($id_materi)
    {
        $param['data'] = $this->MateriTeks_model->Get_Materi_Detail_ID($id_materi)->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/detail', $param);
    }
}
