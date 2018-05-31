<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log extends CI_Controller {

	public function index()
	{
		$this->load->view('login_form');
	}
	
	public function in()
	{
		$this->load->model('LogModel', '', TRUE);
		$p_username = $this->input->post('username');
		$p_password = $this->input->post('password');
		$query = $this->LogModel->get_login($p_username, $p_password);
		$query2 = $this->LogModel->get_group($query->row()->usergroup);
		if($query->num_rows()==1) {
			$this->session->set_userdata('username',$p_username);
			$this->session->set_userdata('usergroup',$query2->row()->name);
			$this->session->set_userdata('fullname',$query->row()->fullname);
		}
		redirect('dashboard');
	}
	
	public function out()
	{
		$this->session->sess_destroy();
		redirect('dashboard');		
	}
}
