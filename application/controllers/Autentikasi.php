<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Autentikasi extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->model('M_admin');
    }

    public function loginPegawai(){
        $submit = $this->input->post('submit');
        if (isset($submit)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $log = $this->M_admin->login(strtolower($username),$password);

            if ($log != FALSE){

                $array = array(
                    'logged_in_admin' => TRUE,
                    'idAdmin' => $log->idPegawai,
                    'usernameAdmin' => $log->username,
                    'statusAdmin' => $log->rules);

                $this->session->set_userdata($array);

                if ($log->rules == 'superAdmin'){
                    redirect('Super_admin/dashboard');
                }elseif ($log->rules == 'marketing'){
                    redirect('marketing-dashboard');
                }elseif ($log->rules == 'penguji'){
                    redirect('penguji-dashboard');
                }elseif ($log->rules == 'kasie pelsus'){
                    redirect('kasie-dashboard');
                }

               // redirect('pelanggan/Pelanggan/dashboard');
            }
            else{
                $this->session->set_flashdata('status','<div class="alert alert-danger" style="width: 100%" role="alert">
                                              Username dan Password Salah!
                                            </div>');
                redirect('Autentikasi/loginPegawai');
              //  echo $log;

            }
        }else{
            $this->load->view('admin/login_admin');
        }

    }



    public function login(){
        $submit = $this->input->post('submit');
        if (isset($submit)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $log = $this->M_pelanggan->login(strtolower($username),$password);

            if ($log != FALSE){

                $array = array(
                    'logged_in' => TRUE,
                    'id' => $log->idPelanggan,
                    'username' => $log->username,
                    'status' => $log->status);

                $this->session->set_userdata( $array );
                redirect('pelanggan-dashboard');
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
        $this->M_pelanggan->daftarPerusahaan($data);

        redirect('Autentikasi/login');

        }else{
        $this->load->view('daftar');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->login();
        //$this->load->view('login');
    }

    public function logout_admin(){
        $this->session->sess_destroy();
        redirect('pegawai');
    }

}

?>