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
                $data['mahasiswa']= $this->data_login->ambil_data()->result();
	}
        
        function aksi_login(){
		$username = $this->input->post('form-username');
		$password = $this->input->post('form-password');
		
                
                $where = array(
			'User' => $username,
			'Pass' => $password
                        
                        
			);
                
                $datalogin = $this->data_login->cek_login('mahasiswa',$where);
                $datalogin = $datalogin->result_array();
                //echo var_dump($datalogin);
                $jabatan = $datalogin[0]['Jabatan'];
               
                
		$cek = $this->data_login->cek_login('mahasiswa',$where)->num_rows();
		if($cek > 0 && $jabatan=='admin'){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
                                'jab'=>$jabatan
                               
                                
                          
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('Admin');
                        
                        
                        }
                else if($cek > 0 && $jabatan=='mahasiswa'){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
                                 'jab'=>$jabatan
                          
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('logmhs');
                        
                        
                        }
                          
		else{
			echo "Username atau password salah !";
		}
	}
  
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}    
   
    
} 


