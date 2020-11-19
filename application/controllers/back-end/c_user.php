<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	 function __construct(){
	parent::__construct();

	 $this->load->model("back-end/M_user");
     $this->load->library('form_validation');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}


	function index(){

        //konfigurasi pagination
        $config['base_url'] = site_url('back-end/C_user/index'); //site url
        $config['total_rows'] = $this->db->count_all('user'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

         $this->pagination->initialize($config);
        
        

        
        $tmp['contents']='back-end/user/data_user';
        $tmp['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['user'] = $this->M_user->getAll($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();
        $tmp['title'] = 'Data User';
 

        //load view mahasiswa view
        $this->load->view('back-end/tamplate',$tmp);
    }

	    public function add()
    {
        $user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil Membuat Akun');
        }

         redirect(site_url('back-end/C_user/index'));
    }

    	public function halaman_T()
	{
		//$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Tambah Data Member';
		$tmp['contents']='back-end/user/tambah_data';
		$this->load->view('back-end/tamplate', $tmp);
	}

	 public function edit($id = null)
    {
        if (!isset($id)) redirect('back-end/C_user');
       
        $user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('back-end/C_user/index'));
        }

        $tmp["user"] = $user->getById($id);
        if (!$tmp["user"]) show_404();
        
        //$this->load->view("back-end/user/edit_data", $data);
        $tmp['title'] = 'Edit Data user';
		$tmp['contents']='back-end/user/edit_data';
		$this->load->view('back-end/tamplate', $tmp);

    }

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_user->delete($id)) {
            redirect(site_url('back-end/C_user/index'));
        }
    }

    public function search(){
           //konfigurasi pagination
        $config['base_url'] = site_url('back-end/C_user/index'); //site url
        $config['total_rows'] = $this->db->count_all('user'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

         $this->pagination->initialize($config);
        
        

        
        $tmp['contents']='back-end/user/data_user';
        $tmp['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['user'] = $this->M_user->getAll($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();

            $keyword = $this->input->post('keyword');
            $tmp['title'] = 'Data Member';
            $tmp['user']=$this->M_user->get_product_keyword($keyword);
            $tmp['contents']='back-end/user/data_user';
            $this->load->view('back-end/tamplate', $tmp);
        }
}
