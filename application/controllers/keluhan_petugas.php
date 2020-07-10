<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhan_petugas extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('_petugas_model');
    }

	public function index()
	{
		$data['title'] = 'Kedan Medan! Petugas';
		$this->db->join('users','keluhan.iduser_keluhan = users.id_user');
		$data['keluhan'] = $this->_petugas_model->tampil_data();
		
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_petugas', $data);
		$this->load->view('petugas/keluhan', $data);
		$this->load->view('templates/footer_admin');
	}

}