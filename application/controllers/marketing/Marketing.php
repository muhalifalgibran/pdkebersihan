<?php

class Marketing extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->model('M_admin');
    }

    public function index(){
        $this->load->view('admin/login_admin');
    }

    public function dashboard(){
        $total =  $this->M_admin->hitungCalonPelanggan();
        $totalPelanggan =  $this->M_admin->hitungPelanggan();

        $data['calon_pelanggan'] = $total['totalCalon'];
        $data['pelanggan'] = $totalPelanggan['totalPelanggan'];
        $this->load->view('badan/header_admin');
        $this->load->view('admin/dashboard_admin',$data);
    }

    public function daftar(){
       $data['pelanggan'] = $this->M_admin->getDaftarPelanggan()->result();
        $this->load->view('badan/header_admin');
       $this->load->view('admin/daftar',$data);
    }

    public function update($status){
        if ($status =='sukses'){
           $id = $this->uri->segment(5);

           $this->M_admin->updateStatus($id,$status);
           redirect('marketing-daftar');
        }elseif ($status =='kembali'){
            $id = $this->uri->segment(5);
            $this->M_admin->updateStatus($id,$status);
            redirect('marketing-daftar');
        }

    }

    public function download($file){
        if ($file!=null) {
            force_download('uploads/' . $file, null);
        }else{
           redirect('marketing/Marketing/daftar');
        }
    }

    public function daftarPenawaran(){
        $data['daftar'] = $this->M_admin->getDaftarPenawaran()->result();
        $this->load->view('badan/header_admin');
        $this->load->view('admin/daftarPenawaran',$data);
    }

    public function kirimPenawaran(){
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
                    'statusPenawaran'      => 'Menunggu',
                    'idPelanggan' => $idPelanggan

                );
                $this->M_admin->kirimProposal('proposal_penawaran',$data);
            }


        }else{
            $data['namaPerusahaan']= $this->M_admin->getNamaPerusahaan()->result();
            $this->load->view('badan/header_admin');
            $this->load->view('admin/kirim_penawaran',$data);
        }
    }


}

