<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Keluhan_admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('keluhanadmin_model');
    }
 
	function index()
	{
		$data['title'] 	 = 'Kedan Medan! Admin';
		$this->db->join('keluhan','keluhan_admin.id_userkeluhan = keluhan.id_keluhan');
		$this->db->join('petugas','keluhan_admin.idpetugas_keluhan = petugas.id_petugas');
		$this->db->join('users','keluhan.iduser_keluhan = users.id_user');
		$data['keluhan_admin'] = $this->keluhanadmin_model->tampil_data();
		$data['keluhan'] = $this->db->get('keluhan')->result_array();
		$data['petugas'] = $this->db->get('petugas')->result_array();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/keluhan_admin', $data);
		$this->load->view('templates/footer_admin');
	}

	function update()
	{
		$idpetugas_keluhan = $this->input->post('idpetugas_keluhan');
		$konfirmasi_keluhan = $this->input->post('konfirmasi_keluhan');
		$tglselesai_keluhan = $this->input->post('tglselesai_keluhan');

		$data = array (
			'idpetugas_barang' => $idpetugas_barang,
			'konfirmasi_keluhan' => $konfirmasi_keluhan,
			'tglselesai_keluhan' => $tglselesai_keluhan,
		);
		$where = array ('id_keluhanadmin' => $id_keluhanadmin);

		 $this->keluhanadmin_model->update($where, $data, 'keluhan_admin');
	}

	
}