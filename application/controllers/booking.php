<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_book');
	}
	public function index()
	{
		$this->load->view('headerhome');
		$this->load->view('navhome');
		$this->load->view('v_booking');
		$this->load->view('footerhome');
	}

	function insert_data()
	{
		$this->form_validation->set_rules('no_hp','Nomor HP','numeric|min_length[10]|max_length[12]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('headerhome');
			$this->load->view('navhome');
			$this->load->view('v_booking');
			$this->load->view('footerhome');
		}else{
		$data = array(
				'nama_pembooking' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'no_meja' => $this->input->post('no_meja'),
				'tanggal' => $this->input->post('tanggal'),
				'waktu' => $this->input->post('waktu'),
				'tgl_book' => $this->input->post('tgl_book'),
				'status_booking' => $this->input->post('status')
			);
		$this->m_book->insert($data);
		echo '<script>alert("Booking akan diproses");</script>';
		redirect('booking','refresh');
		}
	}
}