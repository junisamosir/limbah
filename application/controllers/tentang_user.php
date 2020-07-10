<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_user extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Kedan Medan!';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_user', $data);
		$this->load->view('user/tentang', $data);
		$this->load->view('templates/footer');
	}
}