<?php
  
class Limbah_model extends CI_Model 
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	function insert ($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update ($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	function ambil_email_user ($id)
	{
		$hasil = $this->db->where('email_user', $id)->get('users');
		if($hasil->num_rows() > 0)
		{
			return $hasil->result();
		}
		else
		{
			return false;
		}
	}

	function ambil_id_artikel ($id)
	{
		$hasil = $this->db->where('id_artikel', $id)->get('artikel');
		if($hasil->num_rows() > 0)
		{
			return $hasil->result();
		}
		else
		{
			return false;
		}
	}
}
?>