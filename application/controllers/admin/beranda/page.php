<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index()
	{
		if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
		$this->load->view('admin/beranda/index');
	}
}
