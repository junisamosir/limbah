<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->form_validation->set_rules('nama_kontak','nama_kontak','required',  ['required' => 'Nama harus diisi!']);
		$this->form_validation->set_rules('email_kontak','email_kontak','required|trim|valid_email[kontak.email_kontak]', [
			'required'	  => 'Email harus diisi!',
			'valid_email' => 'Email tidak sesuai!'
			]);
		$this->form_validation->set_rules('phone_kontak','phone_kontak','required|trim', ['required' => 'No. Telepon harus diisi!']);
		$this->form_validation->set_rules('pesan_kontak','pesan_kontak','required', ['required' => 'Pesan harus diisi!']);

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan!';
			$this->load->view('templates/header', $data);
			$this->load->view('kontak', $data);
			$this->load->view('templates/footer');
		} 
		else 
		{

			//insert data ke database
			$data = [
				'nama_kontak'  => $this->input->post('nama_kontak'),
				'email_kontak' => $this->input->post('email_kontak'),
				'phone_kontak' => $this->input->post('phone_kontak'),
				'pesan_kontak' => $this->input->post('pesan_kontak'),
				'tgl_kontak'   => time()
			];

			$this->db->insert('kontak', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan berhasil dikirim!</div>');
			redirect('kontak');
		}
	}
}

	