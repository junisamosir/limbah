<?php

class Pesan_model extends CI_Model 
{
	private $table = "kontak";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}

	function hapus_pesan($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);

	}
}