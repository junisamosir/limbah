<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Kedan Medan!';
		$this->load->view('templates/header', $data);
		$this->load->view('front', $data);
		$this->load->view('templates/footer');
	}
}