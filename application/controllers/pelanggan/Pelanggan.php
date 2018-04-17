<?php
 class Pelanggan extends CI_Controller{

     function __construct(){
         parent::__construct();
         $this->load->model('M_pelanggan');
     }

     public function dashboard(){
         $this->load->view('pelanggan/dashboard_pelanggan');
         $this->load->view('badan/footer');
     }
     public function profil(){
         $sub = $this->input->post('submit');
         if (isset($sub)){
          $nama_pendaftar = $this->input->post('nama_pendaftar');
          $alamat = $this->input->post('alamat');

             $config['upload_path']          = './uploads/';
             $config['allowed_types']        = 'gif|jpg|png|pdf|docx|doc|txt';
             $config['max_size']             = 10000;
             $config['max_height']           = 30000;
             $config['max_width']            = 30000;

             $this->load->library('upload', $config);

             if (  $this->upload->do_upload('proposal')  ){
                 $dokumen =  $this->upload->data('file_name');

                 if ( $this->upload->do_upload('foto')){
                     $foto =  $this->upload->data('file_name');

                     $id =  $this->session->userdata('id');

                     $data = array(
                            'namaPendaftar' => $nama_pendaftar,
                            'alamatPerusahaan' => $alamat,
                            'foto' => $foto,
                            'proposalDana' => $dokumen
                     );
                   $this->M_pelanggan->updateDate($id,$data);
                 }

             }
             else{
                 echo  $this->upload->display_errors();
             }

         }else{
             $this->load->view('pelanggan/profil');
         }

     }

 }