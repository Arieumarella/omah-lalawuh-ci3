<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model
{
    private $_table = "data_toko";

    public $id_toko;
    public $link_facebook;
    public $link_instagram;
    public $alamat;
    public $no_telfon;
    public $no_wa;
    public $email;
    public $jam_buka;
    public $banner_header;
    public $banner_kiri;
    public $banner_kanan;


    public function rules()
    {
        return [
            ['field' => 'link_facebook',
            'label' => 'link_facebook',
            'rules' => 'required'],

            ['field' => 'link_instagram',
            'label' => 'link_instagram',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'no_telfon',
            'label' => 'no_telfon',
            'rules' => 'required'],

            ['field' => 'no_wa',
            'label' => 'no_wa',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'jam_buka',
            'label' => 'jam_buka',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_toko()
    {
        return $this->db->get("data_toko")->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_toko" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_kategori = $post["nama_kategori"];
        return $this->db->insert($this->_table, $this);
    }

     public function update($where,$data)
    {
        $this->db->where($where);
        $this->db->update("data_toko", $data);
       
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }
}