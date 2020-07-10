<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_user extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('artikel_model');
    }

	function index()
	{
		$data['title'] 	 = 'Kedan Medan!';
		$data['artikel'] = $this->artikel_model->tampil_data();
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_user', $data);
		$this->load->view('artikel', $data);
		$this->load->view('templates/footer');
	}
}