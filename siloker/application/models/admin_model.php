<?php
    class admin_model extends CI_Model {

        public function getlokerAll(){
            $query = $this->db->get('lowongan');
            return $query->result();
        }

        public function getById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query->row();
        }
            
    }
?>