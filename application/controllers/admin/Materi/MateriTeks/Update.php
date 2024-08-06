<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Bab_model');
		$this->load->model('MateriTeks_model');
    }

    public function Process()
    {
        $id        = $this->input->post('id_materi');

        $data = array(

            "judul"         => $this->input->post('judul'),

            "isi"           => $this->input->post('isi'),

            "penjelasan"    => $this->input->post('penjelasan'),

            "bab_id"        => $this->input->post('bab_id'),

        );

        $this->db->where('id_materi', $id);
        $this->db->update('materi_teks', $data);
        
        $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url('Admin/Materi/MateriTeks/MateriBab');
        redirect($referrer);
    }
}
