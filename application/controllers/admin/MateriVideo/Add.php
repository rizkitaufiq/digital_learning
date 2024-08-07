<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function Process()
    {
        $file_video                 = $_FILES['file_video'];

        $config['upload_path']		= 'upload/materi/video';

		$config['allowed_types']	= 'mp4';

		$this->upload->initialize($config);

		$this->upload->do_upload('file_video');

        $file_video = $this->upload->data('file_name');

        $data = array(

            "judul"         => $this->input->post('judul'),

            "file_video"    => $file_video,

        );

        $this->db->insert('materi_video', $data);
        redirect('Admin/MateriVideo/Page');
    }
}
