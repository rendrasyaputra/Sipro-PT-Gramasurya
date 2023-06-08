<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaycetak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DisplayCetak_m', 'dc');
    }

	public function index()
	{
		// check_already_login_cetak();
		$query = $this->dc->get();
		$data = array(
			'judul' => 'Display Cetak',
			'dc' => $query->result(),
		);
		// $data['judul'] = 'Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak',$data);
	}
	public function lihat_dc($id)
	{
		// check_already_login_cetak();
		$query = $this->dc->get_dc($id);
		$data = array(
			'judul' => 'Display Cetak Lihat',
			'dc' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-lihat',$data);
	}
	
	public function edit_dc($id)
	{
		$query = $this->dc->get_dc($id);
		$data = array(
			'judul' => 'Display Cetak Edit',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-edit',$data);
	}

	public function tambah_dc($id)
	{
		$query = $this->dc->get_tambahdc($id);
		$data = array(
			'judul' => 'Display Cetak Tambah',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-tambah',$data);
	}
	

	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			
			$inputan['status_umum'] = "pracetak";
			if($inputan['status_cetak_cover'] !=null && $inputan['status_cetak_isi'] !=null){
					$inputan['status_umum'] = "cetak";
					$inputan['status_cetak'] = "cetak";
			}
			else if($inputan['status_cetak_cover'] !=null ){	
				$inputan['status_umum'] = "cetak";	
				$inputan['status_cetak'] = "cetak cover";

			}
			else if($inputan['status_cetak_isi'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak isi";

			}else if($inputan['status_cetak'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak";

			}
			else
				$inputan['status_cetak'] = "";

			$this->dc->status_umum($inputan);							
			$this->dc->tambah_dc($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";

		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			$inputan['status_umum'] = "pracetak";
			if($inputan['status_cetak_cover'] !=null && $inputan['status_cetak_isi'] !=null){
					$inputan['status_umum'] = "cetak";
					$inputan['status_cetak'] = "cetak";
			}
			else if($inputan['status_cetak_cover'] !=null ){	
				$inputan['status_umum'] = "cetak";	
				$inputan['status_cetak'] = "cetak cover";

			}
			else if($inputan['status_cetak_isi'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak isi";

			}else if($inputan['status_cetak'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak";

			}
			else
				$inputan['status_cetak'] = "";

			$this->dc->status_umum($inputan);							
			$this->dc->edit_dc($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";
		}	
	}

}
