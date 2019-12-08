<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class lab_model extends CI_Model{

	public function login_user($nim, $pass)//Gary
        {
                $this->db->where('nim', $nim);
                $this->db->where('pass', $pass);
                $result=$this->db->get('user');
                if($result->num_rows()==1)
                        return $result->row(0)->nim;
                else
                        return false;
        }
        
        public function get_nama($nim, $pass)
	{
		$this->db->where('nim', $nim);
		$this->db->where('pass', $pass);
		$result=$this->db->get('user');
		if($result->num_rows()==1)
			return $result->row(1)->nama;
		else
			return false;
	}
        
	public function cek_level($nim, $pass)
	{
		$this->db->where('nim', $nim);
		$this->db->where('pass', $pass);
		$result=$this->db->get('user');
		if($result->num_rows()==1)
			return $result->row(3)->level;
		else
			return false;
	}

	public function cekNim($nim)
	{
		$this->db->where('nim', $nim);
		$result=$this->db->get('user');
		if($result->num_rows()>=1)
			return true;
	}

	public function create_user($data)
	{
		$this->db->insert('user', $data);
	}

	public function cek_aslab($table)
	{
		$this->db->where('status', '1');
		$query = $this->db->get($table);
		return $query->result();
	}
        
        public function view_user()
        {
                $query = $this->db->query('SELECT * FROM user WHERE nim!="admin"');
                return $query->result();
        }
        
        public function view_user_byid($nim)
        {
                $query = $this->db->query('SELECT * FROM user WHERE nim="'.$nim.'"');
                return $query->result();
        }
        
        public function edit_user($nim, $data)
        {
                $this->db->where('nim', $nim);
                $this->db->update('user', $data);
                
                //Cek apakah ada data aslab di tabel aslab gak
                $result = $this->db->query('SELECT * FROM aslab WHERE nim="'.$nim.'"');
                if($result->num_rows()>=1)
                        $ada = TRUE;
                else
                        $ada = FALSE;
                
                if($data['level']==1)
                {                               
                        $dataAslab = array(
                                "nim" => $nim,
                                "nama_aslab" => $data['nama'],
                                "tahun_ajaran" => $this->tahun_ajaran(),
                                "status" => 1
                        );
                        $this->db->insert('aslab', $dataAslab);
                }
                elseif($data['level']!=1)
                {
                        if($ada)
                        {
                                $this->db->where('nim', $nim);
                                $this->db->delete('aslab');
                        }
                }
        }
        
        public function delete_user($nim)
        {
                $this->db->where('nim', $nim);        
                $this->db->delete('user');
        }
        
        function tahun_ajaran()
        {
                if(date("m") > 7)
                        $ta = date("Y")."/".(date("Y")+1);
                else
                        $ta = (date("Y")-1)."/".date("Y");
                return $ta;
        }
}