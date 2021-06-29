<?php
    class isiloker_model extends CI_Model {

        public function getmitraAll(){
            $query = $this->db->get('mitra');
            return $query->result();
        }

        public function find_lokerById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query->row();
        }

    }
?>