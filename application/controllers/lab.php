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
		$this->load->view('index');
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
                        redirect('lab/index');
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
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
                                	redirect('lab/aslab');
                                	// echo "aku mahasiswa";
                                }
                                elseif($user_data['level']=='2'){
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
                                	redirect('lab/bph');
                                	// echo "aku mahasiswa";
                                }
                                else {
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
                                	//redirect('lab/index');
                                        redirect('Kelas/create');
                                }

                        }
                        else
                        {
                                $this->session->set_flashdata('login_failed', '<b class="text-danger">Anda gagal login</b>');
                                redirect('lab/index');
                        }
                }
        }

	// public function login1()
	// {
	// 	$this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[9]');
	// 	$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]');
	// 	if($this->form_validation->run()==FALSE)
	// 	{
	// 		// $data=array('errors'=>validations_errors());
	// 		// $this->session->set_flashdata($data);
	// 		// redirect('lab/index');
	// 		echo "<script>alert('terjadi kesalahan');</script>";
	// 		$this->load->view('index');
	// 	}
	// 	else
	// 	{
	// 		$nim = $this->input->post('nim');
	// 		$pass = $this->input->post('pass');
	// 		// $nama = $this->input->post('nama');
	// 		$level = $this->lab_model->cek_level($nim, $pass);
	// 		if($nim)
	// 		{
	// 			$user_data=array(
	// 				'nim'=>$nim,
	// 				'level'=>$level,
	// 				// 'nama'=>$nama,
	// 				'logged_in'=>true
	// 			);
	// 			$this->session->set_userdata($user_data);
	// 			$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
	// 			redirect('lab/index');
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('login_failed', '<b class="text-danger">Anda Gagal Login</b>');
	// 			redirect('lab/index');
	// 		}
	// 	}
	// }

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
			$this->load->view('register');
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
				redirect('lab/index', $data);
			}
			else
			{
				$this->session->set_flashdata('sudah_ada', '<b class="text-danger">Username sudah ada</b>');
				redirect('lab/register');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('lab/index');
	}

}