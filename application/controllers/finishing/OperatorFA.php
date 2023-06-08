<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorFA extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing_operator();
		$this->load->model('FinishingAkhir_m', 'fa');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/op-fa',$data);
	}

	// MESIN BINDING
	public function jadwal_op_binding()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_binding();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/binding/op-fa-binding',$data);
	}
	public function edit_op_binding($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_binding($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/binding/op-fa-tambah-binding',$data);
	}
	public function proses_binding()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_binding($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_binding')."'; </script>"; 
		}		
}

	// MESIN POTONG
	public function jadwal_op_potong()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_fa_potong();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/potong/op-fa-potong',$data);
	}
	public function edit_op_potong($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_fa_potong($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/potong/op-fa-tambah-potong',$data);
	}
	public function proses_potong()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_fa_potong($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_potong')."'; </script>"; 
		}		
}

	// MESIN JAHIT
	public function jadwal_op_jahit()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_jahit();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/jahit/op-fa-jahit',$data);
	}
	public function edit_op_jahit($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_jahit($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/jahit/op-fa-tambah-jahit',$data);
	}
	public function proses_jahit()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_jahit($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_jahit')."'; </script>"; 
		}		
}

	// MESIN HARDCOVER
	public function jadwal_op_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_hardcover();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/hardcover/op-fa-hardcover',$data);
	}
	public function edit_op_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/hardcover/op-fa-tambah-hardcover',$data);
	}
	public function proses_hardcover()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_hardcover($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_hardcover')."'; </script>"; 
		}		
}

	// MESIN KLEMSENG
	public function jadwal_op_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_klemseng();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/klemseng/op-fa-klemseng',$data);
	}
	public function edit_op_klemseng($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_klemseng($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/klemseng/op-fa-tambah-klemseng',$data);
	}
	public function proses_klemseng()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_klemseng($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_klemseng')."'; </script>"; 
		}		
}

	// MESIN SPIRAL
	public function jadwal_op_spiral()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_spiral();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/spiral/op-fa-spiral',$data);
	}
	public function edit_op_spiral($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_spiral($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/spiral/op-fa-tambah-spiral',$data);
	}
	public function proses_spiral()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_spiral($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_spiral')."'; </script>"; 
		}		
}

	// SUB
	public function jadwal_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_sub();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/sub/op-fa-sub',$data);
	}
	public function edit_op_sub($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_sub($id);
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/sub/op-fa-tambah-sub',$data);
	}
	public function proses_sub()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE); 

			$this->fa->proses_edit_sub($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/operatorFA/jadwal_op_sub')."'; </script>"; 
		}		
}
}
