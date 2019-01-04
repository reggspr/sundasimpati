<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuh extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu');
	}
	public function index()
	{	
        $data['menu'] = $this->m_menu->select();
		$this->load->view('headerhome');
		$this->load->view('navhome');
		$this->load->view('v_menuh', $data);
		$this->load->view('footerhome');
	}
	function filterisasi()
	{
			if($this->input->post('filter') == 'makanan')
			{
				$data['menu'] = $this->m_menu->selectmakan();
				$this->load->view('headerhome');
				$this->load->view('navhome');
				$this->load->view('v_menuh', $data);
				$this->load->view('footerhome');
			}
			elseif($this->input->post('filter') == 'minuman')
			{
				$data['menu'] = $this->m_menu->selectminum();
				$this->load->view('headerhome');
				$this->load->view('navhome');
				$this->load->view('v_menuh', $data);
				$this->load->view('footerhome');
			}
			else
			{
				$data['menu'] = $this->m_menu->select();
				$this->load->view('headerhome');
				$this->load->view('navhome');
				$this->load->view('v_menuh', $data);
				$this->load->view('footerhome');
			}
	}
}
