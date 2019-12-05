<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
        public function __construct()
        {
                parent::__construct();
        }
        
        public function view()
        {
                return $query = $this->db->get('waktu')->result();
        }
        
        public function view_ruang()
        {       
                $result=$this->db->query('SELECT * FROM kelas');
                return $result->result();
        }
        
        public function show_ruang()
        {
                $result=$this->db->query('SELECT * FROM ruang');
                return $result->result();
        }
        
        public function get_kelas()
        {
                $query = $this->db->query('SELECT * FROM kelas');
                return $query->result();
        }
        
        public function get_kelass($nim)
        {
                $result = $this->db->query('SELECT id_aslab FROM aslab WHERE nim='.$nim.'');
                $id_aslab = $result->row(0)->id_aslab;
                $query = $this->db->query('SELECT * FROM kelas WHERE id_aslab='.$id_aslab.'');
                return $query->result();
        }
        
        public function get_waktu()
        {
                $query = $this->db->query('SELECT * FROM waktu;');
                return $query->result();
        }
        
        public function get_ruang()
        {
                $query = $this->db->query('SELECT * FROM ruang WHERE keterangan="Ruangan Praktikan TI"');
                return $query->result();
        }
        
        public function create_jadwal($data, $id_kelas)
        {
                $this->db->where('id_kelas', $id_kelas);
                return $this->db->update('kelas', $data);
        }
        
        public function cekWaktuRuang($id_waktu, $id_ruang)
        {
                $this->db->where('id_waktu', $id_waktu);
                $this->db->where('id_ruang', $id_ruang);
		$result=$this->db->get('kelas');
		if($result->num_rows()>=1)
			return true;
        }

}

?>