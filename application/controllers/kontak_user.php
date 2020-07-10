<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_user extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Kedan Medan!';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_user', $data);
		$this->load->view('user/kontak', $data);
		$this->load->view('templates/footer');
	}
}