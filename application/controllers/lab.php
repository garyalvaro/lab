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
		$this->load->view('faq/index.html');
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
				$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.googlemail.com',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'flameboyz2100@gmail.com', // change it to yours
		  		'smtp_pass' => 'hanyaapi', // change it to yours
		  		'smtp_username' => 'armg3295',
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
				);

				$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$data['email']."</p>
							<p>Password: ".$data['pass']."</p>
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."lab/activate/".$data['nim']."/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						";
	 		
		    	$this->load->library('email', $config);
		    	$this->email->set_newline("\r\n");
		    	$this->email->from($config['smtp_user']);
		    	$this->email->to($data['email']);
		    	$this->email->subject('Signup Verification Email');
		    	$this->email->message($message);

		    	//sending email
		    	if($this->email->send()){
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

}