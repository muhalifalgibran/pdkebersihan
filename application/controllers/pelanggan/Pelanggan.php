<?php
 class Pelanggan extends CI_Controller{

     function __construct(){
         parent::__construct();
         $this->load->model('M_pelanggan');
         $this->load->model('M_transaksi');
     }

     public function dashboard(){
         if ($this->session->userdata('logged_in') == TRUE) {
             $this->load->view('badan/header_pelanggan');
             $this->load->view('pelanggan/dashboard_pelanggan');
             $this->load->view('badan/footer');

         }else{
             echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
             $this->load->view('login');
         }
     }

     public function pesanLayanan(){
        $id = $this->session->userdata('id');
        $where = array('idPelanggan' => $id);

        $res = $this->M_pelanggan->getStatus($where);
        $stat = $res->status;

         if ($this->session->userdata('logged_in')==true && $stat=='pelanggan') {
             $sub = $this->input->post('submit');

             $dana = 0;
             if(isset($sub)){
                $tam = $this->input->post('tambahan');
                $simpan1 = '';
                if (isset($tam)){
                foreach ($tam as $sim){
                    $simpan1 .= $sim.' , ';

                    if ($sim == 'mobil sampah'){
                        $dana = $dana + 1000000;
                    }
                    if ($sim == 'cleaning service'){
                        $dana = $dana + 3000000;
                    }
                    if ($sim == 'kitchen service'){
                        $dana = $dana + 1500000;
                    }
                 }
                }

                 $inimi =  substr($simpan1,0,-2);
                 $jenis = $this->input->post('jenis');
                 $tgl = $this->input->post('tgl');
                 $idPelanggan = $this->session->userdata('id');

                 if ($jenis == 'Bawah'){
                    $dana = $dana + 5000000;
                 }elseif ($jenis == 'Menengah'){
                    $dana = $dana + 6500000;
                 }elseif ($jenis == 'Atas'){
                     $dana = $dana + 8250000;
                 }else{
                     $dana = $dana = 0;
                 }


                $data = array(
                    'keteranganTransaksi' => $inimi,
                    'jenisLayanan' => $jenis,
                    'tglOperasi'   => $tgl,
                    'idPelanggan'  => $idPelanggan,
                    'dana'         => $dana
                );

               //echo $inimi;
                // $email1 = 'aaaa,vvv,cccc';
               // echo strlen($inimi);
                 //echo $dana;

              $this->M_transaksi->setTransaksi($data);

              redirect('pelanggan-dashboard');

             }else{
                 $this->load->view('badan/header_pelanggan');
                 $this->load->view('pelanggan/daftar_pelayanan');
             }
         }else{
             echo ' <script language="JavaScript">
                  alert("Anda Belum Terdaftar Sebagai Pelanggan");
                 </script>';
             $this->load->view('badan/header_pelanggan');
             $this->load->view('pelanggan/dashboard_pelanggan');
         }
     }
     public function profil(){

         if ($this->session->userdata('logged_in') == TRUE) {
             $sub = $this->input->post('submit');
             if (isset($sub)) {
                 $nama_pendaftar = $this->input->post('nama_pendaftar');
                 $alamat = $this->input->post('alamat');

                 $config['upload_path'] = './uploads/';
                 $config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|txt';
                 $config['max_size'] = 10000;
                 $config['max_height'] = 30000;
                 $config['max_width'] = 30000;

                 $this->load->library('upload', $config);

                 if ($this->upload->do_upload('proposal')) {
                     $dokumen = $this->upload->data('file_name');

                     if ($this->upload->do_upload('foto')) {
                         $foto = $this->upload->data('file_name');

                         $id = $this->session->userdata('id');

                         $data = array(
                             'namaPendaftar' => $nama_pendaftar,
                             'alamatPerusahaan' => $alamat,
                             'foto' => $foto,
                             'proposalDana' => $dokumen
                         );
                         $this->M_pelanggan->updateDate($id, $data);
                     }

                     redirect('pelanggan-dashboard');
                 } else {
                     echo $this->upload->display_errors();
                 }

             } else {
                 $this->load->view('badan/header_pelanggan');

                 $this->load->view('pelanggan/profil');
             }

         } else{
             echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
             $this->load->view('login');
         }
     }

     public function inbox(){
         if ($this->session->userdata('logged_in') == TRUE) {

             $where = array('idPelanggan' => $this->session->userdata('id'));
             $this->load->library('pagination');

             $config['base_url'] = base_url().'pelanggan/pelanggan/inbox';
             $config['total_rows'] = $this->M_pelanggan->total_inbox($where)->total;
             $config['per_page'] = 1;
             $config['uri_segment'] = 4;

             $config['first_link']       = 'First';
             $config['last_link']        = 'Last';
             $config['next_link']        = 'Next';
             $config['prev_link']        = 'Prev';
             $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
             $config['full_tag_close']   = '</ul></nav></div>';
             $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
             $config['num_tag_close']    = '</span></li>';
             $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
             $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
             $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
             $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
             $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
             $config['prev_tagl_close']  = '</span>Next</li>';
             $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
             $config['first_tagl_close'] = '</span></li>';
             $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
             $config['last_tagl_close']  = '</span></li>';
             $this->pagination->initialize($config);
             $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

             $data['penawaran'] = $this->M_pelanggan->getPenawaran($config["per_page"], $data['page'], $where)->result();

             $data['pagination'] = $this->pagination->create_links();


             $this->load->view('badan/header_pelanggan');
             $this->load->view('pelanggan/inbox',$data);
             //  echo $this->uri->segment(4);

            //echo $this->M_pelanggan->total_inbox($where)->total;




           //  echo $this->pagination->create_links();
//
//             $where = array('idPelanggan' => $this->session->userdata('id'));
//
//             $data['penawaran'] = $this->M_pelanggan->getPenawaran($where)->result();
//             $this->load->view('badan/header_pelanggan');
//             $this->load->view('pelanggan/inbox',$data);

         }else{
             echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
             $this->load->view('login');
         }

     }

     public function download($file){
         if ($file!=null) {
             force_download('proposal/' . $file, null);
         }else{
             redirect('pelanggan-inbox');
         }
     }

     public function hapusPenawaran($where){
        $this->M_pelanggan->hapus($where);
        redirect('pelanggan-inbox');
     }

     public function editStatus($id){
         $rule = $this->uri->segment(5);
         $where = array('idProposal' => $id);
         //echo $rule;
         if ($rule == 'setuju'){
             $edit = array('statusPenawaran' => 'Setuju');
             $this->M_pelanggan->editStatus($where,$edit);
             redirect('pelanggan-inbox');
         }elseif($rule == 'batalSetuju'){
             $edit = array('statusPenawaran' => 'Tidak Setuju');
             $this->M_pelanggan->editStatus($where,$edit);
             redirect('pelanggan-inbox');

         }

     }

 }