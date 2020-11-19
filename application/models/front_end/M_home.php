<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    private $_table = "kategori_barang";
    private $_table1 = "data_toko";
    private $_table2 = "barang";

    public $id_kategori;
    public $nama_kategori;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_toko()
    {
       $query = $this->db->get('data_toko');
       return $query->row();

       
    }

    public function getById($slug_kategori)
    {
        return $this->db->get_where($this->_table, ["slug_kategori" => $slug_kategori])->row();
    }

    public function barang()
    {

        $this->db->select('barang.*, kategori_barang.nama_kategori');
        /**untuk memilih tabel user dan kolom jenis pada tabel gender */
        $this->db->from('barang');
        /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
        $this->db->join('kategori_barang', 'kategori_barang.id_kategori = barang.id_kategori', 'inner');
        /**untuk menggabungkan 2 tabel tadi */

        $query = $this->db->get();
        return $query->result();
    }

    public function getid($slug_kategori)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori_barang', 'kategori_barang.id_kategori = barang.id_kategori', 'left');
        $this->db->where('kategori_barang.slug_kategori', $slug_kategori);
        return $this->db->get()->result();
    }

    public function getdetail($slug_barang)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('gambar', 'gambar.id_barang = barang.id_barang', 'left');
        $this->db->where('barang.slug_barang', $slug_barang);
        return $this->db->get()->row();
    }

    public function gambarid($slug_barang)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->join('barang', 'barang.id_barang = gambar.id_barang', 'left');
        $this->db->where('barang.slug_barang', $slug_barang);
        return $this->db->get()->result();
    }

    public function cari($keyword){
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('kategori_barang','barang.id_kategori = kategori_barang.id_kategori','inner');
            $this->db->like('nama_barang',$keyword);
            $this->db->or_like('harga',$keyword);
            $this->db->or_like('slug_barang',$keyword);
            $this->db->or_like('keterangan',$keyword);
            $this->db->or_like('nama_kategori',$keyword);
            $this->db->or_like('slug_kategori',$keyword);
            return $this->db->get()->result();
        }

}

/* End of file M_home.php */
/* Location: ./application/models/front_end/M_home.php */