<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kategori extends CI_Controller {

	 function __construct(){
	parent::__construct();

	 $this->load->model("back-end/M_kategori");
     $this->load->library('form_validation');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}


	public function index()
	{
		//$this->load->view('back-end/tamplate.php');

		$tmp['title'] = 'Data Kategori Makanan';
		$tmp['contents']='back-end/kategori/data_kategori';
		$tmp["kategori"] = $this->M_kategori->getAll();
		$this->load->view('back-end/tamplate', $tmp);
	}

	    public function add()
    {
        $kategori = $this->M_kategori;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         redirect(site_url('back-end/C_kategori/index'));
    }

    	public function halaman_T()
	{
		//$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Tambah Data kategori';
		$tmp['contents']='back-end/kategori/tambah_data';
		$this->load->view('back-end/tamplate', $tmp);
	}

     public function edit($id = null)
    {
        if (!isset($id)) redirect('back-end/C_kategori');
       
        $kategori = $this->M_kategori;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('back-end/C_kategori/index'));
        }

        $tmp["kategori"] = $kategori->getById($id);
        if (!$tmp["kategori"]) show_404();
        
        //$this->load->view("back-end/kategori/edit_data", $data);
        $tmp['title'] = 'Edit Data kategori';
		$tmp['contents']='back-end/kategori/edit_data';
		$this->load->view('back-end/tamplate', $tmp);

    }

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_kategori->delete($id)) {
            redirect(site_url('back-end/C_kategori/index'));
        }
    }
}
