<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function index($id_siswa)
    {
        $param['data'] = $this->Siswa_model->Get_Siswa_ID($id_siswa)->result();

        if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
        $this->load->view('admin/siswa/update', $param);
    }

    public function Process()
    {
        $id_siswa        = $this->input->post('id_siswa');

        $nama            = $this->input->post('nama');

        $nisn            = $this->input->post('nisn');

        $kelas            = $this->input->post('kelas');

        $tempat_lahir    = $this->input->post('tempat_lahir');

        $tanggal_lahir    = $this->input->post('tanggal_lahir');

        $jenis_kelamin    = $this->input->post('jenis_kelamin');

        $agama          = $this->input->post('agama');

        $alamat          = $this->input->post('alamat');

        $username          = $this->input->post('username');

        $password          = $this->input->post('password');


        $data = array(

            "nama"          => $nama,

            "nisn"          => $nisn,

            "kelas"         => $kelas,

            "tempat_lahir"  => $tempat_lahir,

            "tanggal_lahir" => $tanggal_lahir,

            "jenis_kelamin" => $jenis_kelamin,

            "agama"         => $agama,

            "alamat"        => $alamat,

            "username"      => $username,

            "password"      => $password,
        );

        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);

        echo "<script>alert('Data Siswa Berhasil Diubah !');</script>";
        $this->load->view('admin/body/header');
        $this->load->view('admin/siswa/index');
    }
}
