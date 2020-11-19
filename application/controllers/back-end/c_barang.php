<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model("back-end/M_barang");
        $this->load->model("back-end/M_kategori");
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("back-end/login/login_admin"));
        }
    }

    public function save()
    {
        $config['upload_path'] = './assets/upload/gambar_utama/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar_utama']['name'])) {

            if ($this->upload->do_upload('gambar_utama')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/gambar_utama/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 150;
                $config['height'] = 150;
                $config['new_image'] = './assets/upload/gambar_utama/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();


                $gambar_utama = $gbr['file_name'];
                $nama_barang = $this->input->post('nama_barang');
                $id_kategori = $this->input->post('id_kategori');
                $slug_barang = slug($this->input->post('nama_barang'));
                $harga = $this->input->post('harga');
                $stok = $this->input->post('stok');
                $keterangan = $this->input->post('keterangan');
                $this->M_barang->insert(array(
                    'nama_barang' => $nama_barang,
                    'id_kategori' => $id_kategori,
                    'slug_barang' => $slug_barang,
                    'harga' => $harga,
                    'stok' => $stok,
                    'keterangan' => $keterangan,
                    'gambar_utama' => $gambar_utama
                ));
                redirect('pegination/barang');
            }
        } else {
            echo "Image yang diupload kosong";
        }
    }




    public function halaman_T()
    {
        //$this->load->view('back-end/tamplate.php');

        $tmp['title'] = 'Tambah Data barang';
        $tmp['contents'] = 'back-end/barang/tambah_data';
        $tmp["barang"] = $this->M_barang->getAll2();
        $this->load->view('back-end/tamplate', $tmp);
    }

    public function edit($id = null)
    {
        $tmp['barang'] = $this->M_barang->getById($id);
        $tmp['kategori'] = $this->M_kategori->getAll();
        $tmp['title'] = 'Edit Data barang';
        $tmp['contents'] = 'back-end/barang/edit_data';
        $this->load->view('back-end/tamplate', $tmp);
    }

    function edit_data()
    {


        $config['upload_path'] = './assets/upload/gambar_utama/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar_utama']['name'])) {

            if ($this->upload->do_upload('gambar_utama')) {


                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/gambar_utama/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 2000;
                $config['height'] = 1500;
                $config['new_image'] = './assets/upload/gambar_utama/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();


                $gambar_utama = $gbr['file_name'];
                $nama_barang = $this->input->post('nama_barang');
                $id_kategori = $this->input->post('id_kategori');
                $slug_barang = slug($this->input->post('nama_barang'));
                $harga = $this->input->post('harga');
                $stok = $this->input->post('stok');
                $keterangan = $this->input->post('keterangan');
                $id_barang = $this->input->post('id_barang');
                $data = array(
                    'nama_barang' => $nama_barang,
                    'id_kategori' => $id_kategori,
                    'harga' => $harga,
                    'slug_barang' => $slug_barang,
                    'stok' => $stok,
                    'keterangan' => $keterangan,
                    'gambar_utama' => $gambar_utama
                );

                $where = array(

                    'id_barang' => $id_barang

                );

                $hapus = $this->M_barang->getById($id_barang);

                $this->M_barang->update($where, $data);
                unlink("./assets/upload/gambar_utama/" . $hapus->gambar_utama);

                redirect('pegination/barang');
            }
        } else {

                $id_barang = $this->input->post('id_barang');
                $barang = $this->M_barang->getById($id_barang);
                               
                $gambar_utama = $barang->gambar_utama;
                $nama_barang = $this->input->post('nama_barang');
                $id_kategori = $this->input->post('id_kategori');
                $slug_barang = slug($this->input->post('nama_barang'));
                $harga = $this->input->post('harga');
                $stok = $this->input->post('stok');
                $keterangan = $this->input->post('keterangan');
                $id_barang = $this->input->post('id_barang');
                $data = array(
                    'nama_barang' => $nama_barang,
                    'id_kategori' => $id_kategori,
                    'harga' => $harga,
                    'slug_barang' => $slug_barang,
                    'stok' => $stok,
                    'keterangan' => $keterangan,
                    'gambar_utama' => $gambar_utama
                );

                $where = array(

                    'id_barang' => $id_barang

                );

                $hapus = $this->M_barang->getById($id_barang);

                $this->M_barang->update($where, $data);
                redirect('pegination/barang');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        $_id = $this->db->get_where('barang', ['id_barang' => $id])->row();

        if ($this->M_barang->delete($id)) {
            unlink("./assets/upload/gambar_utama/" . $_id->gambar_utama);
            $this->session->set_flashdata('success', 'Berhasil diHapus');

            redirect(site_url('pegination/barang'));
        }
    }
}