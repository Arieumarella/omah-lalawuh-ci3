<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cart extends CI_Model
{

 public function add_barang($id)
 {

    return $this->db->get_where('barang', ["id_barang" => $id])->row();

 }

 public function add_barang_cart($id_barang)
 {

    return $this->db->get_where('barang', ["id_barang" => $id_barang])->row();

 }

 public function add_user($id_user)
 {

    return $this->db->get_where('user', ["id_user" => $id_user])->row();

 }

}

/* End of file M_home.php */
/* Location: ./application/models/front_end/M_home.php */