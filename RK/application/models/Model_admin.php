<?php
class Model_admin extends CI_Model
{
	function list_mhs()
	{
		$mahasiswa=$this->db->get('list_mahasiswa');
		return $mahasiswa;
	}

	function nama_mhs($NRP)
	{
		return $this->db->get_where('list_mahasiswa',array('NRP'=>$NRP));
	}

	function kp_mhs($NRP)
	{
		return $this->db->get_where('data_kp',array('NRP'=>$NRP));
	}
}
?>