<?php
class M_test extends CI_Model{
   
    //ambil data mahasiswa dari database
    function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('admin', $limit, $start);
        return $query;
    }
}