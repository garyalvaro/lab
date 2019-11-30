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
        
        public function view_kelas($id_kelas)
        {       
                $result=$this->db->query('SELECT * FROM kelas WHERE id_kelas="'.$id_kelas.'"');
                $nama_kelas = $result->row(1)->nama_kelas;
                $ta = $result->row(2)->tahun_ajaran;
                
                $query = $this->db->get('kelas_'.$nama_kelas.'_'.$ta.'')->result();
                return $query;
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
                $table = strtolower("kelas_".$data['nama_kelas']."_".$data['kom']."_".$data['tahun_ajaran']);
                
                if($this->db->table_exists($table))
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
                        
                        $this->dbforge->create_table($table);
                        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, tahun_ajaran, id_aslab) VALUES ("", "'.$data['nama_kelas'].'_'.$data['kom'].'", "'.$data['tahun_ajaran'].'", "'.$data['id_aslab'].'")');
                        return TRUE;
                }
                                
//                if(!$this->cek_kelas($data['nama_kelas'], $data['tahun_ajaran'], $data['id_aslab']))
//                {
//                        
//                }
                        
        }
}

?>