<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
        }
        
        public function index()
        {
                $data['title'] = 'Dashboard';
                $data['subtitle'] = 'Dashboard';
                $nim=$this->session->userdata('nim');
                $data['ada']=$this->Rekrut_model->ada($nim);
                $this->load->view('dashboard/index', $data);
        }
        
}

?>