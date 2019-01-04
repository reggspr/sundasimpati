<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('headerhome');
		$this->load->view('navhome');
		$this->load->view('carousel');
		$this->load->view('v_home');
		$this->load->view('footerhome');
	}
}
