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

		function konfirmasi($id)
	{
		$data['status']=1;
		$data1['level']=1;

		$this->Rekrut_model->confirm($id,$data,$data1);
		redirect('Rekrut/view_rekrut','refresh');
	}

	function batalkonfirmasi($id)
	{
		$data['status']=2;
		$data1['level']=0;
		$this->Rekrut_model->confirm($id,$data,$data1);
		redirect('Rekrut/view_rekrut','refresh');
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
			$this->session->set_flashdata('rekrut_success','');
			redirect('rekrut/view_rekrut');
		}
		else { echo "error"; }	
	}
        
        public function status_aktif()
        {
                $data = [
                                'nim' => $this->input->get('nim'),
                                'nama_aslab' => $this->input->get('nama_aslab'),
                                'tahun_ajaran' => $this->Nilai_model->tahun_ajaran(),
                                'status' => 1
                        ];
                        $cekAda = $this->db->query('SELECT COUNT(*) FROM aslab WHERE nim = $data["nim"]');

                        if($cekAda)
                        {
                                $this->Nilai_model->delete_general('aslab', 'nim', $data['nim']);
                        }
                        else
                        {
                                $this->Nilai_model->create_general('aslab', $data);
                        }
                        
                
        }
}
