<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriBab extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Bab_model');
		$this->load->model('MateriTeks_model');
    }

    public function index($id_bab)
	{
        $start					= $this->uri->segment(6);
        $limit                  = 5;

		$config['full_tag_open'] = '<div class="pagination mt-2">';
		$config['full_tag_close'] = '</div>';

		$config['first_link']	  = 'First Page';
		$config['first_tag_open'] = '<button class="btn-paginate m-1">';
		$config['first_tag_close'] = '</button>';

		$config['last_link']	 = 'Last';
		$config['last_tag_open'] = '<button class="btn-paginate m-1">';
		$config['last_tag_close'] = '</button>';

		$config['next_link']	 = 'Next';
		$config['next_tag_open'] = '<button class="btn-paginate m-1">';
		$config['next_tag_close'] = '</button>';

		$config['prev_link']	 = 'Prev Page';
		$config['prev_tag_open'] = '<button class="btn-paginate m-1">';
		$config['prev_tag_close'] = '</button>';

		$config['cur_tag_open']  = '<button class="btn-paginate m-1">';
		$config['cur_tag_close'] = '</button>';

		$config['num_tag_open']  = '<button class="btn-paginate m-1">';
		$config['num_tag_close'] = '</button>';

		$config['base_url']		= base_url('Admin/Materi/MateriTeks/MateriBab/' . $id_bab);

		$config['total_rows']	= $this->MateriTeks_model->Get_Total_Bab_ID($id_bab);
		$config['per_page']		= $limit;

		$param['data']			= $this->MateriTeks_model->Get_Materi_ID($id_bab, $config['per_page'], $start)->result();
        $param['data_bab']      = $this->Bab_model->Get_Bab_ID($id_bab)->result();
		

		$this->pagination->initialize($config);
		$param['links']			= $this->pagination->create_links();

		if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
		$this->load->view('admin/body/header');
		$this->load->view('admin/materi/materiteks/materi_bab', $param);
		}
}
