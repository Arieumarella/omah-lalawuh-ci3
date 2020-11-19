<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $_table = "admin";

    public $id_admin;
    public $username;
    public $password;
    public $nama_admin;


    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],
            
            ['field' => 'nama_admin',
            'label' => 'nama_admin',
            'rules' => 'required']
        ];
    }

    function jumlah_data(){
        return $this->db->get('admin')->num_rows();
    }

    public function getAll($limit, $start)
    {
        $query = $this->db->get('admin', $limit, $start);
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_admin" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $post1 = md5($this->input->post());
        $this->username = $post["username"];
        $this->password = md5($this->input->post('password'));
        $this->nama_admin = $post["nama_admin"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password =  md5($this->input->post('password'));
        $this->nama_admin = $post["nama_admin"];
        return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id));
    }

     public function get_product_keyword($keyword){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->like('username',$keyword);
            $this->db->or_like('nama_admin',$keyword);
            return $this->db->get();
        }
}