<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard  extends CI_Model {

	public function jumlahpesanan()
	{   
	    $query = $this->db->get('transaksi');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function jumlahproduk()
	{   
	    $query = $this->db->get('barang');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function jumlahcustemer()
	{   
	    $query = $this->db->get('user');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function jumlahkategori()
	{   
	    $query = $this->db->get('kategori_barang');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}


}

/* End of file M_dashboard */
/* Location: ./application/models/back-end/M_dashboard */