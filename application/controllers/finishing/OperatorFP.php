<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorFP extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing_operator();
		$this->load->model('FinishingProses_m', 'fp');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/op-fp',$data);
	}

//// MESIN LAMINASI
	public function jadwal_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_laminasi();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-laminasi',$data);
	}
public function edit_op_laminasi($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_laminasi($id);
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-tambah-laminasi',$data);
	}
	public function proses_laminasi()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);   

			$this->fp->proses_edit_laminasi($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/OperatorFP/jadwal_op_laminasi')."'; </script>"; 
		}		
}


//// MESIN MBO
	public function jadwal_op_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_mbo();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-mbo',$data);
	}
	public function edit_op_mbo($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_mbo($id);
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-tambah-mbo',$data);
	}
	public function proses_mbo()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);   

			$this->fp->proses_edit_mbo($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/OperatorFP/jadwal_op_mbo')."'; </script>"; 
		}		
}

	// MESIN SHOE
	public function jadwal_op_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_shoe();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-shoe',$data);
	}
	public function edit_op_shoe($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_shoe($id);
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-tambah-shoe',$data);
	}
	public function proses_shoe()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);   

			$this->fp->proses_edit_shoe($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/OperatorFP/jadwal_op_shoe')."'; </script>"; 
		}		
}

//// MESIN SUSUN
	public function jadwal_op_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_susun();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-susun',$data);
	}
	public function edit_op_susun($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_susun($id);
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-tambah-susun',$data);
	}
	public function proses_susun()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);   

			$this->fp->proses_edit_susun($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/OperatorFP/jadwal_op_susun')."'; </script>"; 
		}		
}

	// SUB
	public function jadwal_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_sub();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-sub',$data);
	}
	public function edit_op_sub($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_sub($id);
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-tambah-sub',$data);
	}
	public function proses_sub()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);   

			$this->fp->proses_edit_sub($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/OperatorFP/jadwal_op_sub')."'; </script>"; 
		}		
}
}
