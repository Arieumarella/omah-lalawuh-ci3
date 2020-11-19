<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    private $_table = "barang";
    private $_table2 = "kategori_barang";

    public $id_barang;
    public $nama_barang;
    public $keterangan;
    public $harga;
    public $stok;


    public function rules()
    {
        return [
            [
                'field' => 'nama_barang',
                'label' => 'nama_barang',
                'rules' => 'required'
            ],

            [
                'field' => 'id_kategori',
                'label' => 'id_kategori',
                'rules' => 'required'
            ],

            [
                'field' => 'harga',
                'label' => 'harga',
                'rules' => 'required'
            ],

            [
                'field' => 'stok',
                'label' => 'stok',
                'rules' => 'required'
            ],

            [
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function tampil_data($start, $limit)
    {

        $this->db->select('barang.*, kategori_barang.nama_kategori');
        /**untuk memilih tabel user dan kolom jenis pada tabel gender */
        $this->db->from('barang');
        /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
        $this->db->join('kategori_barang', 'kategori_barang.id_kategori = barang.id_kategori', 'inner');
        /**untuk menggabungkan 2 tabel tadi */

        $this->db->limit($start, $limit);
        $query = $this->db->get();
        return $query->result();
    }

    public function add()
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


    public function getAll2()
    {
        return $this->db->get($this->_table2)->result();
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }



    public function update($where, $data)
    {
        $this->db->where($where);
        $this->db->update("barang", $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id));
    }

    public function insert($data)
    {
        $this->db->insert("barang", $data);
    }

    public function get_product_keyword($keyword)
    {
        $this->db->select('barang.*, kategori_barang.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori_barang', 'kategori_barang.id_kategori = barang.id_kategori', 'inner');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('nama_kategori', $keyword);
        $this->db->or_like('stok', $keyword);
        return $this->db->get()->result();
    }
}