<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = "menu";
	}

	function select($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
	}

	function selectmakan()
	{
		$query = $this->db->query("SELECT * FROM menu WHERE jenis='makanan'");
		return $query->result_array();
	}

	function selectminum()
	{
		$query = $this->db->query("SELECT * FROM menu WHERE jenis='minuman'");
		return $query->result_array();
	}
}
