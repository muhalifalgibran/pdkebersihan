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

    public function getStatus($where){
        $query = $this->db->get_where('pelanggan',$where);
        $hasil =  $query->result()[0];
        return $hasil;
    }

    public function getPenawaran($start, $limit, $where){
        $this->db->where($where);
        $query = $this->db->get('proposal_penawaran',$start,$limit);
        return $query;
    }

    public function total_inbox($where){
        $this->db->select('count(*) as total');
        $query = $this->db->get_where('proposal_penawaran',$where);
        return $query->result()[0];
    }


    public function updateDate($id,$data){
        $this->db->set($data);
        $this->db->where('idPelanggan',$id);
        $this->db->update('pelanggan');
    }

    public function hapus($where){
        $this->db->delete('proposal_penawaran',array('idProposal' => $where));
    }

    public function editStatus($where,$edit){
        $this->db->where($where);
        $this->db->update('proposal_penawaran',$edit);

    }




}