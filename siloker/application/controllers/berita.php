<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class berita extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('berita/index');
        $this->load->view('layouts/footer');
    }

    public function berita1(){
        $this->load->view('layouts/header');
        $this->load->view('berita/berita1');
        $this->load->view('layouts/footer');
    }

    public function berita2(){
        $this->load->view('layouts/header');
        $this->load->view('berita/berita2');
        $this->load->view('layouts/footer');
    }

    public function berita3(){
        $this->load->view('layouts/header');
        $this->load->view('berita/berita3');
        $this->load->view('layouts/footer');
    }

    public function berita4(){
        $this->load->view('layouts/header');
        $this->load->view('berita/berita4');
        $this->load->view('layouts/footer');
    }
}

?>