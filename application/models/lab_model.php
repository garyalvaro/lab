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
}