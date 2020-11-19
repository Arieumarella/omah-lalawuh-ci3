<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	 function __construct(){
	parent::__construct();

	$this->load->model("M_test");
	 $this->load->model("back-end/M_admin");
	 $this->load->library('pagination');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}



	    public function add()
    {
        $admin = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         redirect(site_url('Pegination'));
    }

    	public function halaman_T()
	{
		//$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Tambah Data Admin';
		$tmp['contents']='back-end/admin/tambah_data';
		$this->load->view('back-end/tamplate', $tmp);
	}

	 public function edit($id = null)
    {
        if (!isset($id)) redirect('back-end/C_admin');
       
        $admin = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('Pegination'));
        }

        $tmp["admin"] = $admin->getById($id);
        if (!$tmp["admin"]) show_404();
        
        //$this->load->view("back-end/admin/edit_data", $data);
        $tmp['title'] = 'Edit Data Admin';
		$tmp['contents']='back-end/admin/edit_data';
		$this->load->view('back-end/tamplate', $tmp);

    }

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_admin->delete($id)) {
            redirect(site_url('Pegination'));
        }
    }
}
