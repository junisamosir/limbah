<?php

class Admin_model extends CI_Model 
{
	private $table = "users";

	function update()
	{
		$this->db->update('users', $data);
	}
	
}
?>
