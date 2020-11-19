<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pesanan extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('front_end/M_home');
	$this->load->model('front_end/M_pesanan');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("front_end/login"));
	}
}
	public function pesanan($id_user)
	{
		$tmp['title'] = 'Data Pesanan';
		$tmp['contents'] = 'front_end/pesanan';
		$tmp["pesanan"] = $this->M_pesanan->get_pesanan($id_user);
		$tmp["data_toko"] = $this->M_home->get_toko();
		$this->load->view('front_end/belanja/tamplate_belanja', $tmp);
	}

	public function detail($id_transaksi)
	{
		$tmp['title'] = 'Detail Pesanan';
		$tmp["data_toko"] = $this->M_home->get_toko();
		$tmp["pesanan"] = $this->M_pesanan->get_detail($id_transaksi);
		$tmp["dt_pesanan"] = $this->M_pesanan->get_dt_transaksi($id_transaksi);
		$tmp['contents'] = 'front_end/detail';
		$this->load->view('front_end/belanja/tamplate_belanja', $tmp);
	}

}

/* End of file c_pesanan.php */
/* Location: ./application/controllers/front_end/c_pesanan.php */