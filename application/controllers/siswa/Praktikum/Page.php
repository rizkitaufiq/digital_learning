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
        $start                    = $this->uri->segment(4);
        $limit                    = 5;

        $config['full_tag_open'] = '<div class="pagination mt-2">';
        $config['full_tag_close'] = '</div>';

        $config['first_link']      = 'First Page';
        $config['first_tag_open'] = '<button class="btn-paginate m-1">';
        $config['first_tag_close'] = '</button>';

        $config['last_link']     = 'Last';
        $config['last_tag_open'] = '<button class="btn-paginate m-1">';
        $config['last_tag_close'] = '</button>';

        $config['next_link']     = 'Next';
        $config['next_tag_open'] = '<button class="btn-paginate m-1">';
        $config['next_tag_close'] = '</button>';

        $config['prev_link']     = 'Prev Page';
        $config['prev_tag_open'] = '<button class="btn-paginate m-1">';
        $config['prev_tag_close'] = '</button>';

        $config['cur_tag_open']  = '<button class="btn-paginate m-1">';
        $config['cur_tag_close'] = '</button>';

        $config['num_tag_open']  = '<button class="btn-paginate m-1">';
        $config['num_tag_close'] = '</button>';

        $config['base_url']      = base_url('Admin/MateriVideo/Page');

        $config['total_rows']    = $this->Praktikum_model->Get_Total_Praktikum();
        $config['per_page']      = $limit;

        $id_siswa                 = $this->session->userdata('id_siswa');

        $param['data']           = $this->Praktikum_model->Get_Praktikum($id_siswa, $config['per_page'], $start)->result();

        $this->pagination->initialize($config);
        $param['links']            = $this->pagination->create_links();


        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/praktikum/index', $param);
    }
}
