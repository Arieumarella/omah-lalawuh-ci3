<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model {

public function get_pesanan()
	{
		return $this->db->get('transaksi')->result();
	}	

public function get_dt_pesanan($id_transaksi)
{
	return $this->db->get_where('dt_transaksi', ["id_transaksi" => $id_transaksi])->row();
}

public function get_detail($id_transaksi)
{
	$result = $this->db->where('id_transaksi', $id_transaksi)->limit(1)->get('transaksi');
	if ($result->num_rows() > 0) {
		return $result->row();
	}else{
		return false;
	}
}

public function get_dt_transaksi($id_transaksi)
{
	$result = $this->db->where('id_transaksi', $id_transaksi)->get('dt_transaksi');
	if ($result->num_rows() > 0) {
		return $result->result();
	}else{
		return false;
	}
}

}

/* End of file M_pesanan.php */
/* Location: ./application/models/back-end/M_pesanan.php */