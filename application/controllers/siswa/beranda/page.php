<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('role') != 'siswa') {
			redirect('login');
		}
		$this->load->view('siswa/beranda/index');
	}
}
