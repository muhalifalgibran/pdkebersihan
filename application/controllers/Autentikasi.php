<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Autentikasi extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
    }

    public function login()
    {
        $submit = $this->input->post('submit');
        if (isset($submit)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $log = $this->M_pelanggan->login(strtolower($username),$password);

            if ($log != FALSE){

                $array = array(
                    'logged_in' => TRUE,
                    'id' => $log->idPelanggan,
                    'username' => $log->username);

                $this->session->set_userdata( $array );
                redirect('pelanggan/Pelanggan/dashboard');
            }else{
                $this->session->set_flashdata('status','<div class="alert alert-danger" role="alert">
                                              Username dan Password Salah!
                                            </div>');
            redirect('Autentikasi/login');
                echo $log;

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
        $hash = $this->bcrypt->hash_password($password);
        $nama_pendaftar = $this->input->post('nama_pendaftar');
        $alamat = $this->input->post('alamat');

        $data = array('namaPerusahaan' => $nama_perusahaan,
                      'username' => $username,
                      'password' => $hash,
                      'status' => 'calon pelanggan');
        $this->M_daftar->daftarPerusahaan($data);

        redirect('Autentikasi/login');


        }else{
        $this->load->view('daftar');
        }
    }

}

?>