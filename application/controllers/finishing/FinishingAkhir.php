<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingAkhir extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('FinishingAkhir_m', 'fa');
    }
	// public function index()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->fa->get();
	// 	$data = array(
	// 		'judul' => 'Finishing Akhir',
	// 		'fa' => $query->result(),
	// 	);		
	// 	$this->template->load('finishing/template','finishing/finishing_akhir/finishing_akhir',$data);
	// }
    public function display_binding()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Binding',
			'fa' => $query->result(),
		);		
		// var_dump($data['fa']);die;
		
		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$binding[-1] = null;
		$hardcover[-1] = null;
		$jahit[-1] = null;
		$fa_potong[-1] = null;
		$sub[-1] = null;
		
		$banding_id[-1]=null;

		$tanggal_binding = "";
		$tanggal_hardcover = "";
		$tanggal_jahit = "";
		$tanggal_fa_potong = "";
		$tanggal_sub = "";

		$id_jadwal_binding_max = 0;
		$id_jadwal_hardcover_max = 0;
		$id_jadwal_jahit_max = 0;
		$id_jadwal_fa_potong_max = 0;
		$id_jadwal_sub_max = 0;

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->fa->ambil_data_fa_binding($id_order)->result();
						
						foreach($ambil_binding as $sq) {	
							// var_dump($sq->tanggal_binding);die;	
							if($sq->tanggal_binding != null and $sq->tanggal_binding != "0000-00-00" and $sq->tanggal_binding != $binding[$nilai_mesin-1]){	
								$tanggal_binding .= $sq->tanggal_binding.", <br>";
							}
							if($sq->id_jadwal_binding > $id_jadwal_binding_max){
								$id_jadwal_binding_max = $sq->id_jadwal_binding;
							}
							
							$binding[$nilai_mesin] = $sq->tanggal_binding;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data hardcover
						$ambil_hardcover = $this->fa->ambil_data_fa_hardcover($id_order)->result();
						foreach($ambil_hardcover as $sq) {							
							if($sq->tanggal_hardcover != null and $sq->tanggal_hardcover != "0000-00-00" and $sq->tanggal_hardcover != $hardcover[$nilai_mesin-1]){	
								$tanggal_hardcover .= $sq->tanggal_hardcover.", <br>";
							}	
							if($sq->id_jadwal_hardcover > $id_jadwal_hardcover_max){
								$id_jadwal_hardcover_max = $sq->id_jadwal_hardcover;
							}														
							$hardcover[$nilai_mesin] = $sq->tanggal_hardcover;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data jahit
					$ambil_jahit = $this->fa->ambil_data_fa_jahit($id_order)->result();
					foreach($ambil_jahit as $sq) {							
						if($sq->tanggal_jahit != null and $sq->tanggal_jahit != "0000-00-00" and $sq->tanggal_jahit != $jahit[$nilai_mesin-1]){	
							$tanggal_jahit .= $sq->tanggal_jahit.", <br>";
						}	
						if($sq->id_jadwal_jahit > $id_jadwal_jahit_max){
							$id_jadwal_jahit_max = $sq->id_jadwal_jahit;
						}														
						$jahit[$nilai_mesin] = $sq->tanggal_jahit;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data fa_potong
					$ambil_fa_potong = $this->fa->ambil_data_fa_fa_potong($id_order)->result();
					foreach($ambil_fa_potong as $sq) {							
						if($sq->tanggal_fa_potong != null and $sq->tanggal_fa_potong != "0000-00-00" and $sq->tanggal_fa_potong != $fa_potong[$nilai_mesin-1]){	
							$tanggal_fa_potong .= $sq->tanggal_fa_potong.", <br>";
						}	
						if($sq->id_jadwal_fa_potong > $id_jadwal_fa_potong_max){
							$id_jadwal_fa_potong_max = $sq->id_jadwal_fa_potong;
						}														
						$fa_potong[$nilai_mesin] = $sq->tanggal_fa_potong;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data sub
					$ambil_sub = $this->fa->ambil_data_fa_sub($id_order)->result();
					foreach($ambil_sub as $sq) {							
						if($sq->tanggal_sub != null and $sq->tanggal_sub != "0000-00-00" and $sq->tanggal_sub != $sub[$nilai_mesin-1]){	
							$tanggal_sub .= $sq->tanggal_sub.", <br>";
						}	
						if($sq->id_jadwal_sub > $id_jadwal_sub_max){
							$id_jadwal_sub_max = $sq->id_jadwal_sub;
						}														
						$sub[$nilai_mesin] = $sq->tanggal_sub;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_binding"][$nilai] = $tanggal_binding;					
					$data["tanggal_hardcover"][$nilai] = $tanggal_hardcover;
					$data["tanggal_jahit"][$nilai] = $tanggal_jahit;
					$data["tanggal_fa_potong"][$nilai] = $tanggal_fa_potong;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 					

					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_binding_max"][$nilai_jadwal] = $id_jadwal_binding_max;
				$data["id_jadwal_hardcover_max"][$nilai_jadwal] = $id_jadwal_hardcover_max;
				$data["id_jadwal_jahit_max"][$nilai_jadwal] = $id_jadwal_jahit_max;
				$data["id_jadwal_fa_potong_max"][$nilai_jadwal] = $id_jadwal_fa_potong_max;
				$data["id_jadwal_sub_max"][$nilai_jadwal] = $id_jadwal_sub_max;

				// reset nilai yang akan di foreaach
				$tanggal_binding = "";
				$tanggal_hardcover = "";
				$tanggal_jahit = "";
				$tanggal_fa_potong = "";
				$tanggal_sub = "";		

				$id_jadwal_binding_max = 0;
				$id_jadwal_hardcover_max = 0;
				$id_jadwal_jahit_max = 0;
				$id_jadwal_fa_potong_max = 0;
				$id_jadwal_sub_max = 0;
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["tanggal_hardcover"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_binding',$data);
	}
	public function display_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Hardcover',
			'fa' => $query->result(),
		);		
		// var_dump($data['fa']);die;
		
		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$binding[-1] = null;
		$hardcover[-1] = null;
		$jahit[-1] = null;
		$fa_potong[-1] = null;
		$sub[-1] = null;
		
		$banding_id[-1]=null;

		$tanggal_binding = "";
		$tanggal_hardcover = "";
		$tanggal_jahit = "";
		$tanggal_fa_potong = "";
		$tanggal_sub = "";

		$id_jadwal_binding_max = 0;
		$id_jadwal_hardcover_max = 0;
		$id_jadwal_jahit_max = 0;
		$id_jadwal_fa_potong_max = 0;
		$id_jadwal_sub_max = 0;

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->fa->ambil_data_fa_binding($id_order)->result();
						
						foreach($ambil_binding as $sq) {	
							// var_dump($sq->tanggal_binding);die;	
							if($sq->tanggal_binding != null and $sq->tanggal_binding != "0000-00-00" and $sq->tanggal_binding != $binding[$nilai_mesin-1]){	
								$tanggal_binding .= $sq->tanggal_binding.", <br>";
							}
							if($sq->id_jadwal_binding > $id_jadwal_binding_max){
								$id_jadwal_binding_max = $sq->id_jadwal_binding;
							}
							
							$binding[$nilai_mesin] = $sq->tanggal_binding;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data hardcover
						$ambil_hardcover = $this->fa->ambil_data_fa_hardcover($id_order)->result();
						foreach($ambil_hardcover as $sq) {							
							if($sq->tanggal_hardcover != null and $sq->tanggal_hardcover != "0000-00-00" and $sq->tanggal_hardcover != $hardcover[$nilai_mesin-1]){	
								$tanggal_hardcover .= $sq->tanggal_hardcover.", <br>";
							}	
							if($sq->id_jadwal_hardcover > $id_jadwal_hardcover_max){
								$id_jadwal_hardcover_max = $sq->id_jadwal_hardcover;
							}														
							$hardcover[$nilai_mesin] = $sq->tanggal_hardcover;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data jahit
					$ambil_jahit = $this->fa->ambil_data_fa_jahit($id_order)->result();
					foreach($ambil_jahit as $sq) {							
						if($sq->tanggal_jahit != null and $sq->tanggal_jahit != "0000-00-00" and $sq->tanggal_jahit != $jahit[$nilai_mesin-1]){	
							$tanggal_jahit .= $sq->tanggal_jahit.", <br>";
						}	
						if($sq->id_jadwal_jahit > $id_jadwal_jahit_max){
							$id_jadwal_jahit_max = $sq->id_jadwal_jahit;
						}														
						$jahit[$nilai_mesin] = $sq->tanggal_jahit;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data fa_potong
					$ambil_fa_potong = $this->fa->ambil_data_fa_fa_potong($id_order)->result();
					foreach($ambil_fa_potong as $sq) {							
						if($sq->tanggal_fa_potong != null and $sq->tanggal_fa_potong != "0000-00-00" and $sq->tanggal_fa_potong != $fa_potong[$nilai_mesin-1]){	
							$tanggal_fa_potong .= $sq->tanggal_fa_potong.", <br>";
						}	
						if($sq->id_jadwal_fa_potong > $id_jadwal_fa_potong_max){
							$id_jadwal_fa_potong_max = $sq->id_jadwal_fa_potong;
						}														
						$fa_potong[$nilai_mesin] = $sq->tanggal_fa_potong;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data sub
					$ambil_sub = $this->fa->ambil_data_fa_sub($id_order)->result();
					foreach($ambil_sub as $sq) {							
						if($sq->tanggal_sub != null and $sq->tanggal_sub != "0000-00-00" and $sq->tanggal_sub != $sub[$nilai_mesin-1]){	
							$tanggal_sub .= $sq->tanggal_sub.", <br>";
						}	
						if($sq->id_jadwal_sub > $id_jadwal_sub_max){
							$id_jadwal_sub_max = $sq->id_jadwal_sub;
						}														
						$sub[$nilai_mesin] = $sq->tanggal_sub;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_binding"][$nilai] = $tanggal_binding;					
					$data["tanggal_hardcover"][$nilai] = $tanggal_hardcover;
					$data["tanggal_jahit"][$nilai] = $tanggal_jahit;
					$data["tanggal_fa_potong"][$nilai] = $tanggal_fa_potong;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 					

					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_binding_max"][$nilai_jadwal] = $id_jadwal_binding_max;
				$data["id_jadwal_hardcover_max"][$nilai_jadwal] = $id_jadwal_hardcover_max;
				$data["id_jadwal_jahit_max"][$nilai_jadwal] = $id_jadwal_jahit_max;
				$data["id_jadwal_fa_potong_max"][$nilai_jadwal] = $id_jadwal_fa_potong_max;
				$data["id_jadwal_sub_max"][$nilai_jadwal] = $id_jadwal_sub_max;

				// reset nilai yang akan di foreaach
				$tanggal_binding = "";
				$tanggal_hardcover = "";
				$tanggal_jahit = "";
				$tanggal_fa_potong = "";
				$tanggal_sub = "";		

				$id_jadwal_binding_max = 0;
				$id_jadwal_hardcover_max = 0;
				$id_jadwal_jahit_max = 0;
				$id_jadwal_fa_potong_max = 0;
				$id_jadwal_sub_max = 0;
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["tanggal_hardcover"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_hardcover',$data);
	}
	public function display_jahit()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Jahit',
			'fa' => $query->result(),
		);		
		// var_dump($data['fa']);die;
		
		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$binding[-1] = null;
		$hardcover[-1] = null;
		$jahit[-1] = null;
		$fa_potong[-1] = null;
		$sub[-1] = null;
		
		$banding_id[-1]=null;

		$tanggal_binding = "";
		$tanggal_hardcover = "";
		$tanggal_jahit = "";
		$tanggal_fa_potong = "";
		$tanggal_sub = "";

		$id_jadwal_binding_max = 0;
		$id_jadwal_hardcover_max = 0;
		$id_jadwal_jahit_max = 0;
		$id_jadwal_fa_potong_max = 0;
		$id_jadwal_sub_max = 0;

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->fa->ambil_data_fa_binding($id_order)->result();
						
						foreach($ambil_binding as $sq) {	
							// var_dump($sq->tanggal_binding);die;	
							if($sq->tanggal_binding != null and $sq->tanggal_binding != "0000-00-00" and $sq->tanggal_binding != $binding[$nilai_mesin-1]){	
								$tanggal_binding .= $sq->tanggal_binding.", <br>";
							}
							if($sq->id_jadwal_binding > $id_jadwal_binding_max){
								$id_jadwal_binding_max = $sq->id_jadwal_binding;
							}
							
							$binding[$nilai_mesin] = $sq->tanggal_binding;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data hardcover
						$ambil_hardcover = $this->fa->ambil_data_fa_hardcover($id_order)->result();
						foreach($ambil_hardcover as $sq) {							
							if($sq->tanggal_hardcover != null and $sq->tanggal_hardcover != "0000-00-00" and $sq->tanggal_hardcover != $hardcover[$nilai_mesin-1]){	
								$tanggal_hardcover .= $sq->tanggal_hardcover.", <br>";
							}	
							if($sq->id_jadwal_hardcover > $id_jadwal_hardcover_max){
								$id_jadwal_hardcover_max = $sq->id_jadwal_hardcover;
							}														
							$hardcover[$nilai_mesin] = $sq->tanggal_hardcover;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data jahit
					$ambil_jahit = $this->fa->ambil_data_fa_jahit($id_order)->result();
					foreach($ambil_jahit as $sq) {							
						if($sq->tanggal_jahit != null and $sq->tanggal_jahit != "0000-00-00" and $sq->tanggal_jahit != $jahit[$nilai_mesin-1]){	
							$tanggal_jahit .= $sq->tanggal_jahit.", <br>";
						}	
						if($sq->id_jadwal_jahit > $id_jadwal_jahit_max){
							$id_jadwal_jahit_max = $sq->id_jadwal_jahit;
						}														
						$jahit[$nilai_mesin] = $sq->tanggal_jahit;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data fa_potong
					$ambil_fa_potong = $this->fa->ambil_data_fa_fa_potong($id_order)->result();
					foreach($ambil_fa_potong as $sq) {							
						if($sq->tanggal_fa_potong != null and $sq->tanggal_fa_potong != "0000-00-00" and $sq->tanggal_fa_potong != $fa_potong[$nilai_mesin-1]){	
							$tanggal_fa_potong .= $sq->tanggal_fa_potong.", <br>";
						}	
						if($sq->id_jadwal_fa_potong > $id_jadwal_fa_potong_max){
							$id_jadwal_fa_potong_max = $sq->id_jadwal_fa_potong;
						}														
						$fa_potong[$nilai_mesin] = $sq->tanggal_fa_potong;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data sub
					$ambil_sub = $this->fa->ambil_data_fa_sub($id_order)->result();
					foreach($ambil_sub as $sq) {							
						if($sq->tanggal_sub != null and $sq->tanggal_sub != "0000-00-00" and $sq->tanggal_sub != $sub[$nilai_mesin-1]){	
							$tanggal_sub .= $sq->tanggal_sub.", <br>";
						}	
						if($sq->id_jadwal_sub > $id_jadwal_sub_max){
							$id_jadwal_sub_max = $sq->id_jadwal_sub;
						}														
						$sub[$nilai_mesin] = $sq->tanggal_sub;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_binding"][$nilai] = $tanggal_binding;					
					$data["tanggal_hardcover"][$nilai] = $tanggal_hardcover;
					$data["tanggal_jahit"][$nilai] = $tanggal_jahit;
					$data["tanggal_fa_potong"][$nilai] = $tanggal_fa_potong;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 					

					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_binding_max"][$nilai_jadwal] = $id_jadwal_binding_max;
				$data["id_jadwal_hardcover_max"][$nilai_jadwal] = $id_jadwal_hardcover_max;
				$data["id_jadwal_jahit_max"][$nilai_jadwal] = $id_jadwal_jahit_max;
				$data["id_jadwal_fa_potong_max"][$nilai_jadwal] = $id_jadwal_fa_potong_max;
				$data["id_jadwal_sub_max"][$nilai_jadwal] = $id_jadwal_sub_max;

				// reset nilai yang akan di foreaach
				$tanggal_binding = "";
				$tanggal_hardcover = "";
				$tanggal_jahit = "";
				$tanggal_fa_potong = "";
				$tanggal_sub = "";		

				$id_jadwal_binding_max = 0;
				$id_jadwal_hardcover_max = 0;
				$id_jadwal_jahit_max = 0;
				$id_jadwal_fa_potong_max = 0;
				$id_jadwal_sub_max = 0;
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["tanggal_hardcover"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_jahit',$data);
	}
	public function display_potong()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Potong',
			'fa' => $query->result(),
		);		
		// var_dump($data['fa']);die;
		
		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$binding[-1] = null;
		$hardcover[-1] = null;
		$jahit[-1] = null;
		$fa_potong[-1] = null;
		$sub[-1] = null;
		
		$banding_id[-1]=null;

		$tanggal_binding = "";
		$tanggal_hardcover = "";
		$tanggal_jahit = "";
		$tanggal_fa_potong = "";
		$tanggal_sub = "";

		$id_jadwal_binding_max = 0;
		$id_jadwal_hardcover_max = 0;
		$id_jadwal_jahit_max = 0;
		$id_jadwal_fa_potong_max = 0;
		$id_jadwal_sub_max = 0;

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->fa->ambil_data_fa_binding($id_order)->result();
						
						foreach($ambil_binding as $sq) {	
							// var_dump($sq->tanggal_binding);die;	
							if($sq->tanggal_binding != null and $sq->tanggal_binding != "0000-00-00" and $sq->tanggal_binding != $binding[$nilai_mesin-1]){	
								$tanggal_binding .= $sq->tanggal_binding.", <br>";
							}
							if($sq->id_jadwal_binding > $id_jadwal_binding_max){
								$id_jadwal_binding_max = $sq->id_jadwal_binding;
							}
							
							$binding[$nilai_mesin] = $sq->tanggal_binding;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data hardcover
						$ambil_hardcover = $this->fa->ambil_data_fa_hardcover($id_order)->result();
						foreach($ambil_hardcover as $sq) {							
							if($sq->tanggal_hardcover != null and $sq->tanggal_hardcover != "0000-00-00" and $sq->tanggal_hardcover != $hardcover[$nilai_mesin-1]){	
								$tanggal_hardcover .= $sq->tanggal_hardcover.", <br>";
							}	
							if($sq->id_jadwal_hardcover > $id_jadwal_hardcover_max){
								$id_jadwal_hardcover_max = $sq->id_jadwal_hardcover;
							}														
							$hardcover[$nilai_mesin] = $sq->tanggal_hardcover;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data jahit
					$ambil_jahit = $this->fa->ambil_data_fa_jahit($id_order)->result();
					foreach($ambil_jahit as $sq) {							
						if($sq->tanggal_jahit != null and $sq->tanggal_jahit != "0000-00-00" and $sq->tanggal_jahit != $jahit[$nilai_mesin-1]){	
							$tanggal_jahit .= $sq->tanggal_jahit.", <br>";
						}	
						if($sq->id_jadwal_jahit > $id_jadwal_jahit_max){
							$id_jadwal_jahit_max = $sq->id_jadwal_jahit;
						}														
						$jahit[$nilai_mesin] = $sq->tanggal_jahit;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data fa_potong
					$ambil_fa_potong = $this->fa->ambil_data_fa_fa_potong($id_order)->result();
					foreach($ambil_fa_potong as $sq) {							
						if($sq->tanggal_fa_potong != null and $sq->tanggal_fa_potong != "0000-00-00" and $sq->tanggal_fa_potong != $fa_potong[$nilai_mesin-1]){	
							$tanggal_fa_potong .= $sq->tanggal_fa_potong.", <br>";
						}	
						if($sq->id_jadwal_fa_potong > $id_jadwal_fa_potong_max){
							$id_jadwal_fa_potong_max = $sq->id_jadwal_fa_potong;
						}														
						$fa_potong[$nilai_mesin] = $sq->tanggal_fa_potong;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data sub
					$ambil_sub = $this->fa->ambil_data_fa_sub($id_order)->result();
					foreach($ambil_sub as $sq) {							
						if($sq->tanggal_sub != null and $sq->tanggal_sub != "0000-00-00" and $sq->tanggal_sub != $sub[$nilai_mesin-1]){	
							$tanggal_sub .= $sq->tanggal_sub.", <br>";
						}	
						if($sq->id_jadwal_sub > $id_jadwal_sub_max){
							$id_jadwal_sub_max = $sq->id_jadwal_sub;
						}														
						$sub[$nilai_mesin] = $sq->tanggal_sub;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_binding"][$nilai] = $tanggal_binding;					
					$data["tanggal_hardcover"][$nilai] = $tanggal_hardcover;
					$data["tanggal_jahit"][$nilai] = $tanggal_jahit;
					$data["tanggal_fa_potong"][$nilai] = $tanggal_fa_potong;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 					

					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_binding_max"][$nilai_jadwal] = $id_jadwal_binding_max;
				$data["id_jadwal_hardcover_max"][$nilai_jadwal] = $id_jadwal_hardcover_max;
				$data["id_jadwal_jahit_max"][$nilai_jadwal] = $id_jadwal_jahit_max;
				$data["id_jadwal_fa_potong_max"][$nilai_jadwal] = $id_jadwal_fa_potong_max;
				$data["id_jadwal_sub_max"][$nilai_jadwal] = $id_jadwal_sub_max;

				// reset nilai yang akan di foreaach
				$tanggal_binding = "";
				$tanggal_hardcover = "";
				$tanggal_jahit = "";
				$tanggal_fa_potong = "";
				$tanggal_sub = "";		

				$id_jadwal_binding_max = 0;
				$id_jadwal_hardcover_max = 0;
				$id_jadwal_jahit_max = 0;
				$id_jadwal_fa_potong_max = 0;
				$id_jadwal_sub_max = 0;
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["tanggal_hardcover"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_potong',$data);
	}
	public function display_sub()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Sub',
			'fa' => $query->result(),
		);		
		// var_dump($data['fa']);die;
		
		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$binding[-1] = null;
		$hardcover[-1] = null;
		$jahit[-1] = null;
		$fa_potong[-1] = null;
		$sub[-1] = null;
		
		$banding_id[-1]=null;

		$tanggal_binding = "";
		$tanggal_hardcover = "";
		$tanggal_jahit = "";
		$tanggal_fa_potong = "";
		$tanggal_sub = "";

		$id_jadwal_binding_max = 0;
		$id_jadwal_hardcover_max = 0;
		$id_jadwal_jahit_max = 0;
		$id_jadwal_fa_potong_max = 0;
		$id_jadwal_sub_max = 0;

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->fa->ambil_data_fa_binding($id_order)->result();
						
						foreach($ambil_binding as $sq) {	
							// var_dump($sq->tanggal_binding);die;	
							if($sq->tanggal_binding != null and $sq->tanggal_binding != "0000-00-00" and $sq->tanggal_binding != $binding[$nilai_mesin-1]){	
								$tanggal_binding .= $sq->tanggal_binding.", <br>";
							}
							if($sq->id_jadwal_binding > $id_jadwal_binding_max){
								$id_jadwal_binding_max = $sq->id_jadwal_binding;
							}
							
							$binding[$nilai_mesin] = $sq->tanggal_binding;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data hardcover
						$ambil_hardcover = $this->fa->ambil_data_fa_hardcover($id_order)->result();
						foreach($ambil_hardcover as $sq) {							
							if($sq->tanggal_hardcover != null and $sq->tanggal_hardcover != "0000-00-00" and $sq->tanggal_hardcover != $hardcover[$nilai_mesin-1]){	
								$tanggal_hardcover .= $sq->tanggal_hardcover.", <br>";
							}	
							if($sq->id_jadwal_hardcover > $id_jadwal_hardcover_max){
								$id_jadwal_hardcover_max = $sq->id_jadwal_hardcover;
							}														
							$hardcover[$nilai_mesin] = $sq->tanggal_hardcover;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data jahit
					$ambil_jahit = $this->fa->ambil_data_fa_jahit($id_order)->result();
					foreach($ambil_jahit as $sq) {							
						if($sq->tanggal_jahit != null and $sq->tanggal_jahit != "0000-00-00" and $sq->tanggal_jahit != $jahit[$nilai_mesin-1]){	
							$tanggal_jahit .= $sq->tanggal_jahit.", <br>";
						}	
						if($sq->id_jadwal_jahit > $id_jadwal_jahit_max){
							$id_jadwal_jahit_max = $sq->id_jadwal_jahit;
						}														
						$jahit[$nilai_mesin] = $sq->tanggal_jahit;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data fa_potong
					$ambil_fa_potong = $this->fa->ambil_data_fa_fa_potong($id_order)->result();
					foreach($ambil_fa_potong as $sq) {							
						if($sq->tanggal_fa_potong != null and $sq->tanggal_fa_potong != "0000-00-00" and $sq->tanggal_fa_potong != $fa_potong[$nilai_mesin-1]){	
							$tanggal_fa_potong .= $sq->tanggal_fa_potong.", <br>";
						}	
						if($sq->id_jadwal_fa_potong > $id_jadwal_fa_potong_max){
							$id_jadwal_fa_potong_max = $sq->id_jadwal_fa_potong;
						}														
						$fa_potong[$nilai_mesin] = $sq->tanggal_fa_potong;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data sub
					$ambil_sub = $this->fa->ambil_data_fa_sub($id_order)->result();
					foreach($ambil_sub as $sq) {							
						if($sq->tanggal_sub != null and $sq->tanggal_sub != "0000-00-00" and $sq->tanggal_sub != $sub[$nilai_mesin-1]){	
							$tanggal_sub .= $sq->tanggal_sub.", <br>";
						}	
						if($sq->id_jadwal_sub > $id_jadwal_sub_max){
							$id_jadwal_sub_max = $sq->id_jadwal_sub;
						}														
						$sub[$nilai_mesin] = $sq->tanggal_sub;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_binding"][$nilai] = $tanggal_binding;					
					$data["tanggal_hardcover"][$nilai] = $tanggal_hardcover;
					$data["tanggal_jahit"][$nilai] = $tanggal_jahit;
					$data["tanggal_fa_potong"][$nilai] = $tanggal_fa_potong;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 					

					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_binding_max"][$nilai_jadwal] = $id_jadwal_binding_max;
				$data["id_jadwal_hardcover_max"][$nilai_jadwal] = $id_jadwal_hardcover_max;
				$data["id_jadwal_jahit_max"][$nilai_jadwal] = $id_jadwal_jahit_max;
				$data["id_jadwal_fa_potong_max"][$nilai_jadwal] = $id_jadwal_fa_potong_max;
				$data["id_jadwal_sub_max"][$nilai_jadwal] = $id_jadwal_sub_max;

				// reset nilai yang akan di foreaach
				$tanggal_binding = "";
				$tanggal_hardcover = "";
				$tanggal_jahit = "";
				$tanggal_fa_potong = "";
				$tanggal_sub = "";		

				$id_jadwal_binding_max = 0;
				$id_jadwal_hardcover_max = 0;
				$id_jadwal_jahit_max = 0;
				$id_jadwal_fa_potong_max = 0;
				$id_jadwal_sub_max = 0;
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["tanggal_hardcover"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_sub',$data);
	}
    public function mesin_kalender()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender',
			'fa' => $query->result(),
		);		

		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$klemseng[-1] = null;
		$spiral[-1] = null;

		
		$banding_id[-1]=null;

		$tanggal_klemseng = "";
		$tanggal_spiral = "";
	

		$id_jadwal_klemseng_max = 0;
		$id_jadwal_spiral_max = 0;
	

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data klemseng
						$ambil_klemseng = $this->fa->ambil_data_fa_klemseng($id_order)->result();
						
						foreach($ambil_klemseng as $sq) {	
							// var_dump($sq->tanggal_klemseng);die;	
							if($sq->tanggal_klemseng != null and $sq->tanggal_klemseng != "0000-00-00" and $sq->tanggal_klemseng != $klemseng[$nilai_mesin-1]){	
								$tanggal_klemseng .= $sq->tanggal_klemseng.", <br>";
							}
							if($sq->id_jadwal_klemseng > $id_jadwal_klemseng_max){
								$id_jadwal_klemseng_max = $sq->id_jadwal_klemseng;
							}
							
							$klemseng[$nilai_mesin] = $sq->tanggal_klemseng;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data spiral
						$ambil_spiral = $this->fa->ambil_data_fa_spiral($id_order)->result();
						foreach($ambil_spiral as $sq) {							
							if($sq->tanggal_spiral != null and $sq->tanggal_spiral != "0000-00-00" and $sq->tanggal_spiral != $spiral[$nilai_mesin-1]){	
								$tanggal_spiral .= $sq->tanggal_spiral.", <br>";
							}	
							if($sq->id_jadwal_spiral > $id_jadwal_spiral_max){
								$id_jadwal_spiral_max = $sq->id_jadwal_spiral;
							}														
							$spiral[$nilai_mesin] = $sq->tanggal_spiral;					
							$nilai_mesin++;
						}$nilai_mesin=0;

											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_klemseng"][$nilai] = $tanggal_klemseng;					
					$data["tanggal_spiral"][$nilai] = $tanggal_spiral;					 					

					// var_dump($data["tanggal_klemseng"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_klemseng_max"][$nilai_jadwal] = $id_jadwal_klemseng_max;
				$data["id_jadwal_spiral_max"][$nilai_jadwal] = $id_jadwal_spiral_max;
		

				// reset nilai yang akan di foreaach
				$tanggal_klemseng = "";
				$tanggal_spiral = "";
				

				$id_jadwal_klemseng_max = 0;
				$id_jadwal_spiral_max = 0;
		
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["id_jadwal_klemseng_max"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/mesin_kalender',$data);
	}
	public function display_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender Klemseng',
			'fa' => $query->result(),
		);		

		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$klemseng[-1] = null;
		$spiral[-1] = null;

		
		$banding_id[-1]=null;

		$tanggal_klemseng = "";
		$tanggal_spiral = "";
	

		$id_jadwal_klemseng_max = 0;
		$id_jadwal_spiral_max = 0;
	

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data klemseng
						$ambil_klemseng = $this->fa->ambil_data_fa_klemseng($id_order)->result();
						
						foreach($ambil_klemseng as $sq) {	
							// var_dump($sq->tanggal_klemseng);die;	
							if($sq->tanggal_klemseng != null and $sq->tanggal_klemseng != "0000-00-00" and $sq->tanggal_klemseng != $klemseng[$nilai_mesin-1]){	
								$tanggal_klemseng .= $sq->tanggal_klemseng.", <br>";
							}
							if($sq->id_jadwal_klemseng > $id_jadwal_klemseng_max){
								$id_jadwal_klemseng_max = $sq->id_jadwal_klemseng;
							}
							
							$klemseng[$nilai_mesin] = $sq->tanggal_klemseng;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data spiral
						$ambil_spiral = $this->fa->ambil_data_fa_spiral($id_order)->result();
						foreach($ambil_spiral as $sq) {							
							if($sq->tanggal_spiral != null and $sq->tanggal_spiral != "0000-00-00" and $sq->tanggal_spiral != $spiral[$nilai_mesin-1]){	
								$tanggal_spiral .= $sq->tanggal_spiral.", <br>";
							}	
							if($sq->id_jadwal_spiral > $id_jadwal_spiral_max){
								$id_jadwal_spiral_max = $sq->id_jadwal_spiral;
							}														
							$spiral[$nilai_mesin] = $sq->tanggal_spiral;					
							$nilai_mesin++;
						}$nilai_mesin=0;

											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_klemseng"][$nilai] = $tanggal_klemseng;					
					$data["tanggal_spiral"][$nilai] = $tanggal_spiral;					 					

					// var_dump($data["tanggal_klemseng"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_klemseng_max"][$nilai_jadwal] = $id_jadwal_klemseng_max;
				$data["id_jadwal_spiral_max"][$nilai_jadwal] = $id_jadwal_spiral_max;
		

				// reset nilai yang akan di foreaach
				$tanggal_klemseng = "";
				$tanggal_spiral = "";
				

				$id_jadwal_klemseng_max = 0;
				$id_jadwal_spiral_max = 0;
		
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["id_jadwal_klemseng_max"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_klemseng',$data);
	}
	public function display_spiral()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender Spiral',
			'fa' => $query->result(),
		);		

		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$nilai_jadwal =0;

		$klemseng[-1] = null;
		$spiral[-1] = null;

		
		$banding_id[-1]=null;

		$tanggal_klemseng = "";
		$tanggal_spiral = "";
	

		$id_jadwal_klemseng_max = 0;
		$id_jadwal_spiral_max = 0;
	

		foreach($data["fa"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data klemseng
						$ambil_klemseng = $this->fa->ambil_data_fa_klemseng($id_order)->result();
						
						foreach($ambil_klemseng as $sq) {	
							// var_dump($sq->tanggal_klemseng);die;	
							if($sq->tanggal_klemseng != null and $sq->tanggal_klemseng != "0000-00-00" and $sq->tanggal_klemseng != $klemseng[$nilai_mesin-1]){	
								$tanggal_klemseng .= $sq->tanggal_klemseng.", <br>";
							}
							if($sq->id_jadwal_klemseng > $id_jadwal_klemseng_max){
								$id_jadwal_klemseng_max = $sq->id_jadwal_klemseng;
							}
							
							$klemseng[$nilai_mesin] = $sq->tanggal_klemseng;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data spiral
						$ambil_spiral = $this->fa->ambil_data_fa_spiral($id_order)->result();
						foreach($ambil_spiral as $sq) {							
							if($sq->tanggal_spiral != null and $sq->tanggal_spiral != "0000-00-00" and $sq->tanggal_spiral != $spiral[$nilai_mesin-1]){	
								$tanggal_spiral .= $sq->tanggal_spiral.", <br>";
							}	
							if($sq->id_jadwal_spiral > $id_jadwal_spiral_max){
								$id_jadwal_spiral_max = $sq->id_jadwal_spiral;
							}														
							$spiral[$nilai_mesin] = $sq->tanggal_spiral;					
							$nilai_mesin++;
						}$nilai_mesin=0;

											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_klemseng"][$nilai] = $tanggal_klemseng;					
					$data["tanggal_spiral"][$nilai] = $tanggal_spiral;					 					

					// var_dump($data["tanggal_klemseng"]);
					$nilai++;	
				}  						 					
				
				// menangkap nilai id jadwal terkecil
				$data["id_jadwal_klemseng_max"][$nilai_jadwal] = $id_jadwal_klemseng_max;
				$data["id_jadwal_spiral_max"][$nilai_jadwal] = $id_jadwal_spiral_max;
		

				// reset nilai yang akan di foreaach
				$tanggal_klemseng = "";
				$tanggal_spiral = "";
				

				$id_jadwal_klemseng_max = 0;
				$id_jadwal_spiral_max = 0;
		
				
				$nilai_jadwal++;
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}
			// var_dump($data["id_jadwal_klemseng_max"]);die;
			// var_dump($data);
			// die;


		$this->template->load('finishing/template','finishing/finishing_akhir/display_spiral',$data);
	}
	
    // public function jadwal_fa()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->fa->get();
	// 	$data = array(
	// 		'judul' => 'Finishing Akhir',
	// 		'fa' => $query->result(),
	// 	);		
	// 	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa',$data);
	// }
   
    public function edit_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa',$data);
	}
    public function lihat_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa',$data);
}
	public function proses_fa()
	{
		$inputan = $this->input->post(null, TRUE);

		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->tambah_fa($inputan);								
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);

						// ambil data
								$ambil_binding = $this->fa->ambilIDOrder_binding($inputan["id_order"])->result();
								$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($inputan["id_order"])->result();
								$ambil_jahit = $this->fa->ambilIDOrder_jahit($inputan["id_order"])->result();
								$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($inputan["id_order"])->result();
								$ambil_sub = $this->fa->ambilIDOrder_sub($inputan["id_order"])->result();

						
						$jadwal_max_binding = 0;
						$jadwal_max_hardcover = 0;
						$jadwal_max_jahit = 0;
						$jadwal_max_fa_potong = 0;
						$jadwal_max_sub = 0;

							// ambil id jadwal dengan nilai tertinggi
								foreach($ambil_binding as $sq) {
									if($sq->id_jadwal_binding > $jadwal_max_binding) {
										$jadwal_max_binding = $sq->id_jadwal_binding;
									}							
							}$inputan["id_jadwal_binding"] = $jadwal_max_binding+1; 

							foreach($ambil_hardcover as $sq) {
									if($sq->id_jadwal_hardcover > $jadwal_max_hardcover) {
										$jadwal_max_hardcover = $sq->id_jadwal_hardcover;
									}							
								}$inputan["id_jadwal_hardcover"] = $jadwal_max_hardcover+1; 

								foreach($ambil_jahit as $sq) {
									if($sq->id_jadwal_jahit > $jadwal_max_jahit) {
										$jadwal_max_jahit = $sq->id_jadwal_jahit;
									}							
								}$inputan["id_jadwal_jahit"] = $jadwal_max_jahit+1; 

								foreach($ambil_fa_potong as $sq) {
									if($sq->id_jadwal_fa_potong > $jadwal_max_fa_potong) {
										$jadwal_max_fa_potong = $sq->id_jadwal_fa_potong;
									}							
								}$inputan["id_jadwal_fa_potong"] = $jadwal_max_fa_potong+1; 

								foreach($ambil_sub as $sq) {
									if($sq->id_jadwal_sub > $jadwal_max_sub) {
										$jadwal_max_sub = $sq->id_jadwal_sub;
									}							
								}$inputan["id_jadwal_sub"] = $jadwal_max_sub+1; 


								//    echo $inputan["id_order"]."<br><br>";
								//    echo $inputan["id_jadwal_binding"]."<br>";
								//    echo $inputan["id_jadwal_hardcover"]."<br>";
								//    echo $inputan["id_jadwal_jahit"]."<br>";
								//    echo $inputan["id_jadwal_fa_potong"]."<br>";
								//    echo $inputan["id_jadwal_sub"]."<br>";die;



			$this->fa->edit_fa($inputan);								
		}		
		

		echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				

		if($inputan["nama_mesin"] == "binding"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_binding')."'; </script>";
		}
		if($inputan["nama_mesin"] == "hardcover"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_hardcover')."'; </script>";
		}
		if($inputan["nama_mesin"] == "jahit"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_jahit')."'; </script>";
		}
		if($inputan["nama_mesin"] == "potong"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_potong')."'; </script>";
		}
		if($inputan["nama_mesin"] == "sub"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_sub')."'; </script>";
		}		
		


}

public function proses_fa_kalender()
	{
		$inputan = $this->input->post(null, TRUE);

		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->tambah_fa_kalender($inputan);	
			// echo" ini tambah";die;							
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);

			// ambil data
								$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($inputan["id_order"])->result();
								$ambil_spiral = $this->fa->ambilIDOrder_spiral($inputan["id_order"])->result();							

						
						$jadwal_max_klemseng = 0;
						$jadwal_max_spiral = 0;					

							// ambil id jadwal dengan nilai tertinggi
								foreach($ambil_klemseng as $sq) {
									if($sq->id_jadwal_klemseng > $jadwal_max_klemseng) {
										$jadwal_max_klemseng = $sq->id_jadwal_klemseng;
									}							
								}$inputan["id_jadwal_klemseng"] = $jadwal_max_klemseng+1; 

								foreach($ambil_spiral as $sq) {
									if($sq->id_jadwal_spiral > $jadwal_max_spiral) {
										$jadwal_max_spiral = $sq->id_jadwal_spiral;
									}							
								}$inputan["id_jadwal_spiral"] = $jadwal_max_spiral+1; 

								//    echo $inputan["id_order"]."<br><br>";
								//    echo $inputan."<br>";
								//    echo $inputan["id_jadwal_spiral"]."<br>";						
								// echo" ini edit";die;

			$this->fa->edit_fa_kalender($inputan);								
		}			
		

		echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
		
		if($inputan["nama_mesin"] == "spiral"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_spiral')."'; </script>";
		}
		if($inputan["nama_mesin"] == "klemseng"){
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/display_klemseng')."'; </script>";
		}


}



	// MESIN BINDING
    public function jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_binding();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Binding',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_binding($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_binding',$data);
}
	public function edit_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
			$query = $this->fa->edit_binding($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		

		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;
		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-binding',$data);
}

    public function tambah_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_binding($id);
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);	
		$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;
		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-binding',$data);
	}    
    public function lihat_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_binding($id);
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-binding',$data);
	}
	public function proses_binding()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);


			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


			$this->fa->proses_edit_binding($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}	

		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->proses_tambah_binding($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}	
			
}

// MESIN HARDCOVER
	public function jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_hardcover();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Hardcover',
			'fa' => $query->result(),
		);
				
		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_hardcover($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}
		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_hardcover',$data);
}
	public function edit_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-hardcover',$data);
}
    public function tambah_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-hardcover',$data);
	}    
    public function lihat_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-hardcover',$data);
}
	public function proses_hardcover()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);

			
			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


			$this->fa->proses_edit_hardcover($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->proses_tambah_hardcover($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
		}			
}
	
//// MESIN jahit
public function jadwal_fa_jahit()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_jahit();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Jahit',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_jahit($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_jahit',$data);
}
public function edit_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-jahit',$data);
}
public function tambah_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-jahit',$data);
}    
public function lihat_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-jahit',$data);
}
public function proses_jahit()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);
		
		
			// prosess ubah status umum
			if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
				$jumlah_mesin = 0;
				$jumlah_selesai = 0;
				$inputan["status_umum"] = "";
			
				if($inputan["tanggal_pelaksanaan_binding"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_binding"] == "binding"){            
							$jumlah_selesai +=1;
						}                      
				}

				if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_hardcover"] == "hardcover"){            
							$jumlah_selesai +=1;
						}                      
				}
				if($inputan["tanggal_pelaksanaan_jahit"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_jahit"] == "jahit"){            
							$jumlah_selesai +=1;
						}                      
				}
				if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_fa_potong"] == "fa potong"){            
							$jumlah_selesai +=1;
						}                      
				}
				if($inputan["tanggal_pelaksanaan_sub"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_sub"] == "sub"){            
							$jumlah_selesai +=1;
						}                      
				}
				if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_klemseng"] == "klemseng"){            
							$jumlah_selesai +=1;
						}                      
				}
				if($inputan["tanggal_pelaksanaan_spiral"] !=""){
						$jumlah_mesin +=1;
						if($inputan["status_spiral"] == "spiral"){            
							$jumlah_selesai +=1;
						}                      
				}
				
				// deklarasi status umum baru
				if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
					$inputan["status_umum"] = "finishing akhir";
				}else{
					
					$this->load->model('FinishingProses_m');
					//    ambil tanggal tiap mesin finishing proses
										$tanggal_laminasi = "";
										$tanggal_mbo = "";
										$tanggal_shoe = "";
										$tanggal_susun = "";
										$tanggal_sub = "";

										$status_laminasi = "";
										$status_mbo = "";
										$status_shoe = "";
										$status_susun = "";
										$status_sub = "";
																$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																	foreach($ambil_laminasi as $sq) {
																		if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																			$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																		}
																		$status_laminasi = $sq->status_laminasi;
																		
																}
																$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																	foreach($ambil_mbo as $sq) {
																		if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																			$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																		}
																		$status_mbo = $sq->status_mbo;
																}
																$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																	foreach($ambil_shoe as $sq) {
																		if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																			$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																		}
																		$status_shoe = $sq->status_shoe;
																}
																$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																	foreach($ambil_susun as $sq) {
																		if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																			$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																		}
																		$status_susun = $sq->status_susun;
																}
																$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																	foreach($ambil_sub as $sq) {
																		if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																			$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																		}
																		$status_sub = $sq->status_sub;
																}
										
					// prosess ubah status umum																	
															$jumlah_mesin = 0;
															$jumlah_selesai = 0;																							
														
															if($tanggal_laminasi !=""){
																	$jumlah_mesin +=1;
																	if($status_laminasi == "laminasi"){            
																		$jumlah_selesai +=1;
																	}                      
															}

															if($tanggal_mbo !=""){
																	$jumlah_mesin +=1;
																	if($status_mbo == "mbo"){            
																		$jumlah_selesai +=1;
																	}                      
															}
															if($tanggal_shoe !=""){
																	$jumlah_mesin +=1;
																	if($status_shoe == "shoe"){            
																		$jumlah_selesai +=1;
																	}                      
															}
															if($tanggal_susun !=""){
																	$jumlah_mesin +=1;
																	if($status_susun == "susun"){           
																		$jumlah_selesai +=1;
																	}                      
															}
															if($tanggal_sub !=""){
																	$jumlah_mesin +=1;
																	if($status_sub == "sub"){          
																		$jumlah_selesai +=1;
																	}                      
															}
															

															if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																$inputan["status_umum"] = "finishing proses";
															}
															else $inputan["status_umum"] = "cetak";																							
									   

				}
				$this->fa->status_umum($inputan);
}	     


		$this->fa->proses_edit_jahit($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_jahit($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}			
}

//// MESIN fa_potong
public function jadwal_fa_potong()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_fa_potong();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Potong',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_fa_potong($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_potong',$data);
}
public function edit_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-potong',$data);
}
public function tambah_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-potong',$data);
}    
public function lihat_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-potong',$data);
}
public function proses_fa_potong()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		
			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


		$this->fa->proses_edit_fa_potong($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_fa_potong($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}			
}

//// MESIN sub
public function jadwal_fa_sub()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_sub();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing Display Sub',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_sub($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}
			
	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_sub',$data);
}
public function edit_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;	
			
			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-sub',$data);
}
public function tambah_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;	

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-sub',$data);
}    
public function lihat_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;	

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-sub',$data);
}
public function proses_sub()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		
			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


		$this->fa->proses_edit_sub($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}		
	
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_sub($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}	
}

	
//// MESIN spiral
public function jadwal_fa_spiral()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_spiral();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender Spiral',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_spiral($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_spiral > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_spiral;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}	
	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_spiral',$data);
}
public function edit_jadwal_fa_spiral($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_spiral($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_spiral($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_spiral > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_spiral;
				}
				$tampung_jadwal[] = $sq->id_jadwal_spiral;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-spiral',$data);
}
public function tambah_jadwal_fa_spiral($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_spiral($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_spiral($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_spiral > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_spiral;
				}
				$tampung_jadwal[] = $sq->id_jadwal_spiral;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-spiral',$data);
}    
public function lihat_jadwal_fa_spiral($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_spiral($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_spiral($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_spiral > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_spiral;
				}
				$tampung_jadwal[] = $sq->id_jadwal_spiral;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-spiral',$data);
}
public function proses_spiral()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		
			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


		$this->fa->proses_edit_spiral($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_spiral')."'; </script>"; 
	}	
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_spiral($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_spiral')."'; </script>"; 
	}		
}

	
//// MESIN klemseng
public function jadwal_fa_klemseng()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_klemseng();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender Klemseng',
			'fa' => $query->result(),
		);
				
		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_klemseng($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_klemseng',$data);
}
public function edit_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

			
		/////////    ambil tanggal tiap mesin finishing akhir
						$tanggal_binding = "";
						$tanggal_hardcover = "";
						$tanggal_jahit = "";
						$tanggal_fa_potong = "";
						$tanggal_sub = "";
						$tanggal_klemseng = "";
						$tanggal_spiral = "";

							$ambil_binding = $this->fa->ambilIDOrder_binding($id_order)->result();
								foreach($ambil_binding as $sq) {
									if($sq->tanggal_pelaksanaan_binding != "0000-00-00") {
										$tanggal_binding = $sq->tanggal_pelaksanaan_binding;
									}
							}
							$ambil_hardcover = $this->fa->ambilIDOrder_hardcover($id_order)->result();
								foreach($ambil_hardcover as $sq) {
									if($sq->tanggal_pelaksanaan_hardcover != "0000-00-00") {
										$tanggal_hardcover = $sq->tanggal_pelaksanaan_hardcover;
									}
							}
							$ambil_jahit = $this->fa->ambilIDOrder_jahit($id_order)->result();
								foreach($ambil_jahit as $sq) {
									if($sq->tanggal_pelaksanaan_jahit != "0000-00-00") {
										$tanggal_jahit = $sq->tanggal_pelaksanaan_jahit;
									}
							}
							$ambil_fa_potong = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
								foreach($ambil_fa_potong as $sq) {
									if($sq->tanggal_pelaksanaan_fa_potong != "0000-00-00") {
										$tanggal_fa_potong = $sq->tanggal_pelaksanaan_fa_potong;
									}
							}
							$ambil_sub = $this->fa->ambilIDOrder_sub($id_order)->result();
								foreach($ambil_sub as $sq) {
									if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
										$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
									}
							}
							$ambil_klemseng = $this->fa->ambilIDOrder_klemseng($id_order)->result();
								foreach($ambil_klemseng as $sq) {
									if($sq->tanggal_pelaksanaan_klemseng != "0000-00-00") {
										$tanggal_klemseng = $sq->tanggal_pelaksanaan_klemseng;
									}
							}
							$ambil_spiral = $this->fa->ambilIDOrder_spiral($id_order)->result();
								foreach($ambil_spiral as $sq) {
									if($sq->tanggal_pelaksanaan_spiral != "0000-00-00") {
										$tanggal_spiral = $sq->tanggal_pelaksanaan_spiral;
									}
							}


	$data['tanggal_binding'] = $tanggal_binding;
	$data['tanggal_hardcover'] = $tanggal_hardcover;
	$data['tanggal_jahit'] = $tanggal_jahit;
	$data['tanggal_fa_potong'] = $tanggal_fa_potong;
	$data['tanggal_sub'] = $tanggal_sub;
	$data['tanggal_klemseng'] = $tanggal_klemseng;
	$data['tanggal_spiral'] = $tanggal_spiral;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-klemseng',$data);
}
public function tambah_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-klemseng',$data);
}    
public function lihat_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-klemseng',$data);
}
public function proses_klemseng()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		
			// prosess ubah status umum
						if($inputan["so_status"] == "cetak" || $inputan["so_status"] == "finishing proses" || $inputan["so_status"] == "finishing akhir" || $inputan["so_status"] == "quality control"){
												$jumlah_mesin = 0;
												$jumlah_selesai = 0;
												$inputan["status_umum"] = "";
											
												if($inputan["tanggal_pelaksanaan_binding"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_binding"] == "binding"){            
															$jumlah_selesai +=1;
														}                      
												}

												if($inputan["tanggal_pelaksanaan_hardcover"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_hardcover"] == "hardcover"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_jahit"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_jahit"] == "jahit"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_fa_potong"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_fa_potong"] == "fa potong"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_sub"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_sub"] == "sub"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_klemseng"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_klemseng"] == "klemseng"){            
															$jumlah_selesai +=1;
														}                      
												}
												if($inputan["tanggal_pelaksanaan_spiral"] !=""){
														$jumlah_mesin +=1;
														if($inputan["status_spiral"] == "spiral"){            
															$jumlah_selesai +=1;
														}                      
												}
												
												// deklarasi status umum baru
												if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
													$inputan["status_umum"] = "finishing akhir";
												}else{
													
													$this->load->model('FinishingProses_m');
													//    ambil tanggal tiap mesin finishing proses
																		$tanggal_laminasi = "";
																		$tanggal_mbo = "";
																		$tanggal_shoe = "";
																		$tanggal_susun = "";
																		$tanggal_sub = "";

																		$status_laminasi = "";
																		$status_mbo = "";
																		$status_shoe = "";
																		$status_susun = "";
																		$status_sub = "";
																								$ambil_laminasi = $this->FinishingProses_m->ambilIDOrder($inputan["id_order"])->result();
																									foreach($ambil_laminasi as $sq) {
																										if($sq->tanggal_pelaksanaan_laminasi != "0000-00-00") {
																											$tanggal_laminasi = $sq->tanggal_pelaksanaan_laminasi;
																										}
																										$status_laminasi = $sq->status_laminasi;
																										
																								}
																								$ambil_mbo = $this->FinishingProses_m->ambilIDOrder_mbo($inputan["id_order"])->result();
																									foreach($ambil_mbo as $sq) {
																										if($sq->tanggal_pelaksanaan_mbo != "0000-00-00") {
																											$tanggal_mbo = $sq->tanggal_pelaksanaan_mbo;
																										}
																										$status_mbo = $sq->status_mbo;
																								}
																								$ambil_shoe = $this->FinishingProses_m->ambilIDOrder_shoe($inputan["id_order"])->result();
																									foreach($ambil_shoe as $sq) {
																										if($sq->tanggal_pelaksanaan_shoe != "0000-00-00") {
																											$tanggal_shoe = $sq->tanggal_pelaksanaan_shoe;
																										}
																										$status_shoe = $sq->status_shoe;
																								}
																								$ambil_susun = $this->FinishingProses_m->ambilIDOrder_susun($inputan["id_order"])->result();
																									foreach($ambil_susun as $sq) {
																										if($sq->tanggal_pelaksanaan_susun != "0000-00-00") {
																											$tanggal_susun = $sq->tanggal_pelaksanaan_susun;
																										}
																										$status_susun = $sq->status_susun;
																								}
																								$ambil_sub = $this->FinishingProses_m->ambilIDOrder_sub($inputan["id_order"])->result();
																									foreach($ambil_sub as $sq) {
																										if($sq->tanggal_pelaksanaan_sub != "0000-00-00") {
																											$tanggal_sub = $sq->tanggal_pelaksanaan_sub;
																										}
																										$status_sub = $sq->status_sub;
																								}
																		
													// prosess ubah status umum																	
																							$jumlah_mesin = 0;
																							$jumlah_selesai = 0;																							
																						
																							if($tanggal_laminasi !=""){
																									$jumlah_mesin +=1;
																									if($status_laminasi == "laminasi"){            
																										$jumlah_selesai +=1;
																									}                      
																							}

																							if($tanggal_mbo !=""){
																									$jumlah_mesin +=1;
																									if($status_mbo == "mbo"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_shoe !=""){
																									$jumlah_mesin +=1;
																									if($status_shoe == "shoe"){            
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_susun !=""){
																									$jumlah_mesin +=1;
																									if($status_susun == "susun"){           
																										$jumlah_selesai +=1;
																									}                      
																							}
																							if($tanggal_sub !=""){
																									$jumlah_mesin +=1;
																									if($status_sub == "sub"){          
																										$jumlah_selesai +=1;
																									}                      
																							}
																							

																							if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
																								$inputan["status_umum"] = "finishing proses";
																							}
																							else $inputan["status_umum"] = "cetak";																							
																	   

												}
												$this->fa->status_umum($inputan);
						}	     


		$this->fa->proses_edit_klemseng($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}	
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_klemseng($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}			
}



// hapus binding
	public function hapus_binding($id)
	{		
		$data_id = explode("-" , $id);

		// data 0 = id_mesin, data 1 = id_order
		$jumlah_id = 0;
				$ambil = $this->fa->ambilIDOrder_binding($data_id[1])->result();
				foreach($ambil as $d){
					$jumlah_id+=1;
				}				
		if($jumlah_id >1){
				$this->fa->hapus_binding($data_id[0]);
				echo "<script> alert('Data Berhasil Dihapus'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}else{
				$this->fa->hapus_binding_update($data_id[1]);
				echo "<script> alert('Data Berhasil Dihapus'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}
}

// hapus hardcover
public function hapus_hardcover($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_hardcover($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_hardcover($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
	}else{
			$this->fa->hapus_hardcover_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
	}
}

// hapus jahit
public function hapus_jahit($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_jahit($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_jahit($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}else{
			$this->fa->hapus_jahit_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}
}

// hapus fa_potong
public function hapus_potong($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_fa_potong($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_fa_potong($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}else{
			$this->fa->hapus_fa_potong_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}
}

// hapus sub
public function hapus_sub($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_sub($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_sub($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}else{
			$this->fa->hapus_sub_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}
}

// hapus klemseng
public function hapus_klemseng($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_klemseng($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_klemseng($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}else{
			$this->fa->hapus_klemseng_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}
}

// hapus spiral
public function hapus_spiral($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_spiral($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_spiral($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_spiral')."'; </script>"; 
	}else{
			$this->fa->hapus_spiral_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_spiral')."'; </script>"; 
	}
}





}
