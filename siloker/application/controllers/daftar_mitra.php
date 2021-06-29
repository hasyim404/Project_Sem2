<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class daftar_mitra extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('daftar_mitra/index');
        $this->load->view('layouts/footer');
    }

    public function form_mitra(){
        $this->load->view('layouts/header');
        $this->load->view('daftar_mitra/form_mitra');
        $this->load->view('layouts/footer');
    }
}

?>