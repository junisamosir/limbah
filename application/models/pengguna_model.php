<?php

class Pengguna_model extends CI_Model 
{
	private $table = "users";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}
}

?>