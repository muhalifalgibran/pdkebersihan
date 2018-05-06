<?php
class Penguji extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->model('M_transaksi');
        $this->load->model('M_admin');
    }

    public function dashboard(){
        if ($this->session->userdata('statusAdmin') == 'penguji') {
            $sub = $this->input->post('sub');
            if (isset($sub)){
               $perusahaan = $this->input->post('perusahaan');
               $keterangan = $this->input->post('keterangan');
               $lama       = $this->input->post('lama');

               $data = array(
                   'keterangan'   => $keterangan,
                   'idPelanggan'  => $perusahaan,
                   'lamaMenguji'  => $lama,
                   'idPegawai'    => $this->session->userdata('idAdmin')
               );

              $this->M_admin->inputUjiPetik($data);

              $log =  $this->M_admin->getIdUjiPetik();
              $id = $log->id;
                $name_array = array();
                $count = count($_FILES['foto']['size']);
                foreach($_FILES as $key=>$value)
                    for($s=0; $s<=$count-1; $s++) {
                        $_FILES['foto']['name']=$value['name'][$s];
                        $_FILES['foto']['type']    = $value['type'][$s];
                        $_FILES['foto']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['foto']['error']       = $value['error'][$s];
                        $_FILES['foto']['size']    = $value['size'][$s];
                        $config['file_name']    = $value['name'][$s];
                        $config['upload_path']      = './gambarUjiPetik/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '10000';
                        $config['max_width']  = '10000';
                        $config['max_height']  = '10000';
                        $this->load->library('upload', $config);

                     //   $this->upload->initialize($this->do_upload());
                        $this->upload->do_upload('foto');
                      //  $data = $this->upload->data();

                     //   $name_array[] = $data['file_name'];
                        $name = $config['file_name'];

                        $data = array(
                            'idUji' => $id,
                            'foto'  => $name
                        );

                        $this->M_admin->inputGambar($data);
                    }

                   redirect('penguji-dashboard');

            }else {

                $log['data'] = $this->M_admin->getTransaksi();

                $this->load->view('badan/header_penguji');
                $this->load->view('penguji/dashboard_penguji', $log);
            }
        }else{
            echo ' <script language="JavaScript">
                  alert("Harus Login dulu")
                 </script>';
            $this->load->view('admin/login_admin');
            }
        }

        public function penawaran(){
            if ($this->session->userdata('statusAdmin') == 'penguji') {
                $kirim = $this->input->post('sub');
                if (isset($kirim)){
                    $idPelanggan = $this->input->post('pelanggan');
                    $ketereangan = $this->input->post('keterangan');


                    $config['upload_path']          = './proposal/';
                    $config['allowed_types']        = 'pdf|docx|doc|xlsx';
                    $config['max_size']             = 20000;
                    $config['max_width']            = 20000;
                    $config['max_height']           = 20000;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('proposal'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                    }
                    else
                    {
                        $idPelanggan = $this->input->post('pelanggan');
                        $keterangan = $this->input->post('keterangan');

                        $data = array(
                            'proposal'    => $this->upload->data('file_name'),
                            'keterangan'  => $keterangan,
                            'idPegawai'   => $this->session->userdata('idAdmin'),
                            'statusPenawaran'      => 'Menunggu',
                            'idPelanggan' => $idPelanggan

                        );
                         $this->M_admin->kirimProposal('proposal_penawaran',$data);


                            $data['namaPerusahaan']= $this->M_admin->getNamaPerusahaanTdk()->result();
                            $this->load->view('badan/header_penguji');
                            $this->load->view('penguji/penguji_penawaran',$data);

                    }


                }else{
                    $data['namaPerusahaan']= $this->M_admin->getNamaPerusahaanTdk()->result();
                    $this->load->view('badan/header_penguji');
                    $this->load->view('penguji/penguji_penawaran',$data);
                }
            }
        }

    public function daftarPenawaran(){
        $where = $this->session->userdata('idAdmin');
        $data['daftar'] = $this->M_admin->getDaftarPenawaranUji($where)->result();
        $this->load->view('badan/header_penguji');
        $this->load->view('admin/daftarPenawaran',$data);
    }

}