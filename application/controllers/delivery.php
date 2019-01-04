<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_deliv');
	}
	public function index()
	{
		$data['menudeliv'] = $this->m_menu->select();
		$this->load->view('headerhome');
		$this->load->view('navhome');
		$this->load->view('v_delivery',$data);
		$this->load->view('footerhome');
	}

	function insert_data()
	{
		$this->form_validation->set_rules('no_hp','Nomor HP','numeric|min_length[10]|max_length[12]');
		if($this->form_validation->run() == FALSE)
		{
			$data['menudeliv'] = $this->m_menu->select();
			$this->load->view('headerhome');
			$this->load->view('navhome');
			$this->load->view('v_delivery', $data);
			$this->load->view('footerhome');
		}elseif ($_POST) {
		$pesanan = $this->input->post('pesanan');
		$data = array(
				'nama_pemesan' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
				'status_delivery' => $this->input->post('status')
			);
		$data['pesanan'] = implode(",", $pesanan);
		$this->m_deliv->insert($data);
		redirect('delivery','refresh');
		}
	}
}