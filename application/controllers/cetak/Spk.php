<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Laporan Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak',$data);
	}
	public function display_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Laporan Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-display',$data);
	}
	public function lihat_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Laporan Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-lihat',$data);
	}
	public function edit_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Laporan Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-edit',$data);
	}

}
