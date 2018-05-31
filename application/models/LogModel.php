<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LogModel extends CI_Model {
	
	public function get_login($username=null, $password=null)
	{
		return $this->db->select('*')
			->where('username', $username)
			->where('password', $password)
			->get('user');
	}
	
	public function get_group($groupid=null)
	{
		return $this->db->select('name')
			->where('id', $groupid)
			->get('user_group');
	}

}
?>