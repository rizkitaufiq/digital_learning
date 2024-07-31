<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->model('Siswa_model');
        $this->load->library('session');
    }

    public function index()
	{
		if ($this->session->userdata('role') != 'admin' || $this->session->userdata('role') != 'siswa' ) {
            $this->load->view('index');
        }
	
	}

	public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Check Siswa
        $siswa = $this->Siswa_model->Get_Siswa($username, $password);
        if ($siswa) {
            $this->session->set_userdata('id_siswa', $siswa['id_siswa']);
            $this->session->set_userdata('username', $siswa['username']);
            $this->session->set_userdata('role', 'siswa');
            redirect('siswa/beranda/page');
        }

        // Check admin
        $admin = $this->Admin_model->Get_Admin($username, $password);
        if ($admin) {
            $this->session->set_userdata('id_admin', $admin['id_admin']);
            $this->session->set_userdata('username', $admin['username']);
            $this->session->set_userdata('role', 'admin');
            redirect('admin/beranda/page');
        }

        // If no match found
        $this->session->set_flashdata('error', 'Invalid username or password');
        redirect('login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
