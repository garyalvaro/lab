<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bph extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
        }
        
        public function index()
        {
                $data['title'] = 'BPH';
                $data['subtitle'] = 'Badan Pengawas Harian (BPH) Laboratorium';
                $this->load->view('bph/index', $data);
        }
        
}

?>