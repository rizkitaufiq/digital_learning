<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MateriVideo_model');
    }

    public function Process($id_video)
    {

        $data     = $this->MateriVideo_model->Get_MateriVideo_ID($id_video)->result();

        foreach ($data as $file) {

            $file_video = $file->file_video;
        }
        $param  = 'upload/materi/video/' . $file_video;
        force_download($param, NULL);

        redirect('Admin/MateriVideo/Page');
    }
}
