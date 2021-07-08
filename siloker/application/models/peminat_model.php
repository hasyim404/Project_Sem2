<?php
    class peminat_model extends CI_Model {

        public function update($data){
            $sql =  "UPDATE peminat_lowongan SET nama=?,alamat=?,kontak=?,telpon=?,email=?,web=?,bidang_usaha_id=?,sektor_usaha_id=? WHERE  id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM peminat_lowongan WHERE id=?";
            $this->db->query($sql, $data);
        }
    
    }
?>