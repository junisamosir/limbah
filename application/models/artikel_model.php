<?php

class Artikel_model extends CI_Model 
{
	private $table  = "artikel";
	private $id 	= "id_artikel";

	function tampil_data()
	{
		return $this->db->get($this->table)->result_array();
	}

	function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function hapus_artikel($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}