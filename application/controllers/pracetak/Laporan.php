<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
        $this->load->model('Laporan_m', 'laporan');
    }

	public function index()
	{
		check_not_login();
		$query = $this->laporan->get();
		$data = array(
			'judul' => 'Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan',$data);
	}

	public function edit_laporan($id)
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan($id);
		$data = array(
			'judul' => 'Edit Laporan Pracetak',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-edit',$data);
	}

	public function tambah_laporan($id)
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan($id);
		$data = array(
			'judul' => 'Lihat Laporan Pracetak',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-tambah',$data);
	}

	public function lihat_laporan($id)
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan($id);
		$data = array(
			'judul' => 'Lihat Laporan Pracetak',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-lihat',$data);
	}

	public function print_laporan($id)
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan($id);
		$data = array(
			'judul' => 'Print Laporan Pracetak',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-print',$data);
	}
	public function filter_bulan()
	{
		check_not_login();
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$query = $this->laporan->filter_bulan($bulan, $tahun);
		$data = array(
			'judul' => 'Laporan',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-bulan',$data);
	}
	public function filter_hari()
	{
		check_not_login();
		$hari = $this->input->post('hari');
		$query = $this->laporan->filter_hari($hari);
		$data = array(
			'judul' => 'Laporan',
			'hari' => $hari,
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-hari',$data);
	}
	public function filter_tahun()
	{
		check_not_login();
		$tahun = $this->input->post('tahun');
		$query = $this->laporan->filter_tahun($tahun);
		$data = array(
			'judul' => 'Laporan',
			'tahun' => $tahun,
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-tahun',$data);
	}
	public function lihat_laporan_bulan($id)
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan($id);
		$data = array(
			'judul' => 'Lihat Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-lihat-bulan',$data);
	}
	public function proses()
	{		
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);

			$inputan['status_order'] = "ctcp";
			if($inputan['status_laporan_pracetak'] == "pracetak"){
					$inputan['status_order'] = "pracetak";					
			}

			$this->laporan->edit_laporan($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('pracetak/laporan')."'; </script>"; 					

		} 								
	}

}	
			