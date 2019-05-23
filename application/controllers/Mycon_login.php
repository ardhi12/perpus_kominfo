<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycon_login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('status_login')=="Sedang Login") {
			echo "<script>window.location = '".site_url('beranda')."';</script>";
		}		
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	public function cek_login() 
	{		
		$where = array('username' => $this->input->post('username', TRUE));		
		$hasil = $this->Mymod->get_where('users',$where);
		$pass_input = $this->input->post('password', TRUE);
		$pass_db = $hasil->row_array();		
		//bandingkan password input dan password DB	
		//password menggunakan type password HASH	
		if( password_verify($pass_input, $pass_db['password']) ) {
		    if ($hasil->num_rows() > 0) {
				foreach ($hasil->result() as $sess) {
					$sess_data['status_login'] = 'Sedang Login';
					$sess_data['id_user'] = $sess->id_user;
					$sess_data['username'] = $sess->username;
					$sess_data['level'] = $sess->level;								
					$this->session->set_userdata($sess_data);
				}
			echo "<script>alert('Login berhasil!');window.location='".site_url('beranda')."';</script>";
			}
		}else {
		    echo "<script>alert('Login gagal! Username atau password salah');window.history.back();</script>";
		}		
			
	}

	public function logout() {
		$this->session->unset_userdata('status_login');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');		
		session_destroy();
		redirect(site_url());
	}

}

