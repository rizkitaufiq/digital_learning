<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriVideo_model');
    }

    public function index($id_video)
    {
        $param['data'] = $this->MateriVideo_model->Get_MateriVideo_ID($id_video)->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materivideo/detail', $param);
    }
}
