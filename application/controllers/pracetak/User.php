<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_pracetak_admin();
		$this->load->model('user_m');	
		$this->load->library('form_validation');	
	 }

	public function index()
	{
		check_not_login();
		//$this->load->model('user_m');
		$data['row'] = $this->user_m->get();
		$data['judul'] = 'User';
		$this->template->load('pracetak/template','pracetak/user/user',$data );
	}
	
	public function tambah_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_message('required', '%s masih kosong');

		if ($this->form_validation->run() == FALSE)
		{
			$data['judul'] = 'Tambah User';
			$this->template->load('pracetak/template','pracetak/user/tambah_user', $data );
		}
		else
		{
				$post = $this->input->post(null, TRUE);
				$this->user_m->tambah_user($post);
				if($this->db->affected_rows() > 0){
					echo "<script>alert('Data Berhasil Disimpan');</script>";
				}
				echo "<script>window.location='".site_url('pracetak/User/index')."';</script>";

		}
		
	}

	public function hapus_user()
	{
		$id = $this->input->post('id_user');
		$this->user_m->hapus_user($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('pracetak/User/index')."';</script>";
	}
	
	public function edit_user($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		if($this->input->post('password')){
			$this->form_validation->set_rules('password', 'Password');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		if($this->input->post('passconf')){
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		$this->form_validation->set_message('required', '%s masih kosong');

		if ($this->form_validation->run() == FALSE)
		{
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0 ){
				$data['row'] = $query->row();
				$data['judul'] = 'Edit User';
				$this->template->load('pracetak/template','pracetak/user/edit_user', $data );	
			}else{
				echo "<script>alert('Data Tidak Ditemukan');";
				echo "window.location='".site_url('pracetak/User/index')."';</script>";
			}
		}
		else
		{
				$post = $this->input->post(null, TRUE);
				$this->user_m->edit_user($post);
				if($this->db->affected_rows() > 0){
					echo "<script>alert('Data Berhasil Disimpan');</script>";
				}
				echo "<script>window.location='".site_url('pracetak/User/index')."';</script>";

		}
	}
	
}
