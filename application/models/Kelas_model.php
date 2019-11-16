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
        
        public function create_tabel_kelas($data)
        {
                $table = strtolower("kelas_".$data['nama_kelas']."_".$data['kom']."_".$data['tahun_ajaran']);
                
                if($this->db->table_exists($table))
                        echo "TABEL ".$table." SUDAH ADA";
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
                        echo "CREATE TABEL ".$table." BERHASIL";
                }
                                
                //$this->db->insert('kelas',$data['nama_kelas']);
                $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas) VALUES ("", "'.$data['nama_kelas'].'")');
        }
}

?>