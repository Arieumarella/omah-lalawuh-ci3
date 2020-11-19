<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_admin extends CI_Controller {
    public function index($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('back-end/login/Login_admin/login'),
            'error' => $error,
            
        );
        $this->load->view('back-end/login/login', $data);
    }
    public function login() {
        $this->load->model('model_login/m_login');
        $login = $this->m_login->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
//          ambil detail data
            $row = $this->m_login->data_login($this->input->post('username'), md5($this->input->post('password')));
//          daftarkan session
            $data = array(
                'logged' => TRUE,
                'nama' => $row->nama_admin,
                'status' => 'login'
            );
            $this->session->set_userdata($data);
//            redirect ke halaman sukses
            redirect(site_url('back-end/dashboard'));
        } else {
//            tampilkan pesan error
            $error = 'Username / Password SALAH..!';
            $this->index($error);
        }
    }
    function logout() {
//        destroy session
        $this->session->sess_destroy();
//        redirect ke halaman login
        redirect(site_url('back-end/login/Login_admin'));
    }
}
/* End of file auth.php */
/* Location: ./application/controllers/auth.php */