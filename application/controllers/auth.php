<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email_user','email_user','trim|required|valid_email', [
			'required' 	  => 'Email harus diisi!',
			'valid_email' => 'Email tidak sesuai!'
			]);
		$this->form_validation->set_rules('password','password','trim|required', [
			'required' => 'Password harus diisi!'
			]);

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan!';
			$this->load->view('templates/header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/footer', $data);
		} 
		else 
		{

			//jika sukses
			$this->_login();
		}
	}

	// methode login tidak bisa dibuka melalui url
	private function _login()
	{
		$email_user = $this->input->post('email_user');
		$password   = $this->input->post('password');

		$users = $this->db->get_where('users', ['email_user' => $email_user])->row_array();

		//cek users
		if($users) {
				//cek password
				if (password_verify($password, $users['password'])) 
				{
					$data = 
					[
						'email_user' => $users['email_user'],
						'id_level'   => $users['id_level'],
					];
						$this->session->set_userdata($data);
						if ($users['id_level'] == 1) 
						{
							redirect('admin');
						} 
						else if ($users['id_level'] == 2) 
						{
							redirect('_petugas');
						} 
						else 
						{
						redirect('user');
						}
				} 
				else 
				{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('auth');
				}
		} 
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('auth');
		}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama_user','nama_user','required|trim',  ['required' => 'Nama harus diisi!']);
		$this->form_validation->set_rules('email_user','email_user','required|trim|valid_email|is_unique[users.email_user]', [
			'required' 	  => 'Email harus diisi!',
			'is_unique'   => 'Email sudah pernah digunakan!',
			'valid_email' => 'Email tidak sesuai!'
			]);
		$this->form_validation->set_rules('phone_user','phone_user','required|trim', ['required' => 'No. Telepon harus diisi!']);
		$this->form_validation->set_rules('password1','password','required|trim|min_length[6]|matches[password2]', [
			'required'   => 'Password harus diisi!',
			'matches'    => 'Password tidak sesuai!',
			'min_length' => 'Password terlalu pendek!' 
			]);
		$this->form_validation->set_rules('password2','password','required|trim|matches[password1]');


		if($this->form_validation->run() == false) 
		{
			$data['title'] = 'Kedan Medan!';
			$this->load->view('templates/header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/footer');

		} else {
			// insert data ke database
			$data = [
				'id_level'   => 2,
				'nama_user'  => htmlspecialchars($this->input->post('nama_user',true)),
				'email_user' => htmlspecialchars($this->input->post('email_user',true)),
				'phone_user' => $this->input->post('phone_user'),
				'image_user' => 'default.jpg',
				'password'   => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'tgl_daftar' => $this->input->post('tgl_daftar')
			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dibuat. Silahkan login!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email_user');
		$this->session->unset_userdata('id_level');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
			redirect('auth');
	}
}
