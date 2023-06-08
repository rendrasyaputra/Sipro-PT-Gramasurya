	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalumum extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalUmum_m', 'ju');
    }

	public function index()
	{
		$query = $this->ju->get();
		$data = array(
			'judul' => 'Jadwal Umum Cetak',
			'ju' => $query->result(),
		);
					$nilai = 0;					
					$banding_id[-1]=null;

					$tgl_cover_72 = "";		
					$tgl_isi_72 = "";
					$tgl_cover_74a = "";		
					$tgl_isi_74a = "";
					$tgl_cover_74b = "";		
					$tgl_isi_74b = "";
					$tgl_cover_102a = "";		
					$tgl_isi_102a = "";
					$tgl_cover_102b = "";		
					$tgl_isi_102b = "";
					$tgl_cover_tokko = "";		
					$tgl_isi_tokko = "";

					foreach($data["ju"] as $s => $row){
										// var_dump($row->id_order);

										$id_order = $row->id_order;
										$banding_id[$nilai] = $id_order;

										$ambil = $this->ju->cek_72($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_72 = $sq->tanggal_pelaksanaan_72;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_72 = $sq->tanggal_pelaksanaan_72;
																	}				
																}
										$ambil = $this->ju->cek_74a($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_74a = $sq->tanggal_pelaksanaan_74a;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_74a = $sq->tanggal_pelaksanaan_74a;
																	}				
																}

										$ambil = $this->ju->cek_74b($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_74b = $sq->tanggal_pelaksanaan_74b;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_74b = $sq->tanggal_pelaksanaan_74b;
																	}				
																}
										$ambil = $this->ju->cek_102a($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_102a = $sq->tanggal_pelaksanaan_102a;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_102a = $sq->tanggal_pelaksanaan_102a;
																	}				
																}
										$ambil = $this->ju->cek_102b($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_102b = $sq->tanggal_pelaksanaan_102b;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_102b = $sq->tanggal_pelaksanaan_102b;
																	}				
																}
										$ambil = $this->ju->cek_tokko($id_order)->result();													
																foreach($ambil as $sq) {				
																	if($sq->jenis_cetakan == "Cover") {
																		$tgl_cover_tokko = $sq->tanggal_pelaksanaan_tokko;
																	}	
																	if($sq->jenis_cetakan == "Isi") {
																		$tgl_isi_tokko = $sq->tanggal_pelaksanaan_tokko;
																	}				
																}
																

										if($banding_id[$nilai] != $banding_id[$nilai-1]){
											$data["tgl_cover_72"][$nilai] = $tgl_cover_72;																 					
											$data["tgl_isi_72"][$nilai] = $tgl_isi_72;																 						
											$data["tgl_cover_74a"][$nilai] = $tgl_cover_74a;																 					
											$data["tgl_isi_74a"][$nilai] = $tgl_isi_74a;
											$data["tgl_cover_74b"][$nilai] = $tgl_cover_74b;																 					
											$data["tgl_isi_74b"][$nilai] = $tgl_isi_74b;
											$data["tgl_cover_102a"][$nilai] = $tgl_cover_102a;																 					
											$data["tgl_isi_102a"][$nilai] = $tgl_isi_102a;		
											$data["tgl_cover_102b"][$nilai] = $tgl_cover_102b;																 					
											$data["tgl_isi_102b"][$nilai] = $tgl_isi_102b;		
											$data["tgl_cover_tokko"][$nilai] = $tgl_cover_tokko;																 					
											$data["tgl_isi_tokko"][$nilai] = $tgl_isi_tokko;											
						
											$nilai++;	
										}  			
						// reset
					$tgl_cover_72 = "";		
					$tgl_isi_72 = "";
					$tgl_cover_74a = "";		
					$tgl_isi_74a = "";
					$tgl_cover_74b = "";		
					$tgl_isi_74b = "";
					$tgl_cover_102a = "";		
					$tgl_isi_102a = "";
					$tgl_cover_102b = "";		
					$tgl_isi_102b = "";
					$tgl_cover_tokko = "";		
					$tgl_isi_tokko = "";																														   		

					}
					// var_dump($data["tgl_cover_72"]);die;




		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum',$data);
	}

	// public function index()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->ju->get();
	// 	$data = array(
	// 		'judul' => 'Jadwal Umum Cetak ',
	// 		'ju' => $query->result(),
	// 	);		

	// 	// ini dia 		
	// 	$nilai = 0;					
	// 	$nilai_mesin = 0;
	// 	$nilai_jadwal =0;

	// 	$mesin_72 = 0;
		
	// 	$banding_id=null;

	// 	$tanggal_laminasi = "";

	// 	$id_jadwal_laminasi_max = 0;

	// 	foreach($data["ju"] as $s => $row){
					

	// 				$id_order = $row->id_order;
	// 				$banding_id[$nilai] = $id_order;					
	// 				// ambil nilai id order								
					
	// 				// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
	// 				// data laminasi
	// 					$ambil_72 = $this->ju->ambil_data_mesin72($id_order)->result();
	// 					foreach($ambil_72 as $ju) {		
	// 						if($ju->tanggal_pelaksanaan != null and $ju->tanggal_pelaksanaan != "0000-00-00" and $ju->tanggal_pelaksanaan != $mesin_72[$nilai_mesin-1]){	
	// 							$tanggal_pelaksanaan .= $ju->tanggal_pelaksanaan.", <br>";
	// 						}
	// 						// if($sq->id_jadwal_laminasi > $id_jadwal_laminasi_max){
	// 						// 	$id_jadwal_laminasi_max = $sq->id_jadwal_laminasi;
	// 						// }
							
	// 						$mesin_72[$nilai_mesin] = $ju->tanggal_pelaksanaan;										
	// 						$nilai_mesin++;
	// 					}$nilai_mesin = 0;
											

	// 			if($banding_id[$nilai] != $banding_id[$nilai-1]){
	// 				$data["tanggal_pelaksanaan"][$nilai] = $tanggal_pelaksanaan;						 					

	// 				$nilai++;	
	// 			}  						 					
				
	// 			// // menangkap nilai id jadwal terkecil
	// 			// $data["id_jadwal_laminasi_max"][$nilai_jadwal] = $id_jadwal_laminasi_max;

	// 			// // reset nilai yang akan di foreaach
	// 			// $tanggal_laminasi = "";		

	// 			// $id_jadwal_laminasi_max = 0;
				
	// 			$nilai_jadwal++;
					
	// 	}
	// 		// var_dump($data["id_jadwal_mbo_max"]);die;
	// 		// var_dump($data["tanggal_mbo"]);
	// 		// die;


	// 	$this->template->load('cetak/template','cetak/jadwal_umum',$data);
	// }

	public function lihat_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Umum Cetak';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-lihat',$data);
	}
	public function edit_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Umum Cetak';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-edit',$data);
	}

	public function proses()
	{		
		if(isset($_POST['add72'])){							
			$inputan = $this->input->post(null, TRUE);
						
								// ini dia hehe
								if($inputan["target_72"] !=null){
									$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_72($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_72"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_72"] = "Cover";
												$this->ju->tambah_ju72($inputan);																											
											}else if($inputan["jenis_cetakan_72"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_72"] = "Isi";
												$this->ju->tambah_ju72($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";


		} else if(isset($_POST['add74a'])){							
			$inputan = $this->input->post(null, TRUE);
			
			
			// ini dia hehe
								if($inputan["target_74a"] !=null){
									$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_74a($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_74a"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_74a"] = "Cover";
												$this->ju->tambah_ju74a($inputan);																											
											}else if($inputan["jenis_cetakan_74a"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_74a"] = "Isi";
												$this->ju->tambah_ju74a($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}  else if(isset($_POST['add74b'])){							
			$inputan = $this->input->post(null, TRUE);

			// ini dia hehe
								if($inputan["target_74b"] !=null){
									$inputan["druk_74b"] = $inputan["target_74b"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_74b($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_74b"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_74b"] = "Cover";
												$this->ju->tambah_ju74b($inputan);																											
											}else if($inputan["jenis_cetakan_74b"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_74b"] = "Isi";
												$this->ju->tambah_ju74b($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['add102a'])){							
			$inputan = $this->input->post(null, TRUE);

			// ini dia hehe
								if($inputan["target_102a"] !=null){
									$inputan["druk_102a"] = $inputan["target_102a"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_102a($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_102a"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_102a"] = "Cover";
												$this->ju->tambah_ju102a($inputan);																											
											}else if($inputan["jenis_cetakan_102a"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_102a"] = "Isi";
												$this->ju->tambah_ju102a($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['add102b'])){							
			$inputan = $this->input->post(null, TRUE);

			// ini dia hehe
								if($inputan["target_102b"] !=null){
									$inputan["druk_102b"] = $inputan["target_102b"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_102b($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_102b"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_102b"] = "Cover";
												$this->ju->tambah_ju102b($inputan);																											
											}else if($inputan["jenis_cetakan_102b"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_102b"] = "Isi";
												$this->ju->tambah_ju102b($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['addtokko'])){							
			$inputan = $this->input->post(null, TRUE);

			// ini dia hehe
								if($inputan["target_tokko"] !=null){
									$inputan["druk_tokko"] = $inputan["target_tokko"] * $inputan["oplag"];
								}	

								// proses seleksi breeeeeh
								$cek_cover = null;
								$cek_isi = null;
								$ambil = $this->ju->cek_tokko($inputan["id_order"])->result();

								foreach($ambil as $sq){
										if($sq->jenis_cetakan == "Cover"){
											$cek_cover = "berisi";
										}
										if($sq->jenis_cetakan == "Isi"){
											$cek_isi = "berisi";
										}
								}						
											if($inputan["jenis_cetakan_tokko"] == "Cover" && $cek_cover != "berisi"){
												$inputan["jenis_cetakan_tokko"] = "Cover";
												$this->ju->tambah_jutokko($inputan);																											
											}else if($inputan["jenis_cetakan_tokko"] == "Isi" && $cek_isi != "berisi"){
												$inputan["jenis_cetakan_tokko"] = "Isi";
												$this->ju->tambah_jutokko($inputan);														
											}												
									echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
									echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			
			if($inputan["target_72"] !=null){
				$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
			}
			if($inputan["target_74a"] !=null){
				$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
			}
			$this->ju->edit_ju($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";
		}	
	}

}
