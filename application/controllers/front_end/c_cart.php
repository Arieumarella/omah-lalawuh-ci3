<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_cart extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model("front_end/M_home");
        $this->load->model("front_end/M_cart");
        $this->load->model("back-end/M_barang");
        
    }

    public function index()
    {
        //$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Umah Lelawuh';
        $tmp["data_toko"] = $this->M_home->get_toko();
        $tmp['contents'] = 'front_end/belanja/cart';
        $this->load->view('front_end/belanja/tamplate_belanja', $tmp);
    }

    public function add_cart($id)
    {
        //$this->load->view('back-end/tamplate.php');

        $barang = $this->M_cart->add_barang($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang
            
        );
    
        $this->cart->insert($data);
        $this->session->set_flashdata('data', 'Berhasil Ditambahkan ke Keranjang Belanja.!');
        redirect('front_end/home/belanja');
        
       
    }

    public function update_cart($rowid)
    {
        if ($rowid) {

            $data = array(
                'rowid'      => $rowid
                ,
                'qty'     => $this->input->post('qty')
                
                
            );
        
            $this->cart->update($data);
            
            redirect('front_end/c_cart','refresh');
        }else {
            redirect('front_end/c_cart','refresh');
        }
        
    }

    public function delete($id)
    {
        $data = array(
            'rowid'      => $id,
            'qty'     => 0
            
        );
    
        $this->cart->update($data);
        $this->session->set_flashdata('flash', 'Di Hapus.');
        redirect('front_end/c_cart');
        
    }

    public function delete_all_cahart()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('front_end/c_cart');
    }

    public function show_cart()
    {
        $carts = $this->cart->contents();
        echo '<pre>';
        print_r($carts);
        echo '</pre>';
    }

    
}

/* End of file home.php */
/* Location: ./application/controllers/front_end/home.php */