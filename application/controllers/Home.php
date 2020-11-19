<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model("front_end/M_home");
        $this->load->model("back-end/M_barang");
    }

    public function index()
    {
        //$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Umah Lelawuh';
        $tmp["kategori"] = $this->M_home->getAll();
        $tmp["barang"] = $this->M_home->barang();
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/home';
        $this->load->view('front_end/tamplate', $tmp);
    }

    
}

/* End of file home.php */
/* Location: ./application/controllers/front_end/home.php */