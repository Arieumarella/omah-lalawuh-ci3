<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	private $_table = "user";

    public $id_user;
    public $nama_user;
    public $username;
    public $password;
    public $no_telfon;
    public $email;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'nama_user',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

            ['field' => 'no_telfon',
            'label' => 'no_telfon',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

             ['field' => 'email',
            'label' => 'email',
            'rules' => 'required']

        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $post1 = md5($this->input->post());
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->no_telfon = $post["no_telfon"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        return $this->db->insert($this->_table, $this);
    }

    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }
//    untuk mengambil data hasil login
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
	

}

/* End of file M_login.php */
/* Location: ./application/models/front_end/M_login.php */