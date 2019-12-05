<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lab extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('lab_model');
	}

	public function index()
	{

		$data['aslab'] = $this->lab_model->cek_aslab('aslab');
		$this->load->view('template/vutama1',$data);
	}

	public function bph()
	{
		$this->load->view('bph');
	}

	public function aslab()
	{
		$this->load->view('aslab');
	}
	
	public function login()
        {
                $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[3]');
                $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[3]');
                if($this->form_validation->run()==FALSE)
                {
                        $data=array('errors'=>validation_errors());
                        $this->session->set_flashdata($data);
                        redirect('');
                }
                else
                {
                        $nim = $this->input->post('nim');
                        $pass = $this->input->post('pass');
                        $user_id = $this->lab_model->login_user($nim, $pass);
                        $nama = $this->lab_model->get_nama($nim, $pass);
                        $level = $this->lab_model->cek_level($nim, $pass);
                        if($user_id == TRUE)
                        {
                                $user_data=array(
                                        'user_id'=>$user_id,
                                        'level' => $level,
                                        'nim'=>$nim,
                                        'nama'=>$nama,
                                        'logged_in'=>true
                                );
                                if($user_data['level']=='1'){
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login </b>');
                                	redirect('');
                                }
                                elseif($user_data['level']=='2'){
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
                                	redirect('Dashboard');
                                }
                                else {
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login </b>');
                                        redirect('');
                                }

                        }
                        else
                        {
                                $this->session->set_flashdata('login_failed', '<b class="text-danger">NIM atau Password Anda salah.</b>');
                                redirect('');
                        }
                }
        }

	public function register()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[9]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kom', 'KOM', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('konf_pass', 'Konfirmasi Password', 'trim|required|min_length[6]|matches[pass]');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('register1');
		}
		else
		{
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'kom' => $this->input->post('kom'),
				'email' => $this->input-> post('email'),
				'pass' => $this->input->post('pass'),
				'level' => '0'
			);
			if (!$this->lab_model->cekNim($data['nim']))
			{
				$this->lab_model->create_user($data);
				//redirect('');
				redirect('', $data);
			}
			else
			{
				$this->session->set_flashdata('sudah_ada', '<b class="text-danger">NIM sudah ada.</b>');
				redirect('lab/register');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}

}