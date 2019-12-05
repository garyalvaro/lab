<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller 
{
        public function __construct()
        {
                parent::__construct();
        }
        
        public function index()
        {                
                $data['title'] = 'Jadwal';
                $data['subtitle'] = 'Jadwal';
                $data['jdwl'] = $this->Jadwal_model->view();
                
                $id_waktu = $this->input->get('id_waktu');
                $data['ruangkelas'] = $this->Jadwal_model->view_ruang($id_waktu);
                
                $this->load->view('jadwal/index', $data);
        }
        
        public function create()
        {
                $data['title'] = 'Tambah Jadwal';
                $data['subtitle'] = 'Tambah Jadwal';
                
                if($this->session->userdata('level')==2)
                        $data['kelas'] = $this->Jadwal_model->get_kelas();
                elseif($this->session->userdata('level')==1)
                        $data['kelas'] = $this->Jadwal_model->get_kelass($this->session->userdata('nim'));
                        
                $data['waktu'] = $this->Jadwal_model->get_waktu();
                $data['ruang'] = $this->Jadwal_model->get_ruang();
                
                $this->load->view('jadwal/tambah_jadwal', $data);
                
               if($this->input->post('submit'))
                {
                        $id_kelas = $this->input->post('id_kelas');
                        $data = array(
                                'id_waktu'=>$this->input->post('id_waktu'),
                                'id_ruang'=>$this->input->post('id_ruang')
                        );
                        
                        $data['kelas'] = $this->Kelas_model->view_kelas($id_kelas);
                        foreach($data['kelas'] as $key)
                        {
                                $list = [$this->Kelas_model->get_email($key->nim)];
                        }
                        
                        $subject = "Perubahan Jadwal";
                        $mailContent = $this->load->view('email_template', $data, TRUE);
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $mailTo = $list;
                        $mailFromId = "LaboratoriumTI";
                        $mailFromName = "LaboratoriumTI";
                        sendMail($subject, $mailContent, $mailTo, $mailFromId, $mailFromName);
                        
                        
                        if($this->Jadwal_model->create_jadwal($data, $id_kelas))
                        {
                                $this->session->set_flashdata('add_jadwal_success','add_jadwal_success');
                                redirect("jadwal/index");
                        }
                        else
                        {
                                $this->session->set_flashdata('add_jadwal_failed','add_jadwal_success');
                                redirect("jadwal/index");
                        }
                                
                } 
        }
        
        public function cekWaktuRuang()
        {
		$id_waktu = $this->input->get('id_waktu');
		$id_ruang = $this->input->get('id_ruang');
		$cek = $this->Jadwal_model->cekWaktuRuang($id_waktu, $id_ruang);

		if($cek){
			echo "true";
		}else {
			echo "false";
		}
	}
        
        public function getRuangKelas()
        {
                $id_waktu = $this->input->get('id_waktu');
                $data['ruangkelas'] = $this->Jadwal_model->view_ruang($id_waktu);
                echo $data;
        }
        
        public function ruang()
        {
                $data['title'] = 'Daftar Ruang';
                $data['subtitle'] = 'Daftar Ruang';
                $data['ruang'] = $this->Jadwal_model->show_ruang();
                                
                $this->load->view('jadwal/ruang', $data);
        }
                
        public function tahun_ajaran()
        {
                if(date("m") > 7)
                        $ta = date("Y")."/".(date("Y")+1);
                else
                        $ta = (date("Y")-1)."/".date("Y");
                return $ta;
        }

}

?>