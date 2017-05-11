<?php
class Model_admin extends CI_Model
{
	function list_mhs()
	{
		$mahasiswa=$this->db->get('list_mahasiswa');
		return $mahasiswa;
	}
}
?>