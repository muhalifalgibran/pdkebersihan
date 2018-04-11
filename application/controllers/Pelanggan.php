<?php
 class Pelanggan extends CI_Controller{

     public function dashboard(){
         $this->load->view('pelanggan/dashboard_pelanggan');
         $this->load->view('badan/footer');
     }

 }