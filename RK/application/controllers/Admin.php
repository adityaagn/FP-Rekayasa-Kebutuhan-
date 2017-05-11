<?php
class Admin extends CI_Controller
{
	function index()
	{
		$this->load->view('Dashboard_admin');
	}

	function list_mahasiswa()
	{
		$this->load->model('Model_admin');
		$data['mhs']=$this->Model_admin->list_mhs()->result();
		$this->load->view('Pilih_mahasiswa_admin',$data);
	}

	function deadline()
	{
		$this->load->view('Deadline_admin');
	}
}
?>