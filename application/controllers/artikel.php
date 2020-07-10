<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller 
{

	public function index()
	{
		$data['title'] = 'Kedan Medan!';
		$data['artikel'] = $this->limbah_model->tampil_data();
		
		$this->load->view('templates/header', $data);
		$this->load->view('artikel', $data);
		$this->load->view('templates/footer');
	}
}