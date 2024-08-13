<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('login');
		}
		$this->load->view('admin/materi/latihansoal/add');
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

		);

		$this->db->insert('latihan_soal', $data);

		redirect('Admin/Materi/LatihanSoal/Page');
	}
}
