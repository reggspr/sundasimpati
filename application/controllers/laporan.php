<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_book');
		$this->load->model('m_deliv');
	}
	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['laporan_book'] = $this->m_book->laporanbiasa();
			$data['laporan_deliv'] = $this->m_deliv->laporanbiasa();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_laporan', $data);
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	function filterisasi()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
				$data['laporan_book'] = $this->m_book->laporan($this->input->post('tgl_awal'), $this->input->post('tgl_akhir'));
				$data['laporan_deliv'] = $this->m_deliv->laporan($this->input->post('tgl_awal'), $this->input->post('tgl_akhir'));
				$this->load->view('header_admin');
				$this->load->view('navigation');
				$this->load->view('v_laporan', $data);
				$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}
}
