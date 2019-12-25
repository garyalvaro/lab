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
                        $dataa = array(
                                'id_waktu'=>$this->input->post('id_waktu'),
                                'id_ruang'=>$this->input->post('id_ruang')
                        );
                        
                        $this->Jadwal_model->create_jadwal($dataa, $id_kelas);
                        
                        //Send to email notification
                        $data['nim'] = $this->Kelas_model->get_nim_from_perkelas($id_kelas);
                
                        $id_waktuu = $this->db->query('SELECT id_waktu from kelas WHERE id_kelas='.$id_kelas.'')->row(0)->id_waktu;
                        $id_ruangg = $this->db->query('SELECT id_ruang from kelas WHERE id_kelas='.$id_kelas.'')->row(0)->id_ruang;

                        $data['kelas'] = $this->Jadwal_model->get_kelas_byid($id_kelas);
                        $data['waktu'] = $this->Jadwal_model->get_waktu_byid($id_waktuu);
                        $data['ruang'] = $this->Jadwal_model->get_ruang_byid($id_ruangg);

                        foreach ($data['nim'] as $key)
                        {
                                $nim = $key->NIM;
                                $email = $this->Kelas_model->get_email($nim);

        //                        echo $email."<br>";
        //                        foreach ($data['kelas'] as $kls){ echo $kls->nama_kelas."<br>"; }
        //                        foreach ($data['waktu'] as $wkt){ echo $wkt->nama_waktu."<br>"; }
        //                        foreach ($data['ruang'] as $rg){ echo $rg->nama_ruang."<br>"; }
        //                        echo "<br>";

                                $subject = "Perubahan Jadwal Praktikum";
                                $mailContent = $this->load->view('jadwal/email_gantijadwal', $data, TRUE);
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $mailTo = $email;
                                $mailFromId = "LaboratoriumTI";
                                $mailFromName = "LaboratoriumTI";
                                sendMail($subject, $mailContent, $mailTo, $mailFromId, $mailFromName);

                        }
                        
                        if($this->Jadwal_model->create_jadwal($dataa, $id_kelas))
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
        
        public function coba()
        {
                $id_kelas = 1;
                $data['nim'] = $this->Kelas_model->get_nim_from_perkelas($id_kelas);
                
                $id_waktu = $this->db->query('SELECT id_waktu from kelas WHERE id_kelas='.$id_kelas.'')->row(0)->id_waktu;
                $id_ruang = $this->db->query('SELECT id_ruang from kelas WHERE id_kelas='.$id_kelas.'')->row(0)->id_ruang;
                
                $data['kelas'] = $this->Jadwal_model->get_kelas_byid($id_kelas);
                $data['waktu'] = $this->Jadwal_model->get_waktu_byid($id_waktu);
                $data['ruang'] = $this->Jadwal_model->get_ruang_byid($id_ruang);
                
                foreach ($data['nim'] as $key)
                {
                        $nim = $key->NIM;
                        $email = $this->Kelas_model->get_email($nim);
                        
//                        echo $email."<br>";
//                        foreach ($data['kelas'] as $kls){ echo $kls->nama_kelas."<br>"; }
//                        foreach ($data['waktu'] as $wkt){ echo $wkt->nama_waktu."<br>"; }
//                        foreach ($data['ruang'] as $rg){ echo $rg->nama_ruang."<br>"; }
//                        echo "<br>";
                        
//                        $subject = "Perubahan Jadwal";
//                        $mailContent = $this->load->view('jadwal/email_gantijadwal', $data, TRUE);
//                        $headers = "MIME-Version: 1.0" . "\r\n";
//                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//                        $mailTo = $email;
//                        $mailFromId = "LaboratoriumTI";
//                        $mailFromName = "LaboratoriumTI";
//                        sendMail($subject, $mailContent, $mailTo, $mailFromId, $mailFromName);
                        
                }
                
                $this->load->view('jadwal/email_gantijadwal', $data);
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