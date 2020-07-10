<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class _petugas extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Kedan Medan! Petugas';
		$data['users'] = $this->db->get_where('users',['email_user' => $this->session->userdata('email_user')])->row_array();
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_petugas', $data);
		$this->load->view('petugas/dashboard', $data);
		$this->load->view('templates/footer_admin');
	}

	function edit() 
	{
		$data['title'] = 'Kedan Medan! Petugas';
		$data['users'] = $this->db->get_where('users',['email_user' => $this->session->userdata('email_user')])->row_array();

		$this->form_validation->set_rules('nama_user', 'nama_user','trim|required', [
			'required' => 'Nama harus diisi!'
			]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_petugas', $data);
			$this->load->view('petugas/edit', $data);
			$this->load->view('templates/footer_admin');
		} 
		else 
		{
			$nama_user  = $this->input->post('nama_user');
			$email_user  = $this->input->post('email_user');

			// cek upload gambar
			$upload_image = $_FILES['image_user']['nama_user'];

			if($upload_image) 
			{
				$config['allowed_types'] = 'jpg'|'png';
				$config['max_size'] 	 = '2048';
				$config['upload_path'] 	 = './assets/img/user/';

				$this->load->library('upload', $config);

				//upload foto
				if($this->upload->do_upload('image_user')) 
				{
					$new_image = $this->upload->data('file_name');
					$this->db->set('image_user', $new_image);
				}
				else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set('nama_user', $nama_user);
			$this->db->where('email_user',$email_user);
			$this->db->update('users');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil di update!</div>');
			redirect('_petugas');

		}
	}

	public function ubah_password()
	{
		$data['title'] = 'Kedan Medan! Petugas';
		$data['users'] = $this->db->get_where('users', ['email_user' => $this->session->userdata('email_user')])->row_array();

		$this->form_validation->set_rules('password_lama', 'password_lama', 'required|trim', [
			'required'   => 'Password lama harus diisi!']);
		$this->form_validation->set_rules('password_baru1','password_baru1', 'required|trim|min_length[6]|matches[password_baru2]', [
			'required'   => 'Password harus diisi!',
			'matches'    => 'Password tidak sesuai!',
			'min_length' => 'Password terlalu pendek!'
			]);
		$this->form_validation->set_rules('password_baru2','password_baru2', 'required|trim|matches[password_baru1]',[
			'required' => 'Ulangi Password harus diisi!',
			'matches'  => 'Password tidak sesuai!']);

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_petugas', $data);
			$this->load->view('petugas/edit', $data);
			$this->load->view('templates/footer_admin');	
		}
		else
		{
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru1');
			if(!password_verify($password_lama, $data['users']['password']))
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
				redirect('petugas/edit');
			}
			else
			{
				if ($password_lama == $password_baru)
				{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password tidak boleh sama!</div>');
					redirect('petugas/edit');
				}
				else
					//password benar
				{
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email_user', $this->session->userdata('email_user'));
					$this->db->update('users');

					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
					redirect('_petugas');
				}
			}
		}
	}
}