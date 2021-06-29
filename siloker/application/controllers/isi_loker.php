<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class isi_loker extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('isiloker_model', 'model');
    }

    public function index(){
        
        $data['data_mitra'] = $this->model->getmitraAll();
        $this->load->view('layouts/header');
        $this->load->view('isi_loker/index',$data);
        $this->load->view('layouts/footer');
        
    }
    
}

?>