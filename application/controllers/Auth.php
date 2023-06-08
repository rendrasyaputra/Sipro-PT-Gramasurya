<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() 
	{   
        check_already_login_pracetak();     
		$this->load->view('login');
	}

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])){
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if($query->num_rows() > 0){
                $row = $query->row();
                $params = array(
                    'id_user' => $row->id_user,
                    'level' =>$row->level
                );
                $this->session->set_userdata($params);
                if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 4 ||  $this->session->userdata('level') == 5 ||  $this->session->userdata('level') == 6 ||  $this->session->userdata('level') == 8 ){
                    echo "<script>
                    alert('Selamat Login Berhasil')
                    window.location = '".site_url('pracetak/Suratorder')."';
                </script>";
                }else if($this->session->userdata('level') == 2){
                    echo "<script>
                    alert('Selamat Login Berhasil')
                    window.location = '".site_url('cetak/DisplayUmum')."';
                </script>";
                }else if($this->session->userdata('level') == 3){
                    echo "<script>
                    alert('Selamat Login Berhasil')
                    window.location = '".site_url('finishing/Display')."';
                </script>";
                }else if($this->session->userdata('level') == 7){
                    echo "<script>
                    alert('Selamat Login Berhasil')
                    window.location = '".site_url('finishing/OperatorFP')."';
                </script>";
                }
                
            }else {
                echo "<script>
                    alert('Astaga Login Gagal')
                    window.location = '".site_url('auth/index')."';
                </script>";
            }
        }
    }



    public function logout() 
	{
        $params = array ('id_user' , 'level');
		$this->session->unset_userdata($params);
        redirect('auth/index');  
    }
}
