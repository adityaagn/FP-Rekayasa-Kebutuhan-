<?php
class Admin extends CI_Controller
{
	function index()
	{
		$this->load->model('Model_admin');
		$data['tgl1']=$this->Model_admin->tanggal(1)->row_array();
		$data['tgl2']=$this->Model_admin->tanggal(2)->row_array();
		$this->load->view('Dashboard_admin',$data);
	}
        
        
        
	function list_mahasiswa()
	{
		$this->load->model('Model_admin');
		$data['mhs']=$this->Model_admin->list_mhs()->result();
		$this->load->view('Pilih_mahasiswa_admin',$data);
	}

	function data_kp()
	{
		$this->load->model('Model_admin');
		$NRP = $this->uri->segment(3);
		$data['mhs']= $this->Model_admin->nama_mhs($NRP)->row_array();
        $data['dkp'] = $this->Model_admin->kp_mhs($NRP)->result();
		$this->load->view('Data_kp_admin',$data);
	}

	function data_ta()
	{
		$this->load->model('Model_admin');
		$NRP = $this->uri->segment(3);
		$data['mhs']= $this->Model_admin->nama_mhs($NRP)->row_array();
        $data['dkp'] = $this->Model_admin->kp_mhs($NRP)->result();
		$this->load->view('Data_ta_admin',$data);
	}

	function deadline()
	{
		$this->load->model('Model_admin');
		$data['tgl1']=$this->Model_admin->tanggal(1)->row_array();
		$data['tgl2']=$this->Model_admin->tanggal(2)->row_array();
		$this->load->view('Deadline_admin',$data);
	}

	function edittgl1()
	{
		$id         = $this->input->post('tgl');
        $datatgl = array(
            'id'   =>  1,
            'tanggal'   =>  $this->input->post('tgl'));
        $this->db->where('id',1);
        $this->db->update('tanggal',$datatgl);
        redirect('Admin/deadline');
	}

	function edittgl2()
	{
		$id         = $this->input->post('tgl');
        $datatgl = array(
            'id'   =>  2,
            'tanggal'   =>  $this->input->post('tgl'));
        $this->db->where('id',2);
        $this->db->update('tanggal',$datatgl);
        redirect('Admin/deadline');
	}
        function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}    
   
}
?>