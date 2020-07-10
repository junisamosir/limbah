<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Kedan Medan!';
		$this->load->view('templates/header', $data);
		$this->load->view('tentang', $data);
		$this->load->view('templates/footer');
	}
}