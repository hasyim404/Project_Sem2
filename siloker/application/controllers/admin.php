<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class admin extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model','admin');
        $this->load->model('isiloker_model', 'mitra');

    }
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('admin/index');
        $this->load->view('layouts/footer');
    }

    public function kelola_loker(){
        $data['data_loker']=$this->admin->getlokerAll();
        $data['data_mitra'] = $this->mitra->getmitraAll();

        $this->load->view('layouts/header');
        $this->load->view('admin/kelola_loker',$data);
        $this->load->view('layouts/footer');
    }

        public function submit_loker(){
            $_deskripsi_pekerjaan   =   $this->input->post('deskripsi_pekerjaan');
            $_tanggal_akhir         =   $this->input->post('tanggal_akhir');
            $_mitra_id              =   $this->input->post('mitra_id');
            $_email                 =   $this->input->post('email');

            $data = array(  'deskripsi_pekerjaan'   =>  $_deskripsi_pekerjaan,
                            'tanggal_akhir'         =>  $_tanggal_akhir,
                            'mitra_id'              =>  $_mitra_id,
                            'email'                 =>  $_email,
            );

            $this->admin->save($data);
            redirect(base_url('index.php/admin/kelola_loker'),'refresh');
        }
    
        public function edit($id){
            $obj_loker = $this->admin->getById($id);
            $data['objloker']=$obj_loker;
            $data['data_mitra'] = $this->mitra->getmitraAll();

            $this->load->view('layouts/header');
            $this->load->view('admin/edit',$data);
            $this->load->view('layouts/footer');
        }

        
        public function update(){
            $_deskripsi_pekerjaan   =   $this->input->post('deskripsi_pekerjaan');
            $_tanggal_akhir         =   $this->input->post('tanggal_akhir');
            $_mitra_id              =   $this->input->post('mitra_id');
            $_email                 =   $this->input->post('email');
            $_idedit                =   $this->input->post('idedit');

            $data = array(  'deskripsi_pekerjaan'   =>  $_deskripsi_pekerjaan,
                            'tanggal_akhir'         =>  $_tanggal_akhir,
                            'mitra_id'              =>  $_mitra_id,
                            'email'                 =>  $_email,
            );

            if (!empty($_idedit)){
                $data['id']=$_idedit;
                $this->admin->update($data);
            }else{
                $this->admin->save($data);
            }

            
            redirect(base_url('index.php/admin/kelola_loker'),'refresh');
        }

        public function delete($id){
            $data['id']=$id;
            $this->admin->delete($data);

            redirect(base_url('index.php/admin/kelola_loker'),'refresh');
        }

    public function kelola_mitra(){
        $this->load->view('layouts/header');
        $this->load->view('admin/kelola_mitra');
        $this->load->view('layouts/footer');
    }

    public function isi_berita(){
        $this->load->view('layouts/header');
        $this->load->view('admin/isi_berita');
        $this->load->view('layouts/footer');
    }

    public function daftar_berita(){
        $this->load->view('layouts/header');
        $this->load->view('admin/daftar_berita');
        $this->load->view('layouts/footer');
    }
}

?>