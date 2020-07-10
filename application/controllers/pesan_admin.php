<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('pesan_model');
    }

	function index()
	{
		$data['title']  = 'Kedan Medan!';
		$data['kontak'] = $this->pesan_model->tampil_data();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/pesan', $data);
		$this->load->view('templates/footer_admin');
	}

	function hapus($id)
	{
		$where = array ('id_kontak'=>$id);
		$this->pesan_model->hapus_pesan($where,'kontak');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan berhasil dihapus!</div>');
		redirect('pesan_admin');
	}

}