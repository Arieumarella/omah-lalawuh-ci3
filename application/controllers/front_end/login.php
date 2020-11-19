<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    $this->load->model("front_end/M_login");
     $this->load->library('form_validation');
    }


    public function index($error = NULL)
    {
        $data = array(
            'title' => 'Login Custemer',
            'action' => site_url('front_end/login/login'),
            'error' => $error,

        );
        $this->load->view('front_end/login/form_login', $data);
    }
    public function login()
    {
    	$this->load->model('front_end/M_login');
        $login = $this->M_login->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
            //          ambil detail data
            $row = $this->M_login->data_login($this->input->post('username'), md5($this->input->post('password')));
            //          daftarkan session
            $data = array(
                'logged' => TRUE,
                'nama' => $row->nama_user,
                'id_user' => $row->id_user,
                'status' => 'login'
            );
            $this->session->set_userdata($data);
            //            redirect ke halaman sukses
            redirect(site_url('front_end/c_cart'));
        } else {
            //            tampilkan pesan error
            $error = 'Username / Password SALAH..!';
            $this->index($error);
        }
    }
    function logout()
    {
        //        destroy session
        $this->session->sess_destroy();
        //        redirect ke halaman login
        redirect(site_url('front_end/home'));
    }

    public function registrasi()
    {
        $this->load->view('front_end/login/form_registrasi');
    }

    public function creat_akun()
    {
        
        $user = $this->M_login;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil Membuat Akun Silahkan Login !');
        }

         redirect(site_url('front_end/login'));
    }
}

/* End of file login.php */
/* Location: ./application/controllers/front_end/login.php */