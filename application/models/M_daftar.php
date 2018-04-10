<?php
class M_daftar extends CI_Model{

    function __construct(){
        $this->load->database();
    }

    public function daftarPerusahaan($data){
        $this->db->insert('pelanggan',$data);
    }

    public function login($table,$data){
        return $this->db->get_where($table,$data);
    }


}