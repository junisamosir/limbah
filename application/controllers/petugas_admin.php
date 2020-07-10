<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('petugas_model');
    }
 
	function index()
	{
		$data['title']   = 'Kedan Medan! Admin';
		$data['petugas'] = $this->petugas_model->tampil_data();
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/petugas', $data);
		$this->load->view('templates/footer_admin');
	}

	function hapus($id)
	{
		$where = array('id_petugas'=>$id);
		$this->petugas_model->hapus_petugas($where, 'petugas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Petugas berhasil dihapus!</div>');
		redirect('petugas');
	}

	function tambah_petugas()
	{
		$data['title'] = 'Kedan Medan! Admin';
		
		$this->form_validation->set_rules('nama_petugas','nama_petugas','required',  ['required' => 'Nama Petugas harus diisi']);
		$this->form_validation->set_rules('phone_petugas','phone_petugas','required|trim', ['required' => 'No. Telepon Petugas harus diisi!']);

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/tambah_petugas', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			$nama_petugas  = $this->input->post('nama_petugas');
			$phone_petugas = $this->input->post('phone_petugas');
			$image_petugas = $_FILES['image_petugas']['name'];
			$tgl_daftar    = $this->input->post('tgl_daftar');
		
			if ($image_petugas='')
			{}
				else
				{
					$config['upload_path'] ='./assets/img/petugas';
					$config['allowed_types'] = 'jpg|png|jpeg';

				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('image_petugas'))
				{
					echo "Gagal Upload"; die();
				}
				else 
				{
					$image_petugas=$this->upload->data('file_name');
				}
			}

			$data = array (
				'nama_petugas' => $nama_petugas,
				'phone_petugas' => $phone_petugas,
				'image_petugas' => $image_petugas,
				'tgl_daftar' => time()
			);

			$this->petugas_model->tambah_petugas($data,'petugas');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan petugas!</div>');
			redirect('petugas_admin');		
		}
	}

	function edit($id)
	{
		$data['title'] = 'Kedan Medan! Admin';
		$where = array('id_petugas' => $id);
		$data['petugas'] = $this->petugas_model->edit_petugas($where, 'petugas')->result();

		$this->form_validation->set_rules('nama_petugas', 'nama_petugas','trim|required', [
		'required' => 'Nama harus diisi!'
		]);
		$this->form_validation->set_rules('phone_user', 'phone_user','trim', [
		'required' => 'No. Telp Petugas harus diisi!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/edit_petugas', $data);
			$this->load->view('templates/footer_admin');
		}

			else
			{
				$nama_petugas = $this->input->post('nama_petugas');
				$phone_petugas  = $this->input->post('phone_petugas');

				

				$this->pengguna_model->update_pengguna($where, $data, 'petugas');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil di update!</div>');
				redirect('petugas');
			}
	}
}