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

    public function getbyid($slug_kategori)
    {
        //$this->load->view('back-end/tamplate.php');
        $tmp['title'] = 'Umah Lelawuh';
        $tmp["kategori"] = $this->M_home->getAll();
        $tmp["nama_k"] = $this->M_home->getById($slug_kategori);
        $tmp["barang"] = $this->M_home->getid($slug_kategori);
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/belanja/form_belanja';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
    }

    public function belanja()
    {
        //$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Umah Lelawuh';
        $tmp["kategori"] = $this->M_home->getAll();
        $tmp["barang"] = $this->M_home->barang();
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/belanja/form_belanja1';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
    }

    public function detail_barang($slug_barang)
    {
        //$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Detail barang';
        $tmp['barang'] = $this->M_home->getdetail($slug_barang);
        $tmp['foto'] = $this->M_home->gambarid($slug_barang);
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/belanja/form_detail';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
    }

    function add_cart_detail(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('id_barang'), 
            'name' => $this->input->post('nama_barang'), 
            'price' => $this->input->post('harga'), 
            'qty' => $this->input->post('quantity')
        );
        $this->cart->insert($data);
        redirect('front_end/home','refresh');
    }

   public function cari(){
            $tmp['title'] = 'Hasil Pencarian';
            $keyword = $this->input->post('cari');
            $tmp["kategori"] = $this->M_home->getAll();
            $tmp["data_toko"] = $this->M_home->get_toko();
            $tmp['cari']=$this->M_home->cari($keyword);
            $tmp['contents'] = 'front_end/belanja/form_cari';
            $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
        }
    
}

/* End of file home.php */
/* Location: ./application/controllers/front_end/home.php */