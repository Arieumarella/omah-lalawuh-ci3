<?php
class Pegination extends CI_Controller{

    function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');
        $this->load->model("back-end/M_admin");
        $this->load->model("back-end/M_barang");
     if($this->session->userdata('status') != "login"){
    redirect(base_url("back-end/login/login_admin"));
        }   

        //load the department_model
        $this->load->model('M_test');
    }

    function index(){

        //konfigurasi pagination
        $config['base_url'] = site_url('Pegination/index'); //site url
        $config['total_rows'] = $this->db->count_all('admin'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
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
        
        

        
        $tmp['contents']='back-end/data_admin';
        $tmp['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['data'] = $this->M_test->get_mahasiswa_list($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();
        $tmp['title'] = 'Data Admin';
 

        //load view mahasiswa view
        $this->load->view('back-end/tamplate',$tmp);
    }

    public function search(){
             //konfigurasi pagination
        $config['base_url'] = site_url('Pegination/index'); //site url
        $config['total_rows'] = $this->db->count_all('admin'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
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
        
    
        $tmp['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['data'] = $this->M_test->get_mahasiswa_list($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();


            $keyword = $this->input->post('keyword');
            $tmp['title'] = 'Data Admin';
            $tmp['data']=$this->M_admin->get_product_keyword($keyword);
            $tmp['contents']='back-end/data_admin';
            $this->load->view('back-end/tamplate', $tmp);
        }

    public function barang()
    {
        $config['base_url'] = site_url('Pegination/barang'); //site url
        $config['total_rows'] = $this->db->count_all('barang'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
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
        
        

        
      
        $tmp['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['barang'] = $this->M_barang->tampil_data($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();

        $tmp['title'] = 'Data barang';
        $tmp['contents']='back-end/barang/data_barang';
        $this->load->view('back-end/tamplate', $tmp);
    }

     public function cari_barang(){
             //konfigurasi pagination
        $config['base_url'] = site_url('Pegination/barang'); //site url
        $config['total_rows'] = $this->db->count_all('barang'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
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
        
        $tmp['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $tmp['barang'] = $this->M_barang->tampil_data($config["per_page"], $tmp['page']);           

        $tmp['pagination'] = $this->pagination->create_links();


            $keyword = $this->input->post('keyword');
            $tmp['title'] = 'Data Makanan';
            $tmp['barang']=$this->M_barang->get_product_keyword($keyword);
            $tmp['contents']='back-end/barang/data_barang';
            $this->load->view('back-end/tamplate', $tmp);
        }
}