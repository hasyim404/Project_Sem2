<?php
    class lowongan_model extends CI_Model {

        public function detail($id = NULL){
            $query = $this->db->get_where('lowongan', array('id' => $id))->row();
            return $query;
        }
    
    }
?>