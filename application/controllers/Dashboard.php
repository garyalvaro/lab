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
                $this->load->view('dashboard/index', $data);
        }
        
}

?>