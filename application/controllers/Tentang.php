<?php
class Tentang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TentangModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Tentang';
		$data1['tentang'] = $this->TentangModel->getallTentang();
		// $this->load->view('templates/header',$data);
		// $this->load->view('karyawan/tentang',$data1);
		// $this->load->view('templates/footer');

		$this->load->view('admin/aboutme', $data1);		
	}
}