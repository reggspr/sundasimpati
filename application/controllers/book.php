<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_book');
	}
	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['book'] = $this->m_book->select();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_book', $data);
			$this->load->view('modal');
			$this->load->view('footer2');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function edit_data()
	{
		$id = $this->input->post('id_booking');

		$data = array('status_booking' => $this->input->post('status_booking'));
		$where = array('id_booking' => $id);
		$this->m_book->update($data, $where);
		echo '<script>alert("proses telah dikonfirmasi");</script>';
		redirect('book','refresh');
	}

	function delete_data()
	{
		$id = $this->input->post('id_booking');
		
		$where = array('id_booking' => $id);
		$this->m_book->delete($where);
		redirect('book','refresh');
	}

	function history_book()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['book'] = $this->m_book->selecthistory();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('h_book', $data);
			$this->load->view('footer2');
		}
		else
		{
			redirect('login','refresh');
		}
	}
}
