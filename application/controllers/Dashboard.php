<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username'))
		{
			redirect(log);
		}
	}
	
	public function index()
	{
		$data['menu'] = $this->load->view('sidebar_menu', NULL, TRUE);
		$this->load->view('dashboard', $data);
	}
}
