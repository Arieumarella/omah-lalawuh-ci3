<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cekout extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model("front_end/M_home");
    $this->load->model("front_end/M_cart");
    $this->load->model("front_end/M_cekout");
    $this->load->model("back-end/M_barang");
    $this->load->helper('string');
	if($this->session->userdata('status') != "login"){
	$this->session->set_flashdata('data', 'Anda Belum Login Silahkan Login !');
	redirect(base_url("front_end/login"));
		}	
	}


	public function index()
	{
		$tmp['title'] = 'Form Cekout';
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/cekout/form_cekout';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);	
	}

	public function proses_cekout()
	{	
		$add_transaksi = $this->input->post('kode_transaksi');

		$cekout = $this->M_cekout;
        $validation = $this->form_validation;
        $validation->set_rules($cekout->rules());

        if ($validation->run()) {

            $cekout->save();
            $this->session->set_flashdata('success', 'Trimakasih. Pesanan Anda Sedang Kami Proses.! Silahkan konfirmasi Pembayaran');
        }


         $this->cart->destroy();

        $tmp['title'] = 'Proses Pemesanan Berhasil';
        $tmp['contents'] = 'front_end/cekout/success';
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp["konfirmasi"] = $this->M_cekout->get_kode_transaksi($add_transaksi);
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
	}

	public function print($add_transaksi)
	{
		$this->load->library('dompdf_gen');
		$tmp["data_toko"] = $this->M_home->get_toko();
        $tmp["konfirmasi"] = $this->M_cekout->get_kode_transaksi($add_transaksi);
        $this->load->view('front_end/cekout/pdf', $tmp);

        $paper_size = 'A4';
        $orientation = 'lanscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Umah_lelawuh.pdf", array('Attachment' =>0));
	}

	public function test($add_transaksi)
	{
		
		$tmp["data_toko"] = $this->M_home->get_toko();
        $tmp["konfirmasi"] = $this->M_cekout->get_kode_transaksi($add_transaksi);
        $this->load->view('front_end/cekout/pdf', $tmp);
	}
}

/* End of file c_cekout.php */
/* Location: ./application/controllers/front_end/c_cekout.php */