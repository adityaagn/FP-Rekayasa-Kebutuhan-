<?php
class logmhs extends CI_Controller
{
    	function __construct(){
		parent::__construct();		
		$this->load->model('data_login');
		//$this->load->helper('url');
 
	}
	function index()
	{
		$this->load->model('Model_admin');
		$data['tgl1']=$this->Model_admin->tanggal(1)->row_array();
		$data['tgl2']=$this->Model_admin->tanggal(2)->row_array();
		$this->load->view('Dashboard_mahasiswa',$data);
	}
        function tambah(){
		$this->load->view('view_signup');
	}
        
          function tambah_user_aksi(){
		$nama = $this->input->post('nama');
		$nrp= $this->input->post('nrp');
		$username = $this->input->post('user');
                $password = $this->input->post('pass');
                $jabatan= $this->input->post('jab');
              
		$data = array(
			'Nama_mhs' => $nama,
			'NRP' => $nrp,
			'User' => $username,
                        'Pass'=>$password,
                        'Jabatan'=>$jabatan
                        
			);
		$this->data_login->input_data($data,'mahasiswa');
		redirect('');
	}

	function uploadkp()
	{
		$this->load->view('Upload_KP');
		// $data['mhs']=$this->Model_admin->list_mhs()->result();
		// $this->load->view('Pilih_mahasiswa_admin',$data);
	}

	function uploadta()
	{
		$this->load->view('Upload_TA');
		// $data['mhs']=$this->Model_admin->list_mhs()->result();
		// $this->load->view('Pilih_mahasiswa_admin',$data);
	}

	function data_kp()
	{
		$this->load->model('Model_admin');
		$NRP = $this->uri->segment(3);
		$data['mhs']= $this->Model_admin->nama_mhs($NRP)->row_array();
        $data['dkp'] = $this->Model_admin->kp_mhs($NRP)->result();
		$this->load->view('Data_kp_admin',$data);
	}

	function deadline()
	{
		$this->load->view('Deadline_admin');
	}
}
?>