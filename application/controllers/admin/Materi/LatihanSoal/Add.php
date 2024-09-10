<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bab_model');
		$this->load->model('LatihanSoal_model');
	}


	public function index()
	{
		$param['bab_id']  = $this->Bab_model->Get_Bab()->result();
		if ($this->session->userdata('role') != 'admin') {
			redirect('login');
		}
		$this->load->view('admin/materi/latihansoal/add', $param);
	}

	public function Process()
	{
		$data = array(

			"soal"    				=> $this->input->post('soal'),

			"opsi_a"	   			=> $this->input->post('opsi_a'),

			"opsi_b"	   			=> $this->input->post('opsi_b'),

			"opsi_c"				=> $this->input->post('opsi_c'),

			"opsi_d"		        => $this->input->post('opsi_d'),

			"jawaban"				=> $this->input->post('jawaban'),

			"format"				=> $this->input->post('format'),

			"bab_id"				=> $this->input->post('bab_id'),

		);

		$this->db->insert('latihan_soal', $data);
		echo "<script>alert('Soal Berhasil Di Tambahkan !');</script>";

		$start					= $this->uri->segment(5);
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

		$config['base_url']		= base_url('Admin/Materi/LatihanSoal/Page');

		$config['total_rows']	= $this->LatihanSoal_model->Get_Total_LatihanSoal();
		$config['per_page']		= $limit;

		$param['data']			= $this->LatihanSoal_model->Get_LatihanSoal($config['per_page'], $start)->result();

		$this->pagination->initialize($config);
		$param['links']			= $this->pagination->create_links();

		$this->load->view('admin/body/header');
		$this->load->view('admin/materi/latihansoal/index', $param);
	}
}
