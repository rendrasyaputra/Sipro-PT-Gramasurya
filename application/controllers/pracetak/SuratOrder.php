<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
		check_not_login();
        $this->load->model('SuratOrder_m', 'so');
    }

	public function index()
	{
		check_not_login();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Surat Order Pracetak',
			'so' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder',$data);
	}


	public function tambah_so()
	{
		$query = $this->so->get_id_order();
		$data = array(
			'judul' => 'Tambah SO Pracetak',
			'so' => $query->row(),
		);	
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-tambah', $data);
	}
	public function edit_so($id)
	{
		$query = $this->so->get_edit($id);
		$data = array(
			'judul' => 'Edit SO Pracetak',
			'so' => $query->result(),
		);			
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-edit', $data);
	}
	public function lihat_so($id)
	{
		$query = $this->so->get_edit($id);
		$data = array(
			'judul' => 'Lihat SO Pracetak',
			'so' => $query->result(),
		);			
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-lihat', $data);
	}
	public function filter_bulan()
	{
		check_not_login();
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$query = $this->so->filter_bulan($bulan, $tahun);
		$data = array(
			'judul' => 'Surat Order Pracetak',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'so' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-bulan',$data);
	}
	public function del($id)
	{
		$this->so->del($id);
		if($this->db->affected_rows() >0 ){
			echo "<script>alert('Data Berhasil Dihapus');</script>";
		}
		echo "<script>window.location='".site_url('pracetak/suratorder')."';</script>";
	}
	public function proses()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->so->add($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('pracetak/suratorder')."'; </script>"; 
		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->so->edit($inputan);
				if($this->db->affected_rows() > 0){					
					// echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('pracetak/suratorder')."'; </script>"; 
		}
		
		
	}
	
	

}
