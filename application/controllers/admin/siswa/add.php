<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('login');
		}
		$this->load->view('Admin/Siswa/Add');
	}

	public function Process()
	{

		$this->form_validation->set_message('required', 'harap isi {field}.');
        $this->form_validation->set_message('min_length', 'minimal panjang {field} {param}');
        $this->form_validation->set_message('is_unique', '{field} sudah tersedia');

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nisn', 'nisn', 'required|is_unique[siswa.nisn]');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('agama', 'agama', 'required');
		$this->form_validation->set_rules('alamat', 'lamat', 'required');
		$this->form_validation->set_rules('username', 'username', 'required|is_unique[siswa.username]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/siswa/add');
		
		} else {

			$data = array(

				"nama"    				=> $this->input->post('nama'),

				"nisn"	    			=> $this->input->post('nisn'),

				"kelas"	    			=> $this->input->post('kelas'),

				"tempat_lahir"			=> $this->input->post('tempat_lahir'),

				"tanggal_lahir"	        => $this->input->post('tanggal_lahir'),

				"jenis_kelamin"			=> $this->input->post('jenis_kelamin'),

				"agama"					=> $this->input->post('agama'),

				"alamat"				=> $this->input->post('alamat'),

				"username"				=> $this->input->post('username'),

				"password"				=> $this->input->post('password'),

			);

			$this->db->insert('siswa', $data);

			redirect('Admin/Siswa/Page');
		}
	}
}
