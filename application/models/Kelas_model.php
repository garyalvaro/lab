<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
        public function __construct()
        {
                parent::__construct();
                $this->db->delete('nilai', array('id_kelas' => 0));
        }
        
        public function view()
        {
                $this->db->select ( '*' ); 
                $this->db->from ( 'kelas' );
                $this->db->join ( 'aslab', 'kelas.id_aslab = aslab.id_aslab' , 'left' );
                $query = $this->db->get ();
                return $query->result ();
        }
        
        public function vieww($id_aslab)
        {
                $this->db->select ( '*' ); 
                $this->db->from ( 'kelas' );
                $this->db->join ( 'aslab', 'aslab.id_aslab = kelas.id_aslab' , 'left' );
                $query = $this->db->get();
                return $query->result();
        }
        
        public function viewww($nim)
        {
//                $result = $this->db->query('SELECT nama_kelas, tahun_ajaran FROM kelas');
//                $nama_kelas = $result->row(0)->nama_kelas;
//                $ta = $result->row(1)->tahun_ajaran;
//                $jumlahkelas = $result->num_rows();        
//                return $query;
                $this->db->select ( '*' ); 
                $this->db->from ( 'nilai' );
                $this->db->join ( 'kelas', 'kelas.id_kelas = nilai.id_kelas' , 'left' );
                $this->db->join ( 'aslab', 'aslab.id_aslab = kelas.id_aslab' , 'left' );
                $this->db->join ( 'waktu', 'waktu.id_waktu = kelas.id_waktu' , 'left' );
                $this->db->join ( 'ruang', 'ruang.id_ruang = kelas.id_ruang' , 'left' );
                $this->db->where ( 'nilai.nim', $nim);
                $query = $this->db->get();
                return $query->result();
        }
        
        public function view_kelas($id_kelas)
        {       
//                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
//                $nama_kelas = $result->row(1)->nama_kelas;
//                $ta = $result->row(2)->tahun_ajaran;
//                
//                $query = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'')->result();
//                return $query;
                $this->db->select ( '*' ); 
                $this->db->from ( 'nilai' );
                $this->db->join ( 'kelas', 'kelas.id_kelas = nilai.id_kelas' , 'left' );
                $this->db->join ( 'user', 'user.nim = nilai.nim' , 'left' );
                $this->db->where ( 'nilai.id_kelas', $id_kelas);
                $this->db->where ( 'nilai.nim!=', NULL);
                $query = $this->db->get();
                return $query->result();
        }
        
        public function view_nilai($id_kelas)
        {       
                $this->db->select ( '*' ); 
                $this->db->from ( 'nilai' );
                $this->db->join ( 'kelas', 'kelas.id_kelas = nilai.id_kelas' , 'left' );
                $this->db->join ( 'user', 'user.nim = nilai.nim' , 'left' );
                $this->db->where ( 'nilai.id_kelas', $id_kelas);
                $this->db->where ( 'nilai.nim!=', NULL);
                $query = $this->db->get();
                return $query->result();
        }
        
        public function delete_kelas($id_kelas)
        {
                $this->db->delete('kelas', array('id_kelas' => $id_kelas));
                $this->db->delete('nilai', array('id_kelas' => $id_kelas));
        }

        
        public function get_nim_from_perkelas($id_kelas)
        {       
//                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
//                $nama_kelas = $result->row(1)->nama_kelas;
//                $ta = $result->row(2)->tahun_ajaran;
//                 
//                $result2 = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'');
//                //$nim = $result2->row(0)->NIM;
//                return $result2->result();
//                
//                //$query = $this->db->query('SELECT nim, email FROM user WHERE nim='.$nim.'');
//                //return $query->row(1)->email;
//                //return $query->result();
                $result2 = $this->db->query('SELECT nim FROM nilai WHERE id_kelas="'.$id_kelas.'"');
                $nim = $result2->row(0)->nim;

                $query = $this->db->query('SELECT nim, email FROM user WHERE nim="'.$nim.'"');
                return $query->row(1)->email;
                return $query->result();
        }
        
        public function get_aslab($ta)
        {
                $query = $this->db->query('SELECT * FROM aslab WHERE tahun_ajaran = "'.$ta.'" AND status=1;');
                return $query->result();
        }
        
        public function get_namaaslab($id_aslab)
        {
                $query = $this->db->query('SELECT nama_aslab FROM aslab WHERE id_aslab="'.$id_aslab.'"');
                return $query->result();
        }
        
        public function get_matkul()
        {
                $query = $this->db->query('SELECT * FROM matkul WHERE MOD(semester,2)=MOD('.date("Y").',2) ORDER BY semester;');
                return $query->result();
        }
        
        public function get_email($nim)
        {
                $query = $this->db->query('SELECT nim, email FROM user WHERE nim='.$nim.'');
                return $query->row(1)->email;
        }
        
//        public function cek_kelas($nama_kelas, $ta, $id_aslab)
//        {
//                $this->db->where('nama_kelas', $nama_kelas);
//                $this->db->where('tahun_ajaran', $ta);
//                $this->db->where('id_aslab', $id_aslab);
//                $result=$this->db->get('kelas');
//                if($result->num_rows()==1)
//                        return true;
//                else
//                        return false;
//        }
                
        public function create_kelas($data)
        {
                $this->db
                        ->group_start()
                        ->where('nama_kelas', $data['nama_kelas'].' '.$data['kom'].'1')
                        ->or_where('nama_kelas', $data['nama_kelas'].' '.$data['kom'].'2')
                        ->group_end()
                        ->where('tahun_ajaran', $data['tahun_ajaran']);
                $result=$this->db->get('kelas');
                if($result->num_rows()>=1)
                        $kelasada = true;
                else
                        $kelasada = false;
                $random1 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
                $random2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 6);
                                
                if($kelasada)
                        return FALSE;
                else //if kelas tidak ada
                {
                        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, kode_enroll, tahun_ajaran, id_aslab, id_waktu, id_ruang) VALUES ("", "'.$data['nama_kelas'].' '.$data['kom'].'1", "'.$random1.'" , "'.$data['tahun_ajaran'].'", "'.$data['id_aslab'].'", "0", "-")');
                        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, kode_enroll, tahun_ajaran, id_aslab, id_waktu, id_ruang) VALUES ("", "'.$data['nama_kelas'].' '.$data['kom'].'2", "'.$random2.'" , "'.$data['tahun_ajaran'].'", "'.$data['id_aslab'].'", "0", "-")');
                        $this->db->query('INSERT INTO nilai () VALUES ()');
                        return TRUE;
                }
        }
        
        public function create_nilai($data)
        {
                $res1 =$this->db
                        ->where('nama_kelas', $data['nama_kelas'].' '.$data['kom'].'1')
                        ->where('tahun_ajaran', $data['tahun_ajaran'])
                        ->get('kelas');
                foreach($res1->result() as $row){ $id_kelas1=$row->id_kelas; }
                
                $res2 =$this->db
                        ->where('nama_kelas', $data['nama_kelas'].' '.$data['kom'].'2')
                        ->where('tahun_ajaran', $data['tahun_ajaran'])
                        ->get('kelas');
                foreach($res2->result() as $row){ $id_kelas2=$row->id_kelas; }
                
                $this->db->query('INSERT INTO nilai (id_nilai, id_kelas) VALUES ("", "'.$id_kelas1.'"), ("", "'.$id_kelas2.'")');
                return TRUE;
        }
        
        public function enroll_mhs($data)
        {
                $kode_enroll = $data['kode_enroll'];
                $nim = $data['nim'];
                $result1 = $this->db->query('SELECT id_kelas FROM kelas WHERE kode_enroll="'.$kode_enroll.'"');
                if($result1->num_rows() == 1)
                {
                        foreach($result1->result() as $key){ $id_kelas = $key->id_kelas; }
                        if($this->db->query("SELECT * FROM nilai WHERE nim=$nim AND id_kelas=$id_kelas")->num_rows() == 1)
                                return FALSE;
                        else
                                $this->db->query('INSERT INTO nilai (id_nilai, id_kelas, nim) VALUES ("", "'.$id_kelas.'" , "'.$nim.'")');
                        return TRUE;
                }
                else
                        return FALSE;
        }

        public function get_id_aslab($nim)
        {
                $result = $this->db->query("SELECT id_aslab FROM aslab WHERE nim='{$nim}'");
                return $result->row(0)->id_aslab;
        }


}

?>