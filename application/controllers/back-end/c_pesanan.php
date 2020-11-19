<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pesanan extends CI_Controller {

	 function __construct()
{
	parent::__construct();
	$this->load->model('back-end/M_pesanan');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
	}
}
	public function index()
	{
		$tmp['title'] = 'Data Pesanan';
		$tmp['contents']='back-end/pesanan/form_pesanan';
		$tmp["pesanan"] = $this->M_pesanan->get_pesanan();
		$this->load->view('back-end/tamplate', $tmp);
	}

	public function detail($id_transaksi)
	{
		$tmp['title'] = 'Detail Pesanan';
		$tmp["pesanan"] = $this->M_pesanan->get_detail($id_transaksi);
		$tmp["dt_pesanan"] = $this->M_pesanan->get_dt_transaksi($id_transaksi);
		$tmp['contents']='back-end/pesanan/form_detail';
		$this->load->view('back-end/tamplate', $tmp);
	}

}

/* End of file c_pesanan.php */
/* Location: ./application/controllers/back-end/c_pesanan.php */