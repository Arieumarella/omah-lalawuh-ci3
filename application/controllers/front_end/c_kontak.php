<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kontak extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('front_end/M_home');
}
	public function index()
	{
        $tmp['title'] = 'CP Umah Lelawuh';
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/kontak';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
	}

}

/* End of file c_kontak.php */
/* Location: ./application/controllers/front_end/c_kontak.php */