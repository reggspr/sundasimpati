<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_deliv extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->table = "delivery";
	}

	function select($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->query("SELECT * FROM delivery WHERE status_delivery='belum konfirmasi'");
		return $query->result_array();
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
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
	function selecthistory($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$query = $this->db->query("SELECT * FROM delivery WHERE status_delivery!='belum konfirmasi'");
		return $query->result_array();
	}
	function laporan($date="", $datu="")
	{
		$query = $this->db->query("SELECT * FROM delivery WHERE status_delivery!='belum konfirmasi' AND (tgl_pesan BETWEEN '$date' AND '$datu')");
		return $query->result_array();
	}
	function laporanbiasa($where = null)
	{
		if($where != null)
		{
			$ths->db->where($where);
		}
		$date = date('Y-m-d');
		$query = $this->db->query("SELECT * FROM delivery WHERE tgl_pesan='$date' AND status_delivery !='belum konfirmasi'");
		return $query->result_array();
	}
}
