<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bab_model');
        $this->load->model('MateriTeks_model');
    }

    public function Process()
    {
        $id_materi        = $this->input->post('id_materi');

        $file_materi       = $this->MateriTeks_model->Get_MateriTeks_ID($id_materi)->result();

        $isi                = $_FILES['isi'];

        $config['upload_path']        = 'upload/materi/teks';

        $config['allowed_types']    = 'pdf';

        $this->upload->initialize($config);

        $this->upload->do_upload('isi');

        $isi = $this->upload->data('file_name');

        foreach ($file_materi as $item) {

            if ($isi != "") {

                if ($file_materi) {
                    $file_path = 'upload/materi/teks/' . $item->isi;

                    unlink($file_path);

                    $data = array(

                        "judul"         => $this->input->post('judul'),

                        "isi"           => $isi,

                        "penjelasan"         => $this->input->post('penjelasan'),

                        "bab_id"         => $this->input->post('bab_id'),

                    );
                }
            } else {

                $data = array(

                    "judul"         => $this->input->post('judul'),

                    "penjelasan"         => $this->input->post('penjelasan'),

                    "bab_id"         => $this->input->post('bab_id'),

                );
            }
        }

        $this->db->where('id_materi', $id_materi);
        $this->db->update('materi_teks', $data);

        echo "<script>alert('Materi Berhasil Diubah !');history.go(-1);</script>";
    }
}
