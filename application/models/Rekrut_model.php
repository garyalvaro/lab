<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rekrut_model extends CI_Model{
	public function confirm($nim,$data)
	{
		$this->db->where('nim', $nim);
		$this->db->update('rekrut_aslab', $data);
	}
	public function confirm1($nim,$data)
	{
		$this->db->where('nim', $nim);
		$this->db->update('user', $data);
	}
	public function ada($nim)
	{
		$result = $this->db->query('SELECT * FROM aslab WHERE nim="'.$nim.'"');
        if($result->num_rows()>=1)
	        $ada = 1;
        else
            $ada = 0;
        return $ada;
	}
}