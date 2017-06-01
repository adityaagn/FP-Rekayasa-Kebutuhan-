<?php
class logmhs extends CI_Controller
{
	function index()
	{
		$this->load->view('Dashboard_mahasiswa');
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