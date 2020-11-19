<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cekout extends CI_Model {

	private $_table = "transaksi";
	private $_table2 = "dt_transaksi";

    public $id_user;
    public $kode_transaksi;
    public $nama_custemer;
    public $no_telfon_custemer;
    public $email_custemer;
    public $alamat_pengiriman;
    public $notes;
    public $tanggal_transaksi;
    public $tanggal_pengambilan;


    public function rules()
    {
        return [
            ['field' => 'kode_transaksi',
            'label' => 'kode_transaksi',
            'rules' => 'required'],

            ['field' => 'nama_custemer',
            'label' => 'nama_custemer',
            'rules' => 'required'],
            
            ['field' => 'no_telfon_custemer',
            'label' => 'no_telfon_custemer',
            'rules' => 'required'],

            ['field' => 'email_custemer',
            'label' => 'email_custemer',
            'rules' => 'required'],

            ['field' => 'id_user',
            'label' => 'id_user',
            'rules' => 'required'],

            ['field' => 'alamat_pengiriman',
            'label' => 'alamat_pengiriman',
            'rules' => 'required'],

            ['field' => 'notes',
            'label' => 'notes',
            'rules' => 'required'],

            ['field' => 'tanggal_transaksi',
            'label' => 'tanggal_transaksi',
            'rules' => 'required'],

            ['field' => 'tanggal_pengambilan',
            'label' => 'tanggal_pengambilan',
            'rules' => 'required']


        ];
    }

    public function getById($barang_id)
    {
        return $this->db->get_where('barang', ["id_barang" => $barang_id])->row();
    }

    

    public function get_kode_transaksi($add_transaksi)
    {
        return $this->db->get_where('transaksi', ["kode_transaksi" => $add_transaksi])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $id_user = $post["id_user"];
        $kode_transaksi = $post["kode_transaksi"];
        $nama_custemer = $post["nama_custemer"];
        $no_telfon_custemer = $post["no_telfon_custemer"];
        $email_custemer = $post["email_custemer"];
        $alamat_pengiriman = $post["alamat_pengiriman"];
        $notes = $post["notes"];
        $total_bayar = $post["total_bayar"];
        $tanggal_transaksi = $post["tanggal_transaksi"];
        $tanggal_pengambilan = $post["tanggal_pengambilan"];
        $tanggal_batas_bayar = $post["tanggal_batas_bayar"];

        $transaksi = array (

        	'id_user' => $id_user,
        	'kode_transaksi' => $kode_transaksi,
        	'nama_custemer' => $nama_custemer,
            'total_bayar' => $total_bayar,
        	'no_telfon_custemer' => $no_telfon_custemer,
        	'email_custemer' => $email_custemer,
        	'alamat_pengiriman' => $alamat_pengiriman,
        	'notes' => $notes,
        	'tanggal_transaksi' => $tanggal_transaksi,
        	'tanggal_pengambilan' => $tanggal_pengambilan,
        	'tanggal_batas_bayar' => $tanggal_batas_bayar
        );
         $this->db->insert($this->_table, $transaksi);
         $id_transaksi = $this->db->insert_id();

         foreach ($this->cart->contents() as $k) {
         	$barang_id = $k['id'];
         	$get_barang = $this->M_cekout->getById($barang_id);
         	$nama_barang = $get_barang->nama_barang;
         	$harga = $get_barang->harga;
         	$subtotal = $k['qty'] * $get_barang->harga;

         	$data = array(

         		'id_transaksi' => $id_transaksi,
         		'id_barang' => $k['id'],
         		'nama_barang' => $nama_barang,
         		'jumlah_pembelian' => $k['qty'],
         		'harga_satuan' => $harga,
         		'total_harga' => $subtotal
         	);
         	$this->db->insert('dt_transaksi', $data);

         }
       return TRUE;
    }


}

    
	



/* End of file M_cekout.php */
/* Location: ./application/models/front_end/M_cekout.php */