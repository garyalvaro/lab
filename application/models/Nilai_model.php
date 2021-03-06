<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nilai_model extends CI_Model
{
        function __construct()
        {
                parent::__construct();
        }

        function get_general($table)
        {
                $query = $this->db->get($table);
                return $query->result();
        }

        function get_general_order_by($table,$by,$order)
        {
                return $query = $this->db->query("SELECT * FROM $table ORDER BY $by $order")->result();
        }

        function truncate_general($table)
        {
                return $this->db->query("TRUNCATE TABLE $table");
        }

        function count_general($table)
        {
                return $this->db->query("SELECT COUNT(*) as jumlah FROM $table")->row();
        }

        function count_by_id_general($table, $id, $val)
        {
                return $this->db->query("SELECT COUNT(*) as jumlah FROM $table WHERE $id = '$val'")->row();
        }

        function get_by_id_general($table, $id, $val)
        {
                $query = $this->db->where($id, $val)->get($table);
                return $query->result();
        }
        function get_by_id_column_general($table,$column, $id, $val)
        {
                $thiss = $this->db->query("SELECT $column FROM $table WHERE $id = '$val'")->result();
                return $thiss;
        }
        function get_by_column_general($table,$column)
        {
                $thiss = $this->db->query("SELECT $column FROM $table")->result();
                return $thiss;
        }


        function create_general($table, $data)
        {
                return $this->db->insert($table, $data);
        }

        function update_general($table, $id, $val, $data)
        {
                $this->db->where($id, $val);
                return $this->db->update($table, $data);
        }

        function delete_general($table, $id, $val)
        {
                $this->db->where($id, $val);
                return $this->db->delete($table);
        }

        function limit_general($table, $limit)
        {
                return $this->db->query("SELECT * FROM $table LIMIT $limit")->result();
        }

        function limit_general_order_by($table, $order_by, $order ,$limit)
        {
                return $this->db->query("SELECT * FROM $table ORDER BY $order_by $order LIMIT $limit")->result();
        }
        
        function tahun_ajaran()
        {
                if(date("m") > 7)
                        $ta = date("Y")."/".(date("Y")+1);
                else
                        $ta = (date("Y")-1)."/".date("Y");
                return $ta;
        }
        
        function update_nilai($nim, $nilai, $id_kelas)
        {
                $query = $this->db->query("UPDATE nilai SET nilai=$nilai WHERE nilai.nim=$nim AND nilai.id_kelas=$id_kelas");
                return $query;
        }
        

}
