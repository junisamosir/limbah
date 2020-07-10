<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_user extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('keluhan_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('namabarang_keluhan','namabarang_keluhan','required',  ['required' => 'Nama Limbah harus diisi!']);
		$this->form_validation->set_rules('beratbarang_keluhan','beratbarang_keluhan','required',  ['required' => 'Berat barang harus diisi!']);
		$this->form_validation->set_rules('alamat_keluhan','alamat_keluhan','required',  ['required' => 'Detail Lokasi harus diisi!']);
		$this->form_validation->set_rules('keterangan_keluhan','keterangan_keluhan','required',  ['required' => 'Keterangan harus diisi!']);
		$this->form_validation->set_rules('image_keluhan','image_keluhan','required|trim',  ['required' => 'Foto harus diisi!']);

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan!';
			$data['keluhan'] = $this->db->get('keluhan')->result();
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_user', $data);
			$this->load->view('user/jadwal', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$namabarang_keluhan = $this->input->post('namabarang_keluhan');
			$alamat_keluhan = $this->input->post('alamat_keluhan');
			$keterangan_keluhan = $this->input->post('keterangan_keluhan');
			$image_keluhan = $_FILES['photo'];
			$tgl_keluhan = $this->input->post('tgl_keluhan');

			if ($photo='')
			{
			}
				else
				{
					$config['upload_path'] ='./assets/img/keluhan';
					$config['allowed_types'] = 'jpg';

					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('photo'))
					{
						echo "Gagal Upload"; die();
					}
						else
						{
							$photo=$this->upload->data('file_name');
						}
					}

				$data = array (
					'namabarang_keluhan' => $namabarang_keluhan,
					'alamat_keluhan' => $alamat_keluhan,
					'keterangan_keluhan' => $keterangan_keluhan,
					'image_keluhan' => $image_keluhan,
					'tgl_keluhan' => time(),
				);

			$this->keluhan_model->insert($data, 'jadwal');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Keluhan berhasil ditambahkan!</div>');
			redirect('jadwal');
		}
	}
}