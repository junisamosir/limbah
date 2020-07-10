<?php
  
class Keluhan_model extends CI_Model 
{
	private $table = "keluhan";
	private $id 	= "id_keluhan";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}

	function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}
}