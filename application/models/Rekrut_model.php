<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rekrut_model extends CI_Model{
	public function confirm($nim,$data,$data1)
	{
		$this->db->where('nim', $nim);
		$this->db->update('rekrut_aslab', $data);
		$this->db->update('user', $data1);
	}
}