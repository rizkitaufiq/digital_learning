<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriTeks_model');
    }

    public function index()
    {
        $param['data'] = $this->MateriTeks_model->Get_Materi()->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/index', $param);
    }
}
