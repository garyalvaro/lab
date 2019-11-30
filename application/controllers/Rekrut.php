<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekrut extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'PEREKRUTAN';
		$data['subtitle'] = 'Perekrutan';
		$this->load->view('rekrut/index1', $data);
	}
	public function view_rekrut()
	{
		$data['rekrut'] = $this->Nilai_model->get_general('rekrut_aslab');
		$data['title'] = 'Rekrut';
                $data['subtitle'] = 'Rekrut';
                $this->load->view('rekrut/view_rekrut', $data);

	}
	public function detail($nim)
	{
		$dataMahasiswa = $this->Nilai_model->get_by_id_general('rekrut_aslab','nim',$nim);
		if ($dataMahasiswa == TRUE) {
			$dataMahasiswa=json_encode($dataMahasiswa,JSON_PRETTY_PRINT);
			echo $dataMahasiswa;
		}
		else
		{
			echo "";
		}
	}

	public function daftarAslab()
	{
		$data=array(
			'nim' => $this->input->post('nim'),
			'matkul1' => $this->input->post('matkul-1'),
			'matkul2' => $this->input->post('matkul-2'),
			'contact' => $this->input->post('contact'),
			'alasan' => $this->input->post('alasan'),
			'status'=>'0'
		);
		$ip1_1=$this->input->post('ip1-1');
		$ip1_2=$this->input->post('ip1-2');
		$ip2_1=$this->input->post('ip2-1');
		$ip2_2=$this->input->post('ip2-2');
		$data['ip1']=($ip1_1+$ip1_2)/2;
		$data['ip2']=($ip2_1+$ip2_2)/2;
		echo $data['ip1']."<br>";
		echo $data['ip2'];

		//setting konfigurasi upload
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'pdf';
		$config['file_name'] = $data['nim'].'_1';

		// load library upload
		$this->load->library('upload', $config);
		
		$this->upload->do_upload('cv');
		$file1 = $this->upload->data();
		$error = $this->upload->display_errors();
		
		// menampilkan pesan error
		print_r($error);
		echo "<pre>";
		print_r($file1);
		echo "</pre>";
		$data['cv']=$file1['file_name'];
		echo $data['cv'];

		 
		// script uplaod file kedua
		$this->upload->do_upload('surat');
		$file2 = $this->upload->data();
		$error = $this->upload->display_errors();
		// menampilkan pesan error
		print_r($error);
		$data['lamaran']=$file2['file_name'];
		echo $data['lamaran'];
		$data['ip1']=($ip1_1+$ip1_2)/2;
		$data['ip2']=($ip2_1+$ip2_2)/2;
		echo $data['ip1']."<br>";
		echo $data['ip2'];
		if($this->Nilai_model->create_general("rekrut_aslab",$data))
		{
			echo "berhasil";
			//redirect('rekrut/index');
		}
		else { echo "error"; }
		
		
	}
}
