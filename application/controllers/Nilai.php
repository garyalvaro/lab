<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller 
{
	public function index()
	{
                $data['title'] = 'NILAI';
                $data['subtitle'] = 'Nilai';
                $this->load->view('template/header', $data);
                $this->load->view('nilai/index');
                $this->load->view('template/footer');
	}
        
        public function detail_nilai($kelas)
        {
                $data['title'] = 'NILAI';
                $data['subtitle'] = 'Nilai';
                $data['nilai'] = $this->Nilai_model->get_general($kelas);
                $this->load->view('template/header', $data);
                $this->load->view('nilai/detail_nilai');
                $this->load->view('template/footer');
        }
}
