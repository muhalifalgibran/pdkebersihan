<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Autentikasi extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
    }

    public function login()
    {

        $submit = $this->input->post('submit');
        if (isset($submit)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $auth = array('username' => $username,
                          'password' => $password);

            $in = $this->M_daftar->login('pelanggan',$auth)->result();

            if ($in){
                redirect('Pelanggan/dashboard');
            }else{
                $this->session->set_flashdata('status','<div class="alert alert-danger" role="alert">
                                              Username dan Password Salah!
                                            </div>');
                redirect('Autentikasi/login');

            }

        }else{
            $this->load->view('login');
        }

    }

    public function daftar(){
        $submit = $this->input->post('submit');
        if (isset($submit)){
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_pendaftar = $this->input->post('nama_pendaftar');
        $alamat = $this->input->post('alamat');

        $data = array('namaPerusahaan' => $nama_perusahaan,
                      'username' => $username,
                      'password' => $password,
                      'status' => 'calon pelanggan',
                      'namaPendaftar' => $nama_pendaftar,
                      'alamatPerusahaan' => $alamat);
        $this->M_daftar->daftarPerusahaan($data);

        redirect('Autentikasi/login');


        }else{
        $this->load->view('daftar');
        }
    }

}

?>