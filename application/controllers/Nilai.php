<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
        }
        
	public function index()
	{
                $data['title'] = 'NILAI';
                $data['subtitle'] = 'Nilai';
	}
        
        public function add($id_kelas)
        {
                $data['title'] = 'NILAI';
                $data['subtitle'] = 'Nilai';
                $data['detail'] = $this->Kelas_model->view_kelas($id_kelas);
                
                if($this->input->get())
                {
                        $nim = $this->input->get('nim');
                        $nilai = $this->input->get('nilai');
                        $this->Nilai_model->update_nilai($nim, $nilai, $id_kelas);
                        redirect('Kelas/view/'.$id_kelas);
                }
                $this->load->view('nilai/tambah_nilai', $data);
        }
}
