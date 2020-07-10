<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_admin extends CI_Controller 
{

	public function index()
	{
		$data['title'] = 'Kedan Medan! Admin';
		$this->db->join('level','users.id_level =level.id_level');
		$data['users'] = $this->limbah_model->tampil_data('users')->result(); 
		$data['level'] = $this->limbah_model->tampil_data('level')->result(); 

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/pengguna', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah_pengguna()
	{
		$this->rules();

		if($this->form_validation->run() == false) 
		{
			$data['title'] = 'Kedan Medan! Admin';
			$data['users'] = $this->limbah_model->tampil_data('users')->result(); 
			$data['level'] = $this->limbah_model->tampil_data('level')->result_array();
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/tambah_pengguna', $data);
			$this->load->view('templates/footer_admin');
		} 
			else
			{
				$id_level   = $this->input->post('id_level');
				$nama_user  = $this->input->post('nama_user');
				$email_user = $this->input->post('email_user');
				$phone_user = $this->input->post('phone_user');
				$image_user = $_FILES['image_user']['name'];
				$password   = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
				$tgl_daftar = $this->input->post('tgl_daftar');

				if($image_user=='')
				{}
				else
				{
					$config ['upload_path'] = '.assets/img/';
					$config ['allowed_types'] = 'jpg|jpeg|png';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image_user'))
					{
						echo "Foto user gagal di upload!";
					}
					else
					{
						$image_user = $this->upload->data('file_name');
					}
				}

				$data = array (
					'id_level'   => $id_level,
					'nama_user'  => $nama_user,
					'email_user' => $email_user,
					'phone_user' => $phone_user,
					'image_user' => $image_user,
					'password'   => $password,
					'tgl_daftar' => $tgl_daftar,
				);

				$this->limbah_model->insert($data,'users');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil ditambahkan oleh admin</div>');
					redirect('pengguna_admin');
			}
	}

	public function edit($id)
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Kedan Medan! Admin';
			$where = array('id_user' => $id);
			$data['users'] = $this->db->query("SELECT * FROM users users, level level WHERE users.id_level=level.id_level AND users.id_user='$id'")->result();
			$data['level'] = $this->limbah_model->tampil_data('level')->result_array();

			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/edit_pengguna', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			$id_user    = $this->input->post('id_user');
			$id_level   = $this->input->post('id_level');
			$nama_user  = $this->input->post('nama_user');
			$email_user = $this->input->post('email_user');
			$phone_user = $this->input->post('phone_user');
			$image_user = $_FILES['image_user']['name'];
			$tgl_daftar = $this->input->post('tgl_daftar');

			if($image_user)
			{
				$config ['upload_path'] = '.assets/img/';
				$config ['allowed_types'] = 'jpg|jpeg|png';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image_user'))
				{
					$image_user = $this->upload->data('file_name');
					$this->db->set('image_user', $image_user);
				}
				else
				{
					echo $this->upload->display_error;
				}
			}

			$data = array (
				'id_user'    => $id_user,
				'id_level'   => $id_level,
				'nama_user'  => $nama_user,
				'email_user' => $email_user,
				'phone_user' => $phone_user,
				'tgl_daftar' => $tgl_daftar,
			);

			$where = array (
				'id_user' => $id_user
			);

			$this->limbah_model->update('users', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil diubah oleh admin</div>');
			redirect('pengguna_admin');
		}
		
	}

	public function edit_password($id)
	{
		$this->rules();

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Kedan Medan! Admin';
			$where = array('id_user' => $id);
			$data['users'] = $this->db->query("SELECT * FROM users users, level level WHERE users.id_level=level.id_level AND users.id_user='$id'")->result();
			$data['users'] = $this->limbah_model->tampil_data('users')->result_array();


			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/edit_pengguna', $data);
			$this->load->view('templates/footer_admin');	
		}
		else
		{
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru1');
			if(!password_verify($password_lama, $data['users']['password']))
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
				redirect('pengguna_admin/admin_edit');
			}
			else
			{
				if ($password_lama == $password_baru)
				{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password tidak boleh sama!</div>');
					redirect('pengguna_admin/admin_edit');
				}
				else
					//password benar
				{
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email_user', $this->session->userdata('email_user'));
					$this->db->update('users');

					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
					redirect('pengguna_admin');
				}
			}
		}
	}

	function rules()
	{
		$this->form_validation->set_rules('id_level','id_level','required',  ['required' => 'Level pengguna harus dipilih!']);
		$this->form_validation->set_rules('nama_user','nama_user','required|trim',  ['required' => 'Nama harus diisi!']);
		$this->form_validation->set_rules('email_user','email_user','required|trim|valid_email|is_unique[users.email_user]', [
			'required'    => 'Email harus diisi!',
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
		$this->form_validation->set_rules('tgl_daftar','tgl_daftar','required',  ['required' => 'Tanggal pendafaran harus dipilih!']);
	}
}

