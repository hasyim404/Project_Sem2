<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class home extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('home/index');
        $this->load->view('layouts/footer');
    }
}

?>