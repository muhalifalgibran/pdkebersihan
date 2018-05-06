<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KasiePelsus extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function dashboard()
    {
        if ($this->session->userdata('statusAdmin') == 'kasie pelsus') {
            $this->load->view('badan/header_pelsus');
           // $this->load->view('laporan/daftar_laporan');
        }else{
            redirect('pegawai');
        }
    }

    public function laporanMingguan()
    {
        if ($this->session->userdata('statusAdmin') == 'kasie pelsus') {
            $this->load->view('badan/header_pelsus');
             $this->load->view('laporan/laporan_mingguan');
        }else{
            redirect('pegawai');
        }
    }

    public function mingguan($minggu)
    {
        if ($this->session->userdata('statusAdmin') == 'kasie pelsus') {
            $where = ' ';
            if ($minggu == 1){
                $where = ' substring(tanggalTransaksi,9,2) <= 7';
            }elseif ($minggu == 2){
                $where = ' substring(tanggalTransaksi,9,2) > 7 and substring(tanggalTransaksi,9,2) <= 14';
            }elseif($minggu == 3){
                $where = ' substring(tanggalTransaksi,9,2) > 14 and substring(tanggalTransaksi,9,2) <= 21';
            }elseif($minggu == 4){
                $where = ' substring(tanggalTransaksi,9,2) > 21 and substring(tanggalTransaksi,9,2) <= 30';
            }else{
                redirect('kasie-mingguan');
            }

            $log['minggu'] = $this->M_admin->getLaporanMingguan($where);
            $this->load->view('badan/header_pelsus');
            $this->load->view('laporan/daftar_laporan_mingguan',$log);
        }else{
            redirect('pegawai');
        }
    }

    public function laporanBulanan()
    {
        if ($this->session->userdata('statusAdmin') == 'kasie pelsus') {
            $this->load->view('badan/header_pelsus');
            $this->load->view('laporan/laporan_triwulan');
        }else{
            redirect('pegawai');
        }
    }

    public function bulanan($triwulan)
    {
        if ($this->session->userdata('statusAdmin') == 'kasie pelsus') {
            $where = ' ';
            if ($triwulan == 1){
                $where = ' substring(tanggalTransaksi,6,2) <= 3';
            }elseif ($triwulan == 2){
                $where = ' substring(tanggalTransaksi,6,2) > 3 and substring(tanggalTransaksi,6,2) <= 6';
            }elseif($triwulan == 3){
                $where = ' substring(tanggalTransaksi,6,2) > 6 and substring(tanggalTransaksi,6,2) <= 9';
            }elseif($triwulan == 4){
                $where = ' substring(tanggalTransaksi,6,2) > 9 and substring(tanggalTransaksi,6,2) <= 12';
            }else{
                redirect('kasie-bulanan');
            }

            $log['minggu'] = $this->M_admin->getLaporanMingguan($where);
            $this->load->view('badan/header_pelsus');
            $this->load->view('laporan/daftar_laporan_mingguan',$log);
        }else{
            redirect('pegawai');
        }
    }


}