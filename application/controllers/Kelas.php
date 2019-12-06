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
                $nim=$this->session->userdata('nim');
                $id_aslab = $this->Kelas_model->get_id_aslab($nim);
                
                if($this->session->userdata('level')==2)
                        $data['kelas'] = $this->Kelas_model->view();
                elseif($this->session->userdata('level')==1)
                        $data['kelas'] = $this->Kelas_model->vieww($id_aslab);
                else
                        $data['kelas'] = $this->Kelas_model->viewww($nim);
                                
                $data['title'] = 'Kelas';
                $data['subtitle'] = 'Kelas';
                $this->load->view('kelas/index', $data);
        }
        
        public function create()
        {
                $data['title'] = 'Tambah Kelas';
                $data['subtitle'] = 'Tambah Kelas';
                $data['aslab'] = $this->Kelas_model->get_aslab($this->tahun_ajaran());
                $data['matkul'] = $this->Kelas_model->get_matkul();
                $this->load->view('kelas/tambah_kelas', $data);
                
               if($this->input->post('submit'))
                {
                        $data = array(
                                'nama_kelas'=>$this->input->post('nama_kelas'),
                                'kom'=>$this->input->post('kom'),
                                'tahun_ajaran'=>$this->tahun_ajaran(),
                                'id_aslab'=>$this->input->post('id_aslab')
                        );
                        
                        if($this->Kelas_model->create_tabel_kelas($data))
                        {
                                $this->session->set_flashdata('add_success','add success');
                                redirect("kelas/index");
                        }
                        else
                        {
                                $this->session->set_flashdata('add_failed','add failed');
                                redirect("kelas/index");
                        }
                                
                } 
        }
        
        public function view($id_kelas)
        {
                $data['title'] = 'Detail Kelas';
                $data['subtitle'] = 'Detail Kelas';
                $data['detail'] = $this->Kelas_model->view_kelas($id_kelas);
                $this->load->view('Kelas/detail', $data);
        }
        
        public function tahun_ajaran()
        {
                if(date("m") > 7)
                        $ta = date("Y")."/".(date("Y")+1);
                else
                        $ta = (date("Y")-1)."/".date("Y");
                return $ta;
        }

        public function pengumuman()
        {
            // $tes=$this->session->userdata('nim');
            $data['tes'] = $this->Kelas_model->pengumuman();
            $this->load->view('kelas/pengumuman',$data);
        }
}

?>