<?php
class M_admin extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function hitungCalonPelanggan(){
        $this->db->select('count(*) AS totalCalon');
        $this->db->where('status','calon pelanggan');
        $query = $this->db->get('pelanggan')->row_array();
        return $query;
    }

    public function hitungJumlahTR(){
        $this->db->select('count(*) as tr');
        return $this->db->get('transaksi')->row_array();
    }

    public function hitungProposal(){
        $this->db->select('count(*) as pr');
        return $this->db->get('proposal_penawaran')->row_array();
    }

    public function hitungPelanggan(){
        $this->db->select('count(*) AS totalPelanggan');
        $this->db->where('status','pelanggan');
        $query = $this->db->get('pelanggan')->row_array();
        return $query;
    }

    public function getDaftarPenawaran(){
        $this->db->select('*');
        $this->db->from('proposal_penawaran as pp');
        $this->db->join('pelanggan as pel', 'pp.idPelanggan = pel.idPelanggan');
        $this->db->join('transaksi as tran', 'pel.idPelanggan = tran.idPelanggan');
        return $this->db->get();
    }

    public function kirimProposal($table,$data){
        $this->db->insert($table,$data);
    }

    public function getLaporanPelanggan(){
        return $this->db->get_where('pelanggan', array('status' => 'pelanggan'))->result();
    }

    public function getDaftarPelanggan(){
     return $this->db->get('pelanggan');
    }
    public function getDaftarPelangganCari($cari){
        $where = "namaPerusahaan like '%$cari%' or namaPendaftar like '%$cari%' or alamatPerusahaan like '%$cari%'";
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where($where);
        return $this->db->get()->result();
    }
    public function getDaftarPenawaranUji($where){
        $this->db->select('*');
        $this->db->from('proposal_penawaran as pp');
        $this->db->where('pp.idPegawai', $where);
        $this->db->join('pelanggan as pel', 'pp.idPelanggan = pel.idPelanggan');
        $this->db->join('transaksi as tran', 'pel.idPelanggan = tran.idPelanggan');

        return $this->db->get();
    }

    public function getNamaPerusahaan(){
        $where = "pel.idPelanggan = tr.idPelanggan";
        $this->db->select("namaPerusahaan, tglOperasi as a, pel.idPelanggan");
        $this->db->from('pelanggan pel');
        $this->db->where($where);
       // $this->db->join('proposal_penawaran as pp', 'pel.idPelanggan = pp.idPelanggan');
        $this->db->join('transaksi as tr', 'pel.idPelanggan = tr.idPelanggan');
        $query = $this->db->get();
        return $query;
    }

    public function getNamaPerusahaanTdk(){
        $this->db->select('*');
        $this->db->from('proposal_penawaran as pp');
        $this->db->where('statusPenawaran','Tidak Setuju');
        $this->db->join('pelanggan as pel', 'pp.idPelanggan = pel.idPelanggan');
        $this->db->join('transaksi as tran', 'pel.idPelanggan = tran.idPelanggan');
        return $this->db->get();
    }

    public function login($username, $pass){
        $this->db->where('lower(username)',$username);
        $query = $this->db->get('pegawai');
        if ($query->num_rows() > 0){
            $user = $query->result()[0];

//            var_dump($this->bcrypt->check_password($pass,$user->password));
            if ($this->bcrypt->check_password($pass,$user->password)){
                return $user;
            }
        }
        return false;
    }

    public function inputUjiPetik($data){
        $this->db->insert('ujiPetik',$data);
    }

    public function getIdUjiPetik(){
         $this->db->select('max(idUji) as id');
        $this->db->from('ujiPetik');
          return $this->db->get()->result()[0];
    }

    public function inputGambar($data){
        $this->db->insert('gambarUjiPetik',$data);
    }

    public function getTransaksi(){
        $this->db->select('*');
        $this->db->from('proposal_penawaran as pp');
        $this->db->where('statusPenawaran','Tidak Setuju');
        $this->db->join('pelanggan as pel', 'pp.idPelanggan = pel.idPelanggan');
        $this->db->join('transaksi as tran', 'pel.idPelanggan = tran.idPelanggan');
        return $this->db->get()->result();
    }

    public function getPegawai(){
        return $this->db->get('pegawai')->result();
    }


    public function hapusUser($id){
        $this->db->where('idPegawai', $id);
        $this->db->delete('pegawai');
    }

    public function regisPegawai($data){
        $this->db->insert('pegawai',$data);
    }

    public function getDaftarPesanan(){
        $this->db->select('*');
        $this->db->from('transaksi as pp');
        $this->db->join('pelanggan as pel', 'pp.idPelanggan = pel.idPelanggan');
        return $this->db->get()->result();
    }

    public function updateStatus($id,$role){
      if ($role == 'sukses'){
          $datestring = '%Y-%m-%d';
          $time = time();
          $tgl =  mdate($datestring, $time);
          $set = array('status' => 'pelanggan', 'tglAcc' => $tgl);
            $this->db->set($set);
            $this->db->where('idPelanggan',$id);
            $this->db->update(pelanggan);
      }elseif ($role == 'kembali'){
          $datestring = '%Y-%m-%d';
          $time = time();
          $tgl =  mdate($datestring, $time);
          $set = array('status' => 'calon pelanggan', 'tglAcc' => $tgl);
          $this->db->set($set);
          $this->db->where('idPelanggan',$id);
          $this->db->update(pelanggan);
      }
    }

    public function getLaporanMingguan($where){
        $select = 'SELECT * from transaksi join pelanggan using(idPelanggan) where'.$where;
        return $this->db->query($select)->result();
    }
    public function updateLaporan($data,$where){
        $this->db->replace('laporan',$data);
        //$this->db->where($where);
    }
}