<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class lowongan extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('lowongan/index');
        $this->load->view('layouts/footer');
    }

    public function detail1(){
        $this->load->view('layouts/header');
        $this->load->view('lowongan/detail1');
        $this->load->view('layouts/footer');
    }

    public function detail2(){
        $this->load->view('layouts/header');
        $this->load->view('lowongan/detail2');
        $this->load->view('layouts/footer');
    }
}

?>