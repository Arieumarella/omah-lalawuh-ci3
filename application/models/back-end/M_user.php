<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $nama_user;
    public $username;
    public $password;
    public $no_telfon;
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
            'rules' => 'required']

        ];
    }

    public function getAll($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];
        $this->password =  md5($this->input->post('password'));
        $this->no_telfon = $post["no_telfon"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->nama_user = $post["nama_user"];
        $this->username = $post["username"];
        $this->password =  md5($this->input->post('password'));
        $this->no_telfon = $post["no_telfon"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function get_product_keyword($keyword){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->like('nama_user',$keyword);
            $this->db->or_like('username',$keyword);
            $this->db->or_like('no_telfon',$keyword);
            $this->db->or_like('alamat',$keyword);
            return $this->db->get()->result();
        }

    public function upload($data = array()){

        return $this->db->insert_batch('gambar',$data);
    }
}