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
                
                $data['user'] = $this->lab_model->view_user();
                
                $this->load->view('bph/index', $data);
        }
        
        public function edit($nim)
        {
                if($this->input->post('submit'))
                {
                        $data = array(
                                "nama" => $this->input->post('nama'),
                                "level" => $this->input->post('level'),
                                "email" => $this->input->post('email'),
                                "pass" => $this->input->post('pass')
                        );
                        $this->lab_model->edit_user($nim, $data);
                        $this->session->set_flashdata('edit_success','edit_success');
                        redirect('Bph');
                }
                else
                {
                        $data['title'] = "Edit User";
                        $data['user'] = $this->lab_model->view_user_byid($nim);
                        $this->load->view('bph/form_edit', $data);        
                }                
        }
        
        public function delete($nim)
        {
                $this->lab_model->delete_user($nim);
                $this->session->set_flashdata('delete_success','delete_success');
                redirect('Bph');
        }
        
}

?>