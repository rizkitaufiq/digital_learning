<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriTeks_model');
        $this->load->model('ProgresBelajar_model');
    }

    public function index($id_materi)
    {
        $id_siswa                 = $this->session->userdata('id_siswa');

        $param['visit']           = $this->ProgresBelajar_model->Get_Progres_Check_Data($id_siswa, $id_materi)->result();

        $param['data'] = $this->MateriTeks_model->Get_Materi_Detail_ID($id_materi)->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/detail', $param);
    }

    public function Visit()
    {
        $id_materi = $this->input->post('id_materi');

        $id_siswa                     = $this->session->userdata('id_siswa');

        $progres_check_data           = $this->ProgresBelajar_model->Get_Progres_Check_Data($id_siswa, $id_materi)->result();

        $bab                          = $this->MateriTeks_model->Get_Materi_Detail_ID($id_materi)->result();

        foreach ($bab as $item) {

            $bab     = $item->bab_id;
        }

        if (empty($progres_check_data)) {

            $data = array(

                "tanggal"       => date('y-m-d'),

                "waktu"         => date('H:i:s'),

                "persentase"    => +10,

                "siswa_id"      => $id_siswa,

                "materi_id"     => $id_materi,

                "bab_id"        => $bab,

            );

            $this->db->insert('progres_belajar', $data);
        }

        redirect('Siswa/Materi/Page');
    }
}
