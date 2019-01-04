<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliv extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_deliv');
	}
	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['deliv'] = $this->m_deliv->select();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_deliv', $data);
			$this->load->view('modal');
			$this->load->view('footer3');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function edit_data()
	{
		$id = $this->input->post('id_delivery');

		$data = array('status_delivery' => $this->input->post('status_delivery'));
		$where = array('id_delivery' => $id);
		$this->m_deliv->update($data, $where);
		echo '<script>alert("delivery telah dikonfirmasi");</script>';
		redirect('deliv','refresh');
	}

	function history_deliv()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['deliv'] = $this->m_deliv->selecthistory();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('h_deliv', $data);
			$this->load->view('modal');
			$this->load->view('footer3');
		}
		else
		{
			redirect('login','refresh');
		}
	}
}
