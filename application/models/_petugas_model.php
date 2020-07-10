<?php
  
class _petugas_model extends CI_Model 
{
	private $table = "keluhan";
	private $id 	= "id_keluhan";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}

	function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);

	}
}