<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Imposisi extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
        check_pracetak_imposisi();
		$this->load->model('Imposisi_m', 'imposisi');
    }

	public function index()
	{	
		check_not_login();
		$query = $this->imposisi->get();
		$data = array(
			'judul' => 'Imposisi',
			'imposisi' => $query->result(),
		);
		//  var_dump($query->result_array()[0]['id_order']);
		//  die;
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi',$data);
	}
	public function filter_bulan()
	{
		check_not_login();
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$query = $this->imposisi->filter_bulan($bulan, $tahun);
		$data = array(
			'judul' => 'Imposisi',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'imposisi' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-bulan',$data);
	}
	public function tambah_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->tampil_tambah_imposisi($id);
		$data = array(
			'judul' => 'Tambah Imposisi',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-tambah',$data);		
	}

	public function print_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Print Imposisi Pracetak',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-print',$data);		
	}
	

	public function lihat_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Lihat Imposisi Pracetak',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-lihat',$data);		
	}

	public function edit_imposisi($id)
	{

		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Edit Imposisi Pracetak',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-edit',$data);		
	}


	
	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
						
			$inputan['status_order'] = "marketing";
			if($inputan['status_imposisi_cover'] !=null && $inputan['status_imposisi_isi'] !=null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi";
			}
			else if($inputan['status_imposisi_cover'] !=null ){		
				$inputan['status_order'] = "imposisi";		
				$inputan['imposisi_status'] = "imposisi cover";
			}
			else if($inputan['status_imposisi_isi'] !=null ){	
				$inputan['status_order'] = "imposisi";					
				$inputan['imposisi_status'] = "imposisi isi";
			}
			else
				$inputan['imposisi_status'] = "";
			
			if($inputan['cover1plat1'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat1'];
			}
			if($inputan['cover1plat2'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat2'];
			}	
			if($inputan['cover1plat3'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat3'];
			}
			
			if($inputan['cover2plat1'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat1'];
			}
			if($inputan['cover2plat2'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat2'];
			}	
			if($inputan['cover2plat3'] !=null){
				$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat3'];
			}
			


			if($inputan['isi1plat1'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat1'];
			}
			if($inputan['isi1plat2'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat2'];
			}	
			if($inputan['isi1plat3'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat3'];
			}
			
			if($inputan['isi2plat1'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat1'];
			}
			if($inputan['isi2plat2'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat2'];
			}	
			if($inputan['isi2plat3'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat3'];
			}

			if($inputan['isi3plat1'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat1'];
			}
			if($inputan['isi3plat2'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat2'];
			}	
			if($inputan['isi3plat3'] !=null){
				$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat3'];
			}



			if($inputan["cover1plat1"] && $inputan["cover1warna1"] !=null ){
				$inputan["cover1set1"] = $inputan["cover1plat1"] / $inputan["cover1warna1"] ;
			}
			if($inputan["cover1plat2"] && $inputan["cover1warna2"] !=null ){
				$inputan["cover1set2"] = $inputan["cover1plat2"] / $inputan["cover1warna2"] ;
			}
			if($inputan["cover1plat3"] && $inputan["cover1warna3"] !=null ){
				$inputan["cover1set3"] = $inputan["cover1plat3"] / $inputan["cover1warna3"] ;
			}

			if($inputan["cover2plat1"] && $inputan["cover2warna1"] !=null ){
				$inputan["cover2set1"] = $inputan["cover2plat1"] / $inputan["cover2warna1"] ;
			}
			if($inputan["cover2plat2"] && $inputan["cover2warna2"] !=null ){
				$inputan["cover2set2"] = $inputan["cover2plat2"] / $inputan["cover2warna2"] ;
			}
			if($inputan["cover2plat3"] && $inputan["cover2warna3"] !=null ){
				$inputan["cover2set3"] = $inputan["cover2plat3"] / $inputan["cover2warna3"] ;
			}



			if($inputan["isi1plat1"] && $inputan["isi1warna1"] !=null ){
				$inputan["isi1set1"] = $inputan["isi1plat1"] / $inputan["isi1warna1"] ;
			}
			if($inputan["isi1plat2"] && $inputan["isi1warna2"] !=null ){
				$inputan["isi1set2"] = $inputan["isi1plat2"] / $inputan["isi1warna2"] ;
			}
			if($inputan["isi1plat3"] && $inputan["isi1warna3"] !=null ){
				$inputan["isi1set3"] = $inputan["isi1plat3"] / $inputan["isi1warna3"] ;
			}

			if($inputan["isi2plat1"] && $inputan["isi2warna1"] !=null ){
				$inputan["isi2set1"] = $inputan["isi2plat1"] / $inputan["isi2warna1"] ;
			}
			if($inputan["isi2plat2"] && $inputan["isi2warna2"] !=null ){
				$inputan["isi2set2"] = $inputan["isi2plat2"] / $inputan["isi2warna2"] ;
			}
			if($inputan["isi2plat3"] && $inputan["isi2warna3"] !=null ){
				$inputan["isi2set3"] = $inputan["isi2plat3"] / $inputan["isi2warna3"] ;
			}

			if($inputan["isi3plat1"] && $inputan["isi3warna1"] !=null ){
				$inputan["isi3set1"] = $inputan["isi3plat1"] / $inputan["isi3warna1"] ;
			}
			if($inputan["isi3plat2"] && $inputan["isi3warna2"] !=null ){
				$inputan["isi3set2"] = $inputan["isi3plat2"] / $inputan["isi3warna2"] ;
			}
			if($inputan["isi3plat3"] && $inputan["isi3warna3"] !=null ){
				$inputan["isi3set3"] = $inputan["isi3plat3"] / $inputan["isi3warna3"] ;
			}
			


			if($inputan["cover1plat1"] !=null ){
				$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat1"] ;
			}
			if($inputan["cover1plat2"] !=null ){
				$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat2"] ;
			}
			if($inputan["cover1plat3"] !=null ){
				$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat3"] ;
			}

			if($inputan["cover2plat1"] !=null ){
				$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat1"] ;
			}
			if($inputan["cover2plat2"] !=null ){
				$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat2"] ;
			}
			if($inputan["cover2plat3"] !=null ){
				$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat3"] ;
			}



			if($inputan["isi1plat1"] !=null ){
				$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat1"] ;
			}
			if($inputan["isi1plat2"] !=null ){
				$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat2"] ;
			}
			if($inputan["isi1plat3"] !=null ){
				$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat3"] ;
			}

			if($inputan["isi2plat1"] !=null ){
				$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat1"] ;
			}
			if($inputan["isi2plat2"] !=null ){
				$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat2"] ;
			}
			if($inputan["isi2plat3"] !=null ){
				$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat3"] ;
			}

			if($inputan["isi3plat1"] !=null ){
				$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat1"] ;
			}
			if($inputan["isi3plat2"] !=null ){
				$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat2"] ;
			}
			if($inputan["isi3plat3"] !=null ){
				$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat3"] ;
			}


			// if($inputan['isi1plat1'] !=null && $inputan['isi1plat2'] !=null && $inputan['isi1plat3'] !=null && $inputan['isi2plat1'] !=null && $inputan['isi2plat2'] !=null && $inputan['isi2plat3'] !=null && $inputan['isi3plat1'] !=null && $inputan['isi3plat2'] !=null && $inputan['isi3plat3'] !=null){
			// 	$inputan['total_plat_isi'] = $inputan['isi1plat1'] + $inputan['isi1plat2'] + $inputan['isi1plat3'] + $inputan['isi2plat1'] + $inputan['isi2plat2'] + $inputan['isi2plat3'] + $inputan['isi3plat1'] + $inputan['isi3plat2'] +$inputan['isi3plat3'] ;
			// }

			$this->imposisi->tambah_imposisi($inputan);							
			$this->imposisi->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('pracetak/imposisi')."'; </script>";

				
		} 
		else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			
			$inputan['status_order'] = "marketing";
			if($inputan['status_imposisi_cover'] !=null && $inputan['status_imposisi_isi'] !=null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi";
			}
			else if($inputan['status_imposisi_cover'] !=null ){	
				$inputan['status_order'] = "imposisi";			
				$inputan['imposisi_status'] = "imposisi cover";
			}
			else if($inputan['status_imposisi_isi'] !=null ){
				$inputan['status_order'] = "imposisi";						
				$inputan['imposisi_status'] = "imposisi isi";
			}
			else
				$inputan['imposisi_status'] = "";

			
				if($inputan['cover1plat1'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat1'];
				}
				if($inputan['cover1plat2'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat2'];
				}	
				if($inputan['cover1plat3'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover1plat3'];
				}
				
				if($inputan['cover2plat1'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat1'];
				}
				if($inputan['cover2plat2'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat2'];
				}	
				if($inputan['cover2plat3'] !=null){
					$inputan["total_plat_cover"] = $inputan["total_plat_cover"] + $inputan['cover2plat3'];
				}
				
	
	
				if($inputan['isi1plat1'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat1'];
				}
				if($inputan['isi1plat2'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat2'];
				}	
				if($inputan['isi1plat3'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi1plat3'];
				}
				
				if($inputan['isi2plat1'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat1'];
				}
				if($inputan['isi2plat2'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat2'];
				}	
				if($inputan['isi2plat3'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi2plat3'];
				}
	
				if($inputan['isi3plat1'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat1'];
				}
				if($inputan['isi3plat2'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat2'];
				}	
				if($inputan['isi3plat3'] !=null){
					$inputan["total_plat_isi"] = $inputan["total_plat_isi"] + $inputan['isi3plat3'];
				}
	
	
	
				if($inputan["cover1plat1"] && $inputan["cover1warna1"] !=null ){
					$inputan["cover1set1"] = $inputan["cover1plat1"] / $inputan["cover1warna1"] ;
				}
				if($inputan["cover1plat2"] && $inputan["cover1warna2"] !=null ){
					$inputan["cover1set2"] = $inputan["cover1plat2"] / $inputan["cover1warna2"] ;
				}
				if($inputan["cover1plat3"] && $inputan["cover1warna3"] !=null ){
					$inputan["cover1set3"] = $inputan["cover1plat3"] / $inputan["cover1warna3"] ;
				}
	
				if($inputan["cover2plat1"] && $inputan["cover2warna1"] !=null ){
					$inputan["cover2set1"] = $inputan["cover2plat1"] / $inputan["cover2warna1"] ;
				}
				if($inputan["cover2plat2"] && $inputan["cover2warna2"] !=null ){
					$inputan["cover2set2"] = $inputan["cover2plat2"] / $inputan["cover2warna2"] ;
				}
				if($inputan["cover2plat3"] && $inputan["cover2warna3"] !=null ){
					$inputan["cover2set3"] = $inputan["cover2plat3"] / $inputan["cover2warna3"] ;
				}
	
	
	
				if($inputan["isi1plat1"] && $inputan["isi1warna1"] !=null ){
					$inputan["isi1set1"] = $inputan["isi1plat1"] / $inputan["isi1warna1"] ;
				}
				if($inputan["isi1plat2"] && $inputan["isi1warna2"] !=null ){
					$inputan["isi1set2"] = $inputan["isi1plat2"] / $inputan["isi1warna2"] ;
				}
				if($inputan["isi1plat3"] && $inputan["isi1warna3"] !=null ){
					$inputan["isi1set3"] = $inputan["isi1plat3"] / $inputan["isi1warna3"] ;
				}
	
				if($inputan["isi2plat1"] && $inputan["isi2warna1"] !=null ){
					$inputan["isi2set1"] = $inputan["isi2plat1"] / $inputan["isi2warna1"] ;
				}
				if($inputan["isi2plat2"] && $inputan["isi2warna2"] !=null ){
					$inputan["isi2set2"] = $inputan["isi2plat2"] / $inputan["isi2warna2"] ;
				}
				if($inputan["isi2plat3"] && $inputan["isi2warna3"] !=null ){
					$inputan["isi2set3"] = $inputan["isi2plat3"] / $inputan["isi2warna3"] ;
				}
	
				if($inputan["isi3plat1"] && $inputan["isi3warna1"] !=null ){
					$inputan["isi3set1"] = $inputan["isi3plat1"] / $inputan["isi3warna1"] ;
				}
				if($inputan["isi3plat2"] && $inputan["isi3warna2"] !=null ){
					$inputan["isi3set2"] = $inputan["isi3plat2"] / $inputan["isi3warna2"] ;
				}
				if($inputan["isi3plat3"] && $inputan["isi3warna3"] !=null ){
					$inputan["isi3set3"] = $inputan["isi3plat3"] / $inputan["isi3warna3"] ;
				}
							
	
	
				if($inputan["cover1plat1"] !=null ){
					$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat1"] ;
				}
				if($inputan["cover1plat2"] !=null ){
					$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat2"] ;
				}
				if($inputan["cover1plat3"] !=null ){
					$inputan["jumlahplatecover1"] = $inputan["jumlahplatecover1"] + $inputan["cover1plat3"] ;
				}
	
				if($inputan["cover2plat1"] !=null ){
					$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat1"] ;
				}
				if($inputan["cover2plat2"] !=null ){
					$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat2"] ;
				}
				if($inputan["cover2plat3"] !=null ){
					$inputan["jumlahplatecover2"] = $inputan["jumlahplatecover2"] + $inputan["cover2plat3"] ;
				}
	
	
	
				if($inputan["isi1plat1"] !=null ){
					$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat1"] ;
				}
				if($inputan["isi1plat2"] !=null ){
					$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat2"] ;
				}
				if($inputan["isi1plat3"] !=null ){
					$inputan["jumlahplateisi1"] = $inputan["jumlahplateisi1"] + $inputan["isi1plat3"] ;
				}
	
				if($inputan["isi2plat1"] !=null ){
					$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat1"] ;
				}
				if($inputan["isi2plat2"] !=null ){
					$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat2"] ;
				}
				if($inputan["isi2plat3"] !=null ){
					$inputan["jumlahplateisi2"] = $inputan["jumlahplateisi2"] + $inputan["isi2plat3"] ;
				}
	
				if($inputan["isi3plat1"] !=null ){
					$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat1"] ;
				}
				if($inputan["isi3plat2"] !=null ){
					$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat2"] ;
				}
				if($inputan["isi3plat3"] !=null ){
					$inputan["jumlahplateisi3"] = $inputan["jumlahplateisi3"] + $inputan["isi3plat3"] ;
				}	
			
			$this->imposisi->edit_imposisi($inputan);
			$this->imposisi->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('pracetak/imposisi')."'; </script>";; 					
		}
		
	
	}

}
