<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class lowongan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model','admin');
        $this->load->model('lowongan_model','lowongan');
    }

    public function index(){
        $data['data_loker']=$this->admin->getlokerAll();

        $this->load->view('layouts/header');
        $this->load->view('lowongan/index',$data);
        $this->load->view('layouts/footer');
    }

    public function detail($id){
        $obj_detail = $this->lowongan->detail($id);
        $data['objdetail'] = $obj_detail;
        
        $this->load->view('layouts/header');
        $this->load->view('lowongan/detail',$data);
        $this->load->view('layouts/footer');
    }

}

?>