<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MateriVideo_model');
    }

    public function Process()
    {
        $id_video				    = $this->input->post('id_video');

        $file_video_id              = $this->MateriVideo_model->Get_MateriVideo_ID($id_video);

        $file_video                 = $_FILES['file_video'];

        $config['upload_path']		= 'upload/materi/video';

		$config['allowed_types']	= 'mp4';

		$this->upload->initialize($config);

		$this->upload->do_upload('file_video');

        $file_video = $this->upload->data('file_name');
        
        if($file_video !=""){
            
            if($file_video_id){
                $file_path = 'upload/materi/video/' . $file_video_id->file_video;
                
                unlink($file_path);
                
                $data = array(

                    "judul"         => $this->input->post('judul'),

                    "file_video"    => $file_video,

                );

            }
        }else{

            $data = array(

                "judul"         => $this->input->post('judul'),

            );

        }
        
		$this->db->where('id_video', $id_video);
		$this->db->update('materi_video', $data);
    
        redirect('Admin/MateriVideo/Page');
    }
}
