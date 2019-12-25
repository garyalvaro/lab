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
                                
                if($this->session->userdata('level')==2)
                        $data['kelas'] = $this->Kelas_model->view();
                elseif($this->session->userdata('level')==1)
                {
                    $id_aslab = $this->Kelas_model->get_id_aslab($nim);
                    $data['kelas'] = $this->Kelas_model->vieww($id_aslab);
                }
                else
                        $data['kelas'] = $this->Kelas_model->viewww($nim);
                                
                $data['title'] = 'Kelas';
                $data['subtitle'] = 'Kelas';
                if($this->session->userdata('level')==0)
                        $this->load->view('kelas/index-mhs', $data);
                else
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
                        
                        if($this->Kelas_model->create_kelas($data) && $this->Kelas_model->create_nilai($data))
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
        
        public function enroll()
        {
                $data['title'] = 'Gabung ke Kelas';
                $data['subtitle'] = 'Gabung ke Kelas';
                $this->load->view('kelas/enroll', $data);
                
                if($this->input->post('submit'))
                {
                        $data = array(
                                'kode_enroll'=>$this->input->post('kode_enroll'),
                                'nim'=>$this->session->userdata('nim')
                        );
                        
                        if($this->Kelas_model->enroll_mhs($data))
                        {
                                $this->session->set_flashdata('add_success','add success');
                                redirect("kelas/index");
                        }
                        else
                        {
                                $this->session->set_flashdata('add_failed','add failed');
                                redirect("kelas/enroll");
                        }
                }
                
        }
        
        public function view($id_kelas)
        {
                $data['title'] = 'Detail Kelas';
                $data['subtitle'] = 'Detail Kelas';
                $data['detail'] = $this->Kelas_model->view_kelas($id_kelas);
                //$data['nilai'] = $this->Kelas_model->view_nilai($id_kelas);
                $this->load->view('Kelas/detail', $data);
        }
        
        public function tambah_mhs($id_kelas)
        {
                $data['title'] = 'Tambah Mahasiswa';
                $data['subtitle'] = 'Tambah Mahasiswa';
                $data['user'] = $this->lab_model->view_user();
                
                if($this->input->post())
                {

                }
                $this->load->view('kelas/tambah_mahasiswa', $data);
        }
        
        public function delete()
        {
                $id_kelas = $this->input->get('id_kelas');
                $this->Kelas_model->delete_kelas($id_kelas);
                return TRUE;
        }
        
        public function view_aslab_byid($id_aslab)
        {
                $data['nama_aslab'] = $this->Kelas_model->get_namaaslab($id_aslab);
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