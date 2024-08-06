<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Bab_model');
    }

    public function index()
	{
		$param['data'] = $this->Bab_model->Get_Bab()->result();
		if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
		$this->load->view('admin/body/header');
		$this->load->view('admin/materi/materiteks/index', $param);
	}
}
