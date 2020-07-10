<?php
  
class Keluhanadmin_model extends CI_Model 
{
	private $table = "keluhan_admin";
	private $id 	= "id_keluhanadmin";

	function tampil_data()
	{
		return $this->db->get($this->table)->result();
	}
}