<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto extends CI_Model {

	private $_table = "gambar";
    private $_table2 = "barang";

    public $id_barang;
    public $gambar;
    

public function getById($id_produk)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_barang', $id_produk);
        $this->db->order_by('id_gambar', 'desc');
        $query = $this->db->get();
        //return $query->result();
        return $query->result_array();
    }	

 public function insert($data)
        {
            $this->db->insert('gambar',$data);
        }

}

/* End of file M_foto.php */
/* Location: ./application/models/back-end/M_foto.php */