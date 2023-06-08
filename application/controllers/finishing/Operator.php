<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratOrder_m', 'so');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator/finishing',$data);
	}
	public function op_fp()
	{
		$query = $this->so->get_edit();
		$data = array(
			'judul' => 'Operator',
			'so' => $query->result(),
		);			
		$this->template->load('finishing/template','finishing/operator/op-fp',$data);
	}
}