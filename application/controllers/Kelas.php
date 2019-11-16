<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
        }
        
        public function index()
        {
                $data['kelas'] = $this->Kelas_model->view();
                                
                $data['title'] = 'Kelas';
                $data['subtitle'] = 'Kelas';
                $this->load->view('template/header', $data);
                $this->load->view('kelas/index', $data);
                $this->load->view('template/footer');
        }
        
        public function create()
        {
               if($this->input->post('submit'))
                {
                        $data = array(
                                'nama_kelas'=>$this->input->post('nama_kelas'),
                                'kom'=>$this->input->post('kom'),
                                'tahun_ajaran'=>$this->tahun_ajaran()
                        );
                        
                        if($this->Kelas_model->create_tabel_kelas($data))
                        {
                                $this->session->set_flashdata('kelas_create','<b class="text-success">Kelas berhasil ditambah</b>');
                                redirect("kelas/index");
                        }
                } 
                
                $data['title'] = 'Tambah Kelas';
                $data['subtitle'] = 'Tambah Kelas';
                $this->load->view('template/header', $data);
                $this->load->view('kelas/tambah_kelas');
                $this->load->view('template/footer');
        }
        
        public function tahun_ajaran()
        {
                if(date("m") > 7)
                        $ta = date("Y")."/".(date("Y")+1);
                else
                        $ta = (date("Y")-1)."/".date("Y");
                return $ta;
        }
}

?>