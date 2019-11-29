<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller{
	public function index(){
		$data['title'] = 'X';
        $data['subtitle'] = 'X';
		$this->load->view('template/vutama1',$data);
	}
}
?>