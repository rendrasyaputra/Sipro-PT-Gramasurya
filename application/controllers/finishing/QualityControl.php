<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityControl extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('QualityControl_m', 'qc');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->qc->get();
		$data = array(
			'judul' => 'Quality Control',
			'qc' => $query->result(),
		);		
		$this->load->model('FinishingAkhir_m');

		
		// ini dia 		
		$nilai = 0;										
		
		$banding_id[-1]=null;

		$total_binding = 0;
		$total_jahit = 0;
		$total_hardcover = 0;
	

		foreach($data["qc"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();						
						foreach($ambil_binding as $sq) {																					
								$total_binding += $sq->hasil_1;
								$total_binding += $sq->hasil_2;
								$total_binding += $sq->hasil_3;
								$total_binding += $sq->hasil_4;					
						}
						

					// data jahit
						$ambil_jahit = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();						
						foreach($ambil_jahit as $sq) {																					
								$total_jahit += $sq->hasil_1;
								$total_jahit += $sq->hasil_2;
								$total_jahit += $sq->hasil_3;
								$total_jahit += $sq->hasil_4;					
						}

					// data hardcover
						$ambil_hardcover = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();						
						foreach($ambil_hardcover as $sq) {																					
								$total_hardcover += $sq->hasil_1;
								$total_hardcover += $sq->hasil_2;
								$total_hardcover += $sq->hasil_3;
								$total_hardcover += $sq->hasil_4;					
						}
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["total_binding"][$nilai] = $total_binding;					
					$data["total_jahit"][$nilai] = $total_jahit;					 					
					$data["total_hardcover"][$nilai] = $total_hardcover;
					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 											

				// reset nilai yang akan di foreaach
				$total_binding = 0;
				$total_jahit = 0;																	
				$total_hardcover = 0;	
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}

		// var_dump($data["tanggal_jahit"]);die;
					   		

		



		$this->template->load('finishing/template','finishing/quality_control/quality_control',$data);
	}	

	public function proses()
	{		

		$inputan = $this->input->post(null, TRUE);


		
			// prosess ubah status umum						
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
																						
												
												// deklarasi status umum baru
												if($inputan["status"]  == "diterima" || $inputan["status"]  == "ditolak"){
													$inputan["status_umum"] = "quality control";
												}else{
													
													$this->load->model('FinishingAkhir_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_binding = "";
																		$tanggal_hardcover = "";
																		$tanggal_jahit = "";
																		$tanggal_fa_potong = "";
																		$tanggal_sub = "";
																		$tanggal_klemseng = "";
																		$tanggal_spiral = "";

																		$status_binding = "";
																		$status_hardcover = "";
																		$status_jahit = "";
																		$status_fa_potong = "";
																		$status_sub = "";
																		$status_klemseng = "";
																		$status_spiral = "";

																								$ambil_binding = $this->FinishingAkhir_m->ambilIDOrder_binding($inputan["id_order"])->result();
																									foreach($ambil_binding as $sq) {
																										if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
																											$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
																										}
																										$status_binding = $sq->status_binding;
																										
																								}
																								$ambil_hardcover = $this->FinishingAkhir_m->ambilIDOrder_hardcover($inputan["id_order"])->result();
																									foreach($ambil_hardcover as $sq) {
																										if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
																											$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
																										}
																										$status_hardcover = $sq->status_hardcover;
																								}
																								$ambil_jahit = $this->FinishingAkhir_m->ambilIDOrder_jahit($inputan["id_order"])->result();
																									foreach($ambil_jahit as $sq) {
																										if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
																											$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
																										}
																										$status_jahit = $sq->status_jahit;
																								}
																								$ambil_fa_potong = $this->FinishingAkhir_m->ambilIDOrder_fa_potong($inputan["id_order"])->result();
																									foreach($ambil_fa_potong as $sq) {
																										if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
																											$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
																										}
																										$status_fa_potong = $sq->status_fa_potong;
																								}
																								$ambil_sub = $this->FinishingAkhir_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}

																								$ambil_klemseng = $this->FinishingAkhir_m->ambilIDOrder_klemseng($inputan["id_order"])->result();
																									foreach($ambil_klemseng as $sq) {
																										if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
																											$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
																										}
																										$status_klemseng = $sq->status_klemseng;
																								}
																								$ambil_spiral = $this->FinishingAkhir_m->ambilIDOrder_spiral($inputan["id_order"])->result();
																									foreach($ambil_spiral as $sq) {
																										if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
																											$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
																										}
																										$status_spiral = $sq->status_spiral;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_binding !=""){
																									$jumlah_mesin +=1;
																									if($status_binding == "binding"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_hardcover !=""){
																									$jumlah_mesin +=1;
																									if($status_hardcover == "hardcover"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_jahit !=""){
																									$jumlah_mesin +=1;
																									if($status_jahit == "jahit"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_fa_potong !=""){
																									$jumlah_mesin +=1;
																									if($status_fa_potong == "fa potong"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_klemseng !=""){
																									$jumlah_mesin +=1;
																									if($status_klemseng == "klemseng"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_spiral !=""){
																									$jumlah_mesin +=1;
																									if($status_spiral == "spiral"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing akhir";
																							}
																							else $inputan["status_umum"] = "finishing proses";																							
																	   

												}
												$this->qc->status_umum($inputan);
						   








		if(isset($_POST['edit'])){							
			// $inputan = $this->input->post(null, TRUE);
			$this->qc->proses_edit_qc($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/QualityControl/')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			// $inputan = $this->input->post(null, TRUE);
			$this->qc->proses_tambah_qc($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
				echo "<script>window.location='".site_url('finishing/QualityControl/')."'; </script>"; 
		}
	}

	public function lihat_qc($id)
	{
		// check_already_login_finishing();
		$query = $this->qc->lihat_qc($id);
		$data = array(
			'judul' => 'Quality Control',
			'qc' => $query->result(),
		);		

		$this->load->model('FinishingAkhir_m');

		// total binding
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();		
		$total_binding=0;		
		foreach($ambil as $sq) {					 
			 $total_binding += $sq->hasil_1;
			 $total_binding += $sq->hasil_2;
			 $total_binding += $sq->hasil_3;
			 $total_binding += $sq->hasil_4;
		} 		
		$data['total_binding'] = $total_binding;
		
		// total jahit
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();		
		$total_jahit=0;		
		foreach($ambil as $sq) {					 
			 $total_jahit += $sq->hasil_1;
			 $total_jahit += $sq->hasil_2;
			 $total_jahit += $sq->hasil_3;
			 $total_jahit += $sq->hasil_4;
		} 		
		$data['total_jahit'] = $total_jahit;		
		
		// total hardcover
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();		
		$total_hardcover=0;		
		foreach($ambil as $sq) {					 
			 $total_hardcover += $sq->hasil_1;
			 $total_hardcover += $sq->hasil_2;
			 $total_hardcover += $sq->hasil_3;
			 $total_hardcover += $sq->hasil_4;
		} 		
		$data['total_hardcover'] = $total_hardcover;	

		$this->template->load('finishing/template','finishing/quality_control/lihat_qc',$data);
	}




	
}
