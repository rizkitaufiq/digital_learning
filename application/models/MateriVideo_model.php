<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriVideo_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function Get_MateriVideo($limit, $offset){
        $this->db->from('materi_video');
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function Get_Total_MateriVideo(){
        return $this->db->count_all_results('materi_video');
	
	}

    public function Get_MateriVideo_ID($id_video) {
        $this->db->where('id_video', $id_video);
        return $this->db->get('materi_video')->row();
    }

}
