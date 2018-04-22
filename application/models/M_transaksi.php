<?php
class M_transaksi extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function setTransaksi($data){
        $this->db->insert('transaksi',$data);
    }
}