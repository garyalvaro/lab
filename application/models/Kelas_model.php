<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
        public function __construct()
        {
                parent::__construct();
                $this->load->dbforge(); 
        }
        
        public function view()
        {
                return $query = $this->db->get('kelas')->result();
        }
        
        public function vieww($id_aslab)
        {
                $this->db->where('id_aslab', $id_aslab);
                return $query = $this->db->get('kelas')->result();
        }
        
        public function viewww($nim)
        {
                $query = $this->db->query('SELECT nama_kelas, tahun_ajaran FROM kelas');
                
                return $query;
        }
        
        public function view_kelas($id_kelas)
        {       
                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
                $nama_kelas = $result->row(1)->nama_kelas;
                $ta = $result->row(2)->tahun_ajaran;
                
                $query = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'')->result();
                return $query;
        }
        
        public function get_nim_from_perkelas($id_kelas)
        {       
                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
                $nama_kelas = $result->row(1)->nama_kelas;
                $ta = $result->row(2)->tahun_ajaran;
                 
                $result2 = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'');
                //$nim = $result2->row(0)->NIM;
                return $result2->result();
                
                //$query = $this->db->query('SELECT nim, email FROM user WHERE nim='.$nim.'');
                //return $query->row(1)->email;
                //return $query->result();
        }
        
        public function view_jlhAnggota($id_kelas)
        {       
                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
                $nama_kelas = $result->row(1)->nama_kelas;
                $ta = $result->row(2)->tahun_ajaran;
                
                $query = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'')->num_rows();
                return $query;
        }
        
        public function get_aslab($ta)
        {
                $query = $this->db->query('SELECT * FROM aslab WHERE tahun_ajaran = "'.$ta.'" AND status=1;');
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
        
        public function create_tabel_kelas($data)
        {
                $table = strtolower("kelas_".$data['nama_kelas']."_".$data['kom']."1_".$data['tahun_ajaran']);
                
                if($this->db->table_exists($table))
                        return FALSE;
                else
                {
                        $this->dbforge->add_field(array(
                                'NIM' => array(
                                        'type' => 'VARCHAR',
                                        'constraint' => '10',
                                        'unique' => TRUE
                                        ),
                                'nama' => array(
                                        'type' => 'VARCHAR',
                                        'constraint' => '100'
                                        ),
                                'nilai' => array(
                                        'type' => 'INT',
                                        'constraint' => 4 
                                        ),
                        ));
                        
                        $this->dbforge->create_table($table);
                        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, tahun_ajaran, id_aslab, id_waktu, id_ruang) VALUES ("", "'.$data['nama_kelas'].'_'.$data['kom'].'1", "'.$data['tahun_ajaran'].'", "'.$data['id_aslab'].'", "0", "-")');
                }
                                
                
                $table2 = strtolower("kelas_".$data['nama_kelas']."_".$data['kom']."2_".$data['tahun_ajaran']);
                
                if($this->db->table_exists($table2))
                        return FALSE;
                else
                {
                        $this->dbforge->add_field(array(
                                'NIM' => array(
                                        'type' => 'VARCHAR',
                                        'constraint' => '10'
                                        ),
                                'nama' => array(
                                        'type' => 'VARCHAR',
                                        'constraint' => '100'
                                        ),
                                'nilai' => array(
                                        'type' => 'INT',
                                        'constraint' => 4 
                                        ),
                        ));
                        
                        $this->dbforge->create_table($table2);
                        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, tahun_ajaran, id_aslab, id_waktu, id_ruang) VALUES ("", "'.$data['nama_kelas'].'_'.$data['kom'].'2", "'.$data['tahun_ajaran'].'", "'.$data['id_aslab'].'", "0", "-")');
                        return TRUE;
                }               
        }

        public function get_id_aslab($nim)
        {
                $result = $this->db->query("SELECT id_aslab FROM aslab WHERE nim='{$nim}'");
                return $result->row(0)->id_aslab;
        }

        public function pengumuman()
        {
                $query = $this->db->query("SELECT nama_kelas FROM kelas");
                return $query->result();
        }

}

?>