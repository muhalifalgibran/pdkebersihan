<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Super_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->model('M_admin');
    }

    public function dashboard()
    {
        if ($this->session->userdata('logged_in_admin') == true) {
            $data['pegawai'] = $this->M_admin->getPegawai();
            $this->load->view('badan/header_super_admin');
            $this->load->view('admin/daftar_superAdmin',$data);
        }else{
            echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
            $this->load->view('admin/login_admin');
        }
    }

    public function hapusUser($id){
        $this->M_admin->hapusUser($id);

        redirect('super-dashboard');
    }

    public function registrasi(){

        if ($this->session->userdata('logged_in_admin') == true) {

            $sub = $this->input->post('sub');
            if (isset($sub)){
                $nama     = $this->input->post('nama');
                $jabatan  = $this->input->post('jabatan');
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $hash = $this->bcrypt->hash_password($password);

                $data = array(
                    'namaUser'  => $nama,
                    'username'  => $username,
                    'password'  => $hash,
                    'rules'     => $jabatan
                );

               $this->M_admin->regisPegawai($data);
               redirect('super-dashboard');
            }else {
                $this->load->view('badan/header_super_admin');
                $this->load->view('admin/regis_pegawai');
            }

        }else{
            echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
            $this->load->view('admin/login_admin');
        }

    }


}