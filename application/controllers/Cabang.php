<?php
class Cabang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cabang_model');
        $this->load->library('form_validation');

    }

    public function index()
    {  
        $data['judul'] = 'Daftar Cabang';
        $data['cabang'] = $this->Cabang_model->getAllCabang();
        if( $this->input->post('keyword')){
            $data['cabang'] = $this->Cabang_model->cariDataCabang();
        }
        // $this->load->view('admin/header', $data);
        // $this->load->view('cabang/index');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_cabang', $data);
        $this->load->view('admin/footer');

    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Cabang';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor_cabang', 'Nomor Cabang', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if( $this->form_validation->run() ==FALSE){
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambah_cabang');
            $this->load->view('admin/footer');
        }else{
            $this->Cabang_model->tambahDataCabang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('cabang');
        }
    }

    public function hapus($id)
    {
        $this->Cabang_model->hapusDataCabang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('cabang');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Data Cabang';
        $data['cabang'] = $this->Cabang_model->getCabangById($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/detail_cabang', $data);
         $this->load->view('admin/footer');
        
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Cabang';
        $data['cabang'] = $this->Cabang_model->getCabangById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor_cabang', 'Nomor Cabang', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if( $this->form_validation->run() ==FALSE){
            $this->load->view('admin/header', $data);
            $this->load->view('admin/ubah_cabang', $data);
            $this->load->view('admin/footer');
        }else{
            $this->Cabang_model->ubahDataCabang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('cabang');
        }
    }

}