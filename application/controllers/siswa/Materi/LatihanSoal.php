<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LatihanSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bab_model');
        $this->load->model('LatihanSoal_model');
        $this->load->model('Nilai_model');
    }

    public function index()
    {
        $param['data'] = $this->Bab_model->Get_Bab()->result();
        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }
        $this->load->view('siswa/materi/latihan_soal', $param);
    }

    public function Soal($id_bab)
    {
        $id_siswa      = $this->session->userdata('id_siswa');

        $status_tes    = $this->Nilai_model->Get_Status_Tes_ID($id_siswa, $id_bab)->result();

        foreach ($status_tes as $item) {
            $status = $item->status_tes;
        }

        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }

        if (!empty($status) && $status > 1) {
            echo "<script>alert('Kesempatan Mengerjakan soal bab ini sudah habis !');history.go(-1);</script>";
        }

        if (!empty($status)) {

            $param['data'] = $this->LatihanSoal_model->Get_SoalBab_ID($id_bab);
            $param['status_tes'] = $status;

            $this->load->view('siswa/materi/soal', $param);
        }

        if (empty($status)) {
            $param['data'] = $this->LatihanSoal_model->Get_SoalBab_ID($id_bab);

            $this->load->view('siswa/materi/soal', $param);
        }
    }

    public function Add()
    {
        $id_siswa   = $this->session->userdata('id_siswa');
        $jawaban    = $this->input->post();
        $skor       = 0;

        foreach ($jawaban as $id_soal => $jawaban_siswa) {

            $this->db->where('id_soal', $id_soal);
            $query = $this->db->get('latihan_soal');
            $soal = $query->row();

            $id_bab = $soal->bab_id;

            $benar_salah = ($soal->jawaban == $jawaban_siswa) ? 1 : 0;
            $skor += $benar_salah;


            $data = array(

                "siswa_id"         => $id_siswa,

                "bab_id"           => $id_bab,

                "skor"             => $skor,

                "status_tes"       => +1,

            );
        }


        $this->db->insert('nilai_latihan_soal', $data);

        $id_nilai =  $this->db->insert_id();

        $total_soal = $this->LatihanSoal_model->Get_Count_Latihan_Soal($id_bab);

        $salah = $total_soal - $skor;

        $this->db->where('id_nilai', $id_nilai);
        $query = $this->db->get('nilai_latihan_soal');
        $latihan_soal = $query->row();

        $status_tes  = $latihan_soal->status_tes;

        $param['id_nilai'] = $id_nilai;
        $param['id_bab']   = $id_bab;
        $param['salah'] = $salah;
        $param['benar'] = $skor;
        $param['hasil'] = $skor * 10;
        $param['status_tes'] = $status_tes;
        $param['jawaban_siswa'] = $jawaban_siswa;
        $param['data']  = $this->LatihanSoal_model->Get_SoalBab_ID($id_bab);

        echo "<script>alert('Jawaban Berhasil Di Kirim !');</script>";

        $this->load->view('siswa/materi/hasil', $param);
    }

    public function Repeat($id_bab)
    {
        $id_siswa      = $this->session->userdata('id_siswa');

        if ($this->session->userdata('role') != 'siswa') {
            redirect('login');
        }


        $param['data'] = $this->LatihanSoal_model->Get_SoalBab_ID($id_bab);

        $this->load->view('siswa/materi/ulangi', $param);
    }

    public function AddRepeat()
    {
        $id_bab        = $this->input->post('bab_id');
        $id_siswa      = $this->session->userdata('id_siswa');

        $nilai_latihan_soal = $this->Nilai_model->Get_Nilai_Latihan_Soal_ID($id_siswa, $id_bab)->result();

        foreach ($nilai_latihan_soal as $item) {
            $id_nilai  = $item->id_nilai;
            $status_tes = $item->status_tes;
        }

        $jawaban    = $this->input->post();
        $skor       = 0;

        foreach ($jawaban as $id_soal => $jawaban_siswa) {

            $this->db->where('id_soal', $id_soal);
            $query = $this->db->get('latihan_soal');
            $soal = $query->row();

            $benar_salah = ($soal->jawaban == $jawaban_siswa) ? 1 : 0;
            $skor += $benar_salah;


            $data = array(

                "skor"             => $skor,

                "status_tes"       => $status_tes + 1,

            );
        }

        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai_latihan_soal', $data);

        echo "<script>alert('Jawaban Berhasil Di Kirim !');</script>";
        redirect('Siswa/Materi/LatihanSoal');
    }

    public function Save($id_nilai)
    {
        $nilai_latihan_soal = $this->LatihanSoal_model->Get_Nilai_Latihan_Soal_ID($id_nilai)->result();

        foreach ($nilai_latihan_soal as $item) {
            $status_tes = $item->status_tes + 1;
        }

        $data = array(

            'status_tes' => $status_tes,

        );

        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai_latihan_soal', $data);

        echo "<script>alert('Jawaban Berhasil Di Kirim !');</script>";
        redirect('Siswa/Materi/LatihanSoal');
    }
}
