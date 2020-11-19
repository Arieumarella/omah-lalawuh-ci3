<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_foto extends CI_Controller {

	function __construct(){
	parent::__construct();
	 $this->load->library('upload');
	 $this->load->model("back-end/M_foto");
	 $this->load->model("back-end/M_barang");
     $this->load->library('form_validation');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}

	public function foto($id_produk)

	{


		$barang = $this->M_barang->getById($id_produk);
		$gambar = $this->M_foto->getById($id_produk);
        //$tmp['title'] = 'Data Foto';
		//$tmp['contents']='back-end/foto/data_foto';
		//$this->load->view('back-end/tamplate', $tmp);

		$config['upload_path'] = './assets/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$data = array(
							'title' => 'Tambah Foto : '.$barang->nama_barang,
							'barang' => $barang,
							'gambar' => $gambar,
							'eror' => $this->upload->display_errors(),
							'contents' => 'back-end/foto/data_foto'
			);
				$this->load->view('back-end/tamplate', $data, FALSE);			
		}
		else{
				$upload_gambar = array('upload_data' => $this->upolad->data());


		}


	}


	public function delete($id){
            $_id = $this->db->get_where('gambar',['id_gambar' => $id])->row();
            $query = $this->db->delete('gambar',['id_gambar'=>$id]);
            if($query){
                unlink("./assets/upload/".$_id->gambar);
            }
            redirect('back-end/c_foto/foto/'.$_id->id_barang);
        }


    function upload_image(){
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
         //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['gambar']['name'])){
 
            if ($this->upload->do_upload('gambar')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/upload/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 2000;
                $config['height']= 1500;
                $config['new_image']= './assets/upload/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

 				
                $gambar=$gbr['file_name'];
                $id_barang=$this->input->post('id_barang');
                $this->M_foto->insert(array(
			        'id_barang' => $id_barang,
			        'gambar' => $gambar
				));
				redirect('back-end/c_foto/foto/'.$id_barang);
                
            }
                      
        }else{
            echo "Image yang diupload kosong";
        }
                 
    }

}

/* End of file c_foto.php */
/* Location: ./application/controllers/back-end/c_foto.php */