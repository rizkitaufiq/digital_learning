<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Praktikum_model');
    }

    public function index()
    {

        if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
        $this->load->view('admin/body/header');
        $this->load->view('admin/praktikumsiswa/index');
    }

    public function Fetch_Data()
    {
        $limit = $this->input->post('limit');
        $start = $this->input->post('start');
        $search = $this->input->post('search');

        $data = $this->Siswa_model->Get_Praktikum_Paginate($limit, $start, $search);
        $total_records = $this->Siswa_model->Count_Praktikum($search);

        $output = array(
            'total_records' => $total_records,
            'data' => $data
        );

        echo json_encode($output);
    }
}
