<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_menu');
	}
	public function index()
	{
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');

		$data['user'] = $user_akun;

		if($session == TRUE)
		{
			$data['menu'] = $this->m_menu->select();
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_menu', $data);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function insert_data()
	{
		$config['upload_path'] = "./assets/uploads/";
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors(),
			'menu' => $this->m_menu->select());
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_menu', $error);
			$this->load->view('modal');
			$this->load->view('footer_admin');
		}else
		{
			$file_data = $this->upload->data();
			$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'gambar' => base_url().'/assets/uploads/'.$file_data['file_name'],
					'jenis' => $this->input->post('jenis'),
					'harga_menu' => $this->input->post('harga_menu'),
					'deskripsi' => $this->input->post('deskripsi')
				);
			$this->m_menu->insert($data);
			redirect('menu','refresh');
		}
	}

	function edit_data()
	{
		$id = $this->input->post('id_menu');
		$config['upload_path'] = "./assets/uploads/";
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors(),
			'menu' => $this->m_menu->select());
			$this->load->view('header_admin');
			$this->load->view('navigation');
			$this->load->view('v_menu', $error);
			$this->load->view('modal', $error);
			$this->load->view('footer_admin');
		}else
		{
			$file_data = $this->upload->data();
			$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'gambar' => base_url().'/assets/uploads/'.$file_data['file_name'],
					'jenis' => $this->input->post('jenis'),
					'harga_menu' => $this->input->post('harga_menu'),
					'deskripsi' => $this->input->post('deskripsi')
				);
			$where = array('id_menu' => $id);
			$this->m_menu->update($data, $where);

			redirect('menu','refresh');
		}
	}

	function delete_data()
	{
		$id = $this->input->post('id_menu');
		$where = array ('id_menu' => $id);
		$this->m_menu->delete($where);
		redirect('menu','refresh');
	}
}
