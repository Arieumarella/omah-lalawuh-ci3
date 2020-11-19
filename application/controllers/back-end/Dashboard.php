<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 function __construct(){
	parent::__construct();

	$this->load->model('back-end/M_dashboard');
	$this->load->model('back-end/M_pesanan');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}


	public function index()
	{
		//$this->load->view('back-end/tamplate.php');

		$tmp['title'] = 'Dashboard';
		$tmp['contents'] ='back-end/content';
		$tmp['pesanan'] = $this->M_dashboard->jumlahpesanan();
		$tmp['produk'] = $this->M_dashboard->jumlahproduk();
		$tmp['custemer'] = $this->M_dashboard->jumlahcustemer();
		$tmp['kategori'] = $this->M_dashboard->jumlahkategori();
		$tmp["pesanan_1"] = $this->M_pesanan->get_pesanan();
		$this->load->view('back-end/tamplate', $tmp);
	}
}
