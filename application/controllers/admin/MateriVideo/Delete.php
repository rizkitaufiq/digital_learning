<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MateriVideo_model');
    }

    public function Process($id_video)
	{
        $file_video = $this->MateriVideo_model->Get_MateriVideo_ID($id_video);

        if($file_video){
            $file_path = 'upload/materi/video/' . $file_video->file_video;

            if(file_exists($file_path)){
                unlink($file_path);
            }

            $id = array(
                "id_video" => $id_video
            );
    
            $this->db->delete('materi_video', $id);
            
            echo "<script>alert('Data Berhasil Dihapus !');history.go(-1);</script>";

        }


	}

}
