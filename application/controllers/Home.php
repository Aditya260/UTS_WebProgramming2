<?php
class Home extends CI_Controller {
    public function index ($nama = '')
    {
        $data['judul'] = 'Halaman home';
        $data['nama'] = $nama;
        // $this->load->view('templates/header', $data);
        // $this->load->view('home/index', $data);
        // $this->load->view('templates/footer');


        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
}