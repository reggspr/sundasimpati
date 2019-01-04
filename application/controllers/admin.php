<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('admin_view');
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
