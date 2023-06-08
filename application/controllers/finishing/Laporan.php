<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('LaporanFinishing_m', 'lp');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->lp->get();
		$data = array(
			'judul' => 'Laporan',
			'lp' => $query->result(),
		);	
		
		$this->load->model('FinishingProses_m');
		$this->load->model('FinishingAkhir_m');

		
		// ini dia 		
		$nilai = 0;										
		
		$banding_id[-1]=null;

		$total_emboss = 0;
		$total_doff = 0;	
		$total_glossy = 0;		

		$total_mbo_1 = 0;				
		$total_mbo_2 = 0;
		$total_mbo_3 = 0;
		$total_mbo_4 = 0;

		$total_shoe_1 = 0;				
		$total_shoe_2 = 0;
		$total_shoe_3 = 0;
		$total_shoe_4 = 0;

		$total_susun = 0;

		$total_binding = 0;
		$total_fa_potong = 0;
		$total_jahit = 0;
		$total_hardcover = 0;
	

		foreach($data["lp"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
										
					// data mbo
						$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($id_order)->result();						
						foreach($ambil_mbo as $sq) {	
								// MBO lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// MBO Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// MBO Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// MBO Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}

				// data shoe
						$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($id_order)->result();						
						foreach($ambil_shoe as $sq) {	
								// shoe lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// shoe Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// shoe Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// shoe Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}
				

				$ambil = $this->FinishingProses_m->ambilIDOrder($id_order)->result();
				foreach($ambil as $sq) {				
								if($sq->jenis_laminasi == "emboss"){
									$total_emboss += $sq->hasil_1;
									$total_emboss += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "glossy"){
									$total_glossy += $sq->hasil_1;
									$total_glossy += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "doff"){
									$total_doff += $sq->hasil_1;
									$total_doff += $sq->hasil_2;
								}
				}

				$ambil = $this->FinishingProses_m->ambilIDOrder_susun($id_order)->result();
				foreach($ambil as $sq) {				
								$total_susun += $sq->hasil_1;
								$total_susun += $sq->hasil_2;
				}

				// mesin finishing akhir
				$ambil = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();
				foreach($ambil as $sq) {				
								$total_binding += $sq->hasil_1;
								$total_binding += $sq->hasil_2;
								$total_binding += $sq->hasil_3;
								$total_binding += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_fa_potong($id_order)->result();
				foreach($ambil as $sq) {				
								$total_fa_potong += $sq->hasil_1;
								$total_fa_potong += $sq->hasil_2;
								$total_fa_potong += $sq->hasil_3;
								$total_fa_potong += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();
				foreach($ambil as $sq) {				
								$total_jahit += $sq->hasil_1;
								$total_jahit += $sq->hasil_2;
								$total_jahit += $sq->hasil_3;
								$total_jahit += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();
				foreach($ambil as $sq) {				
								$total_hardcover += $sq->hasil_1;
								$total_hardcover += $sq->hasil_2;
								$total_hardcover += $sq->hasil_3;
								$total_hardcover += $sq->hasil_4;
				}


						
								
						

			// Ditampung kedalam array datanya
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["total_emboss"][$nilai] = $total_emboss;
					$data["total_glossy"][$nilai] = $total_glossy;
					$data["total_doff"][$nilai] = $total_doff;

					$data["total_mbo_1"][$nilai] = $total_mbo_1;									
					$data["total_mbo_2"][$nilai] = $total_mbo_2;
					$data["total_mbo_3"][$nilai] = $total_mbo_3;
					$data["total_mbo_4"][$nilai] = $total_mbo_4;

					$data["total_shoe_1"][$nilai] = $total_shoe_1;									
					$data["total_shoe_2"][$nilai] = $total_shoe_2;
					$data["total_shoe_3"][$nilai] = $total_shoe_3;
					$data["total_shoe_4"][$nilai] = $total_shoe_4;

					$data["total_susun"][$nilai] = $total_susun;

					$data["total_binding"][$nilai] = $total_binding;
					$data["total_fa_potong"][$nilai] = $total_fa_potong;
					$data["total_jahit"][$nilai] = $total_jahit;
					$data["total_hardcover"][$nilai] = $total_hardcover;
					// var_dump($data["tanggal_mbo"]);
					$nilai++;	
				}  						 											

				// reset nilai yang akan di foreaach
				$total_emboss = 0;
				$total_doff = 0;	
				$total_glossy = 0;

				$total_mbo_1 = 0;	
				$total_mbo_2 = 0;
				$total_mbo_3 = 0;
				$total_mbo_4 = 0;	
				
				$total_shoe_1 = 0;				
				$total_shoe_2 = 0;
				$total_shoe_3 = 0;
				$total_shoe_4 = 0;

				$total_susun = 0;

				$total_binding = 0;
				$total_fa_potong = 0;
				$total_jahit = 0;
				$total_hardcover = 0;
					
		}

		// var_dump($data["total_shoe_4"]);die;
		

		$this->template->load('finishing/template','finishing/laporan_finishing/laporan',$data);
	}
	public function filter_bulan()
	{
		// check_already_login_finishing();
		
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$query = $this->lp->filter_bulan($bulan,$tahun);
		$data = array(
			'judul' => 'Laporan',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'lp' => $query->result(),
		);	
		
		$this->load->model('FinishingProses_m');
		$this->load->model('FinishingAkhir_m');

		
		// ini dia 		
		$nilai = 0;										
		
		$banding_id[-1]=null;

		$total_emboss = 0;
		$total_doff = 0;	
		$total_glossy = 0;		

		$total_mbo_1 = 0;				
		$total_mbo_2 = 0;
		$total_mbo_3 = 0;
		$total_mbo_4 = 0;

		$total_shoe_1 = 0;				
		$total_shoe_2 = 0;
		$total_shoe_3 = 0;
		$total_shoe_4 = 0;

		$total_susun = 0;

		$total_binding = 0;
		$total_fa_potong = 0;
		$total_jahit = 0;
		$total_hardcover = 0;
	

		foreach($data["lp"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
										
					// data mbo
						$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($id_order)->result();						
						foreach($ambil_mbo as $sq) {	
								// MBO lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// MBO Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// MBO Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// MBO Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}

				// data shoe
						$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($id_order)->result();						
						foreach($ambil_shoe as $sq) {	
								// shoe lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// shoe Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// shoe Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// shoe Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}
				

				$ambil = $this->FinishingProses_m->ambilIDOrder($id_order)->result();
				foreach($ambil as $sq) {				
								if($sq->jenis_laminasi == "emboss"){
									$total_emboss += $sq->hasil_1;
									$total_emboss += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "glossy"){
									$total_glossy += $sq->hasil_1;
									$total_glossy += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "doff"){
									$total_doff += $sq->hasil_1;
									$total_doff += $sq->hasil_2;
								}
				}

				$ambil = $this->FinishingProses_m->ambilIDOrder_susun($id_order)->result();
				foreach($ambil as $sq) {				
								$total_susun += $sq->hasil_1;
								$total_susun += $sq->hasil_2;
				}

				// mesin finishing akhir
				$ambil = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();
				foreach($ambil as $sq) {				
								$total_binding += $sq->hasil_1;
								$total_binding += $sq->hasil_2;
								$total_binding += $sq->hasil_3;
								$total_binding += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_fa_potong($id_order)->result();
				foreach($ambil as $sq) {				
								$total_fa_potong += $sq->hasil_1;
								$total_fa_potong += $sq->hasil_2;
								$total_fa_potong += $sq->hasil_3;
								$total_fa_potong += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();
				foreach($ambil as $sq) {				
								$total_jahit += $sq->hasil_1;
								$total_jahit += $sq->hasil_2;
								$total_jahit += $sq->hasil_3;
								$total_jahit += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();
				foreach($ambil as $sq) {				
								$total_hardcover += $sq->hasil_1;
								$total_hardcover += $sq->hasil_2;
								$total_hardcover += $sq->hasil_3;
								$total_hardcover += $sq->hasil_4;
				}


						
								
						

			// Ditampung kedalam array datanya
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["total_emboss"][$nilai] = $total_emboss;
					$data["total_glossy"][$nilai] = $total_glossy;
					$data["total_doff"][$nilai] = $total_doff;

					$data["total_mbo_1"][$nilai] = $total_mbo_1;									
					$data["total_mbo_2"][$nilai] = $total_mbo_2;
					$data["total_mbo_3"][$nilai] = $total_mbo_3;
					$data["total_mbo_4"][$nilai] = $total_mbo_4;

					$data["total_shoe_1"][$nilai] = $total_shoe_1;									
					$data["total_shoe_2"][$nilai] = $total_shoe_2;
					$data["total_shoe_3"][$nilai] = $total_shoe_3;
					$data["total_shoe_4"][$nilai] = $total_shoe_4;

					$data["total_susun"][$nilai] = $total_susun;

					$data["total_binding"][$nilai] = $total_binding;
					$data["total_fa_potong"][$nilai] = $total_fa_potong;
					$data["total_jahit"][$nilai] = $total_jahit;
					$data["total_hardcover"][$nilai] = $total_hardcover;
					// var_dump($data["tanggal_mbo"]);
					$nilai++;	
				}  						 											

				// reset nilai yang akan di foreaach
				$total_emboss = 0;
				$total_doff = 0;	
				$total_glossy = 0;

				$total_mbo_1 = 0;	
				$total_mbo_2 = 0;
				$total_mbo_3 = 0;
				$total_mbo_4 = 0;	
				
				$total_shoe_1 = 0;				
				$total_shoe_2 = 0;
				$total_shoe_3 = 0;
				$total_shoe_4 = 0;

				$total_susun = 0;

				$total_binding = 0;
				$total_fa_potong = 0;
				$total_jahit = 0;
				$total_hardcover = 0;
					
		}

		// var_dump($data["total_shoe_4"]);die;
		

		$this->template->load('finishing/template','finishing/laporan_finishing/laporan-filter-bulan',$data);
	}
	public function filter_tahun()
	{
		// check_already_login_finishing();

		$tahun = $this->input->post('tahun');
		$query = $this->lp->filter_tahun($tahun);
		$data = array(
			'judul' => 'Laporan',
			'tahun' => $tahun,
			'lp' => $query->result(),
		);	
		
		$this->load->model('FinishingProses_m');
		$this->load->model('FinishingAkhir_m');

		
		// ini dia 		
		$nilai = 0;										
		
		$banding_id[-1]=null;

		$total_emboss = 0;
		$total_doff = 0;	
		$total_glossy = 0;		

		$total_mbo_1 = 0;				
		$total_mbo_2 = 0;
		$total_mbo_3 = 0;
		$total_mbo_4 = 0;

		$total_shoe_1 = 0;				
		$total_shoe_2 = 0;
		$total_shoe_3 = 0;
		$total_shoe_4 = 0;

		$total_susun = 0;

		$total_binding = 0;
		$total_fa_potong = 0;
		$total_jahit = 0;
		$total_hardcover = 0;
	

		foreach($data["lp"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
										
					// data mbo
						$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($id_order)->result();						
						foreach($ambil_mbo as $sq) {	
								// MBO lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_mbo_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// MBO Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_mbo_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// MBO Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_mbo_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// MBO Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_mbo_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}

				// data shoe
						$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($id_order)->result();						
						foreach($ambil_shoe as $sq) {	
								// shoe lipat 1
												if($sq->lipat_lembar_1 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 1"){
													$total_shoe_1 += $sq->hasil_lipatan_lembar_20;	
												}			

							// shoe Lipat 2
												if($sq->lipat_lembar_1 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 2"){
													$total_shoe_2 += $sq->hasil_lipatan_lembar_20;	
												}			
								
								// shoe Lipat 3
												if($sq->lipat_lembar_1 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 3"){
													$total_shoe_3 += $sq->hasil_lipatan_lembar_20;	
												}	
									
								// shoe Lipat 4
												if($sq->lipat_lembar_1 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_1;	
												}		
												if($sq->lipat_lembar_2 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_2;	
												}	
												if($sq->lipat_lembar_3 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_3;	
												}	
												if($sq->lipat_lembar_4 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_4;	
												}	
												if($sq->lipat_lembar_5 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_5;	
												}	
												if($sq->lipat_lembar_6 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_6;	
												}	
												if($sq->lipat_lembar_7 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_7;	
												}	
												if($sq->lipat_lembar_8 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_8;	
												}	
												if($sq->lipat_lembar_9 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_9;	
												}	
												if($sq->lipat_lembar_10 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_10;	
												}	
												if($sq->lipat_lembar_11 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_11;	
												}	
												if($sq->lipat_lembar_12 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_12;	
												}	
												if($sq->lipat_lembar_13 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_13;	
												}	
												if($sq->lipat_lembar_14 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_14;	
												}	
												if($sq->lipat_lembar_15 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_15;	
												}	
												if($sq->lipat_lembar_16 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_16;	
												}	
												if($sq->lipat_lembar_17 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_17;	
												}	
												if($sq->lipat_lembar_18 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_18;	
												}	
												if($sq->lipat_lembar_19 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_19;	
												}	
												if($sq->lipat_lembar_20 == "Lipat 4"){
													$total_shoe_4 += $sq->hasil_lipatan_lembar_20;	
												}			
						}
				

				$ambil = $this->FinishingProses_m->ambilIDOrder($id_order)->result();
				foreach($ambil as $sq) {				
								if($sq->jenis_laminasi == "emboss"){
									$total_emboss += $sq->hasil_1;
									$total_emboss += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "glossy"){
									$total_glossy += $sq->hasil_1;
									$total_glossy += $sq->hasil_2;
								}
								if($sq->jenis_laminasi == "doff"){
									$total_doff += $sq->hasil_1;
									$total_doff += $sq->hasil_2;
								}
				}

				$ambil = $this->FinishingProses_m->ambilIDOrder_susun($id_order)->result();
				foreach($ambil as $sq) {				
								$total_susun += $sq->hasil_1;
								$total_susun += $sq->hasil_2;
				}

				// mesin finishing akhir
				$ambil = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();
				foreach($ambil as $sq) {				
								$total_binding += $sq->hasil_1;
								$total_binding += $sq->hasil_2;
								$total_binding += $sq->hasil_3;
								$total_binding += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_fa_potong($id_order)->result();
				foreach($ambil as $sq) {				
								$total_fa_potong += $sq->hasil_1;
								$total_fa_potong += $sq->hasil_2;
								$total_fa_potong += $sq->hasil_3;
								$total_fa_potong += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();
				foreach($ambil as $sq) {				
								$total_jahit += $sq->hasil_1;
								$total_jahit += $sq->hasil_2;
								$total_jahit += $sq->hasil_3;
								$total_jahit += $sq->hasil_4;
				}

				$ambil = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();
				foreach($ambil as $sq) {				
								$total_hardcover += $sq->hasil_1;
								$total_hardcover += $sq->hasil_2;
								$total_hardcover += $sq->hasil_3;
								$total_hardcover += $sq->hasil_4;
				}


						
								
						

			// Ditampung kedalam array datanya
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["total_emboss"][$nilai] = $total_emboss;
					$data["total_glossy"][$nilai] = $total_glossy;
					$data["total_doff"][$nilai] = $total_doff;

					$data["total_mbo_1"][$nilai] = $total_mbo_1;									
					$data["total_mbo_2"][$nilai] = $total_mbo_2;
					$data["total_mbo_3"][$nilai] = $total_mbo_3;
					$data["total_mbo_4"][$nilai] = $total_mbo_4;

					$data["total_shoe_1"][$nilai] = $total_shoe_1;									
					$data["total_shoe_2"][$nilai] = $total_shoe_2;
					$data["total_shoe_3"][$nilai] = $total_shoe_3;
					$data["total_shoe_4"][$nilai] = $total_shoe_4;

					$data["total_susun"][$nilai] = $total_susun;

					$data["total_binding"][$nilai] = $total_binding;
					$data["total_fa_potong"][$nilai] = $total_fa_potong;
					$data["total_jahit"][$nilai] = $total_jahit;
					$data["total_hardcover"][$nilai] = $total_hardcover;
					// var_dump($data["tanggal_mbo"]);
					$nilai++;	
				}  						 											

				// reset nilai yang akan di foreaach
				$total_emboss = 0;
				$total_doff = 0;	
				$total_glossy = 0;

				$total_mbo_1 = 0;	
				$total_mbo_2 = 0;
				$total_mbo_3 = 0;
				$total_mbo_4 = 0;	
				
				$total_shoe_1 = 0;				
				$total_shoe_2 = 0;
				$total_shoe_3 = 0;
				$total_shoe_4 = 0;

				$total_susun = 0;

				$total_binding = 0;
				$total_fa_potong = 0;
				$total_jahit = 0;
				$total_hardcover = 0;
					
		}

		// var_dump($data["total_shoe_4"]);die;
		

		$this->template->load('finishing/template','finishing/laporan_finishing/laporan-filter-tahun',$data);
	}
}
