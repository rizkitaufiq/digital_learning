<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProgresBelajar_model');
    }

    public function index($id_bab)
    {
        $param['data'] = $this->ProgresBelajar_model->Get_ProgresBelajar_ID_Bab($id_bab)->result();

        if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
        $this->load->view('admin/body/header');
        $this->load->view('admin/progresbelajar/detail', $param);
    }
}
