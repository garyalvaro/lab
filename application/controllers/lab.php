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
		$this->data['users'] = $this->lab_model->getAllUsers();
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

        public function faq()
	{
		$this->load->view('faq/index');
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
                                        'level_asli' => $level,
                                        'nim'=>$nim,
                                        'nama'=>$nama,
                                        'logged_in'=>true
                                );
                                if($user_data['level']=='1'){
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login </b>');
                                	redirect('Dashboard');
                                }
                                elseif($user_data['level']=='2'){
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login</b>');
                                	redirect('Dashboard');
                                }
                                else {
                                	$this->session->set_userdata($user_data);
                                	$this->session->set_flashdata('login_success', '<b class="text-success">Anda Berhasil Login </b>');
                                        redirect('Dashboard');
                                }

                        }
                        else
                        {
                                $this->session->set_flashdata('login_failed', '<b class="text-danger">NIM atau Password Anda salah.</b>');
                                redirect('');
                        }
                }
        }
        
        public function gantilevel()
        {
                $level_baru = $this->input->post('level_baru');
                $this->session->set_userdata(['level' => $level_baru]);
                $this->session->set_flashdata('ganti_level'.$level_baru,'ganti_level'.$level_baru);
                redirect('Dashboard');
        }

	public function register()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[9]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('konf_pass', 'Konfirmasi Password', 'trim|required|min_length[6]|matches[pass]');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('register1', $this->data);
		}
		else
		{
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

			$data = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input-> post('email'),
				'pass' => $this->input->post('pass'),
				'level' => '0',
				'code' => $code,
				'active' => false
			);
                        
			if (!$this->lab_model->cekNim($data['nim']))
			{
                                $subject = "Verifikasi Akun";
                                $mailContent = $this->load->view('template/email_verifikasi', $data, TRUE);
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $mailTo = $data['email'];
                                $mailFromId = "LaboratoriumTI";
                                $mailFromName = "LaboratoriumTI";

                                //sending email
                                if(sendMail($subject, $mailContent, $mailTo, $mailFromId, $mailFromName)){
                                        $this->session->set_flashdata('message','Activation code sent to email');
                                }
                                else{
                                        $this->session->set_flashdata('message', $this->email->print_debugger());
                                }
                                $this->lab_model->create_user($data);
                                redirect('lab/register', $data);
                        }


			// 	$this->lab_model->create_user($data);
			// 	$this->session->set_flashdata('berhasil_regis','<b class="text-success">Registrasi Berhasil, Silakan Login.</b>');
			// 	redirect('', $data);
			// }
			else
			{
				$this->session->set_flashdata('sudah_ada', '<b class="text-danger">NIM sudah ada.</b>');
				redirect('lab/register');
			}
		}
	}

	public function activate(){
		$nim =  $this->uri->segment(3);
		$code = $this->uri->segment(4);

		//fetch user details
		$data = $this->lab_model->getUser($nim);

		//if code matches
		if($data['code'] == $code){
			//update user active status
			$data['active'] = true;
			$query = $this->lab_model->activate($data, $nim);

			if($query){
				$this->session->set_flashdata('message', 'User activated successfully');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

		redirect('lab/index');

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
        
        public function bg()
        {
                $config['upload_path']       = './assets/luis/img/';
                $config['allowed_types']    = 'jpg';
                $config['file_name']            = 'banner-bg';
                $config['overwrite']		= true;
                $config['max_size']             = 5120; // 5MB
                
                $this->load->library('upload', $config);
                if ( !$this->upload->do_upload('bg_image') )
                {
                        $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                        redirect('');
                }
                redirect('', 'refresh:5');
        }

}