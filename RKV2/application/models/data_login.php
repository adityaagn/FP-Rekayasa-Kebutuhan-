<?php

class Data_login extends CI_Model {
    
    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
        
            
    function  ambil_data(){
        $mahasiswa = $this->db->get('mahasiswa');
        return $mahasiswa;
    }
    
}