<?php
 
class Petugas_model extends CI_Model 
{
	private $table = "petugas";
	private $id 	= "id_petugas";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}

	function tambah_petugas($data, $table)
	{
		$this->db->insert($this->table, $data);
	}

	function update_petugas($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update('petugas',$data);
	}

	function hapus_petugas($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
} 