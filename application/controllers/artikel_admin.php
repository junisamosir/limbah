<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_admin extends CI_Controller 
{

	function index()
	{
		$data['title'] 	 = 'Kedan Medan! Admin';
		$data['artikel'] = $this->limbah_model->tampil_data('artikel')->result();
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/artikel', $data);
		$this->load->view('templates/footer_admin');
	}

	function tambah()
	{
		$this->rules();
		
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan! Admin';
			$data['artikel'] = $this->limbah_model->tampil_data('artikel')->result();
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/tambah_artikel', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			$judul_artikel  = $this->input->post('judul_artikel');
			$isi_artikel    = $this->input->post('isi_artikel');
			$image_artikel  = $_FILES['image_artikel']['name'];
			$tgl_artikel    = $this->input->post('tgl_artikel');
		
			if ($image_artikel=='')
				{} 
			else
			{
				$config['allowed_types'] = 'jpeg'|'jpg'|'png';
				$config['max_size'] 	 = '2048';
				$config['upload_path']	 = './assets/img/';

				$this->load->library('upload', $config);

				//upload foto
				if(!$this->upload->do_upload('image_artikel')) 
				{
					echo "Foto artikel gagal di upload!";
				}
				else 
				{
					$image_artikel= $this->upload->data('file_name');
				}
			}

			$data = array (
					'judul_artikel' => $judul_artikel,
					'isi_artikel'   => $isi_artikel,
					'image_artikel' => $image_artikel,
					'tgl_artikel'   => $tgl_artikel
			);

			$this->limbah_model->insert($data, 'artikel');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan artikel!</div>');
			redirect('artikel_admin');	
		}
	}

	public function edit($id)
	{
		$this->rules();

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan! Admin';
			$where = array('id_artikel' => $id);
			$data['artikel'] = $this->limbah_model->tampil_data('artikel')->result();

			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/edit_artikel', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			$judul_artikel  = $this->input->post('judul_artikel');
			$isi_artikel    = $this->input->post('isi_artikel');
			$image_artikel  = $_FILES['image_artikel']['name'];
			$tgl_artikel    = $this->input->post('tgl_artikel');
		
			if ($image_artikel)
			{
				$config['allowed_types'] = 'jpeg'|'jpg'|'png';
				$config['max_size'] 	 = '2048';
				$config['upload_path']	 = './assets/img/';

				$this->load->library('upload', $config);

				//upload foto
				if ($this->upload->do_upload('image_artikel'))
				{
					$image_artikel=$this->upload->data('file_name');
					$this->db->set('image_artikel', $image_artikel);
				}
				else 
				{
					echo $this->upload->display_error;
				}
			}

			$data = array (
					'judul_artikel' => $judul_artikel,
					'isi_artikel'   => $isi_artikel,
					'tgl_artikel'   => $tgl_artikel
			);

			$where = array (
				'id_artikel' => $id
			);

			$this->limbah_model->update('artikel', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Artikel berhasil diubah!</div>');
			redirect('artikel_admin');	
		}
}

	public function rules()
	{
		$this->form_validation->set_rules('judul_artikel','judul_artikel','required',  ['required' => 'Judul Artikel harus diisi']);
		$this->form_validation->set_rules('isi_artikel','isi_artikel','required', ['required' => 'Isi Artikel harus diisi!']);
	}

	public function detail($id)
	{
		$data['title'] = 'Kedan Medan! Admin';
		$data['detail'] = $this->limbah_model->ambil_id_artikel($id);
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/detail_artikel', $data);
		$this->load->view('templates/footer_admin');
	}
}