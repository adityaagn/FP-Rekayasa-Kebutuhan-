<?php
defined('BASEPATH') OR exit('No Direct access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class home extends CI_Controller{
    
    	function __construct(){
		parent::__construct();		
		$this->load->model('data_login');
 
	}
        function index(){
		$this->load->view('login_form');
	}
        
        function aksi_login(){
		$username = $this->input->post('form-username');
		$password = $this->input->post('form-password');
		
                
                $where = array(
			'User' => $username,
			'Pass' => $password
			);
                
		$cek = $this->data_login->cek_login('mahasiswa',$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('mahasiswa');
 
		}else{
			echo "Username dan password salah !";
		}
	}
  
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}    
   
    
} 


