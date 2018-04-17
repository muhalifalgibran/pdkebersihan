<?php
class M_pelanggan extends CI_Model{

    function __construct(){
        $this->load->database();

    }

    public function daftarPerusahaan($data){
        $this->db->insert('pelanggan',$data);
    }

    public function login($username, $pass){
        $this->db->where('lower(username)',$username);
        $query = $this->db->get('pelanggan');
        if ($query->num_rows() > 0){
            $user = $query->result()[0];
//            var_dump($this->bcrypt->check_password($pass,$user->password));
            if ($this->bcrypt->check_password($pass,$user->password)){
                return $user;
            }

        }
            return false;
    }

    public function  updateDate($id,$data){
        $this->db->set($data);
        $this->db->where('idPelanggan',$id);
        $this->db->update('pelanggan');
    }


}