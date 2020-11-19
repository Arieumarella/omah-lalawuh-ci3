<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_toko extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->library('upload','form_validation');
	$this->load->model('back-end/M_toko');
	if($this->session->userdata('status') != "login"){
	redirect(base_url("back-end/login/login_admin"));
		}	

	}

	// List all your items
	public function index()
	{
		$tmp['title'] = 'Data Toko';
		$tmp['contents']='back-end/toko/data_toko';
        $tmp["toko"] = $this->M_toko->getAll();
		$this->load->view('back-end/tamplate', $tmp);

	}


	 function edit_data(){

    
        $config['upload_path'] = './assets/upload/toko/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

         //Enkripsi nama yang terupload
 
         $this->upload->initialize($config);
         if (!empty($_FILES['banner_header']['name'])) {
 
             if ($this->upload->do_upload('banner_header')) {
 
 
                 $gbr = $this->upload->data();
                 //Compress Image
                 $config['image_library'] = 'gd2';
                 $config['source_image'] = './assets/upload/toko/' . $gbr['file_name'];
                 $config['create_thumb'] = FALSE;
                 $config['maintain_ratio'] = FALSE;
                 $config['quality'] = '100%';
                 $config['width'] = 1900;
                 $config['height'] = 1000;
                 $config['new_image'] = './assets/upload/toko/' . $gbr['file_name'];
                 $this->load->library('image_lib', $config);
                 $this->image_lib->resize();

                
                $banner_header=$gbr['file_name'];
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $alamat = $this->input->post('alamat');
                $rekening = $this->input->post('rekening');
                $no_telfon = $this->input->post('no_telfon');
                $no_wa = $this->input->post('no_wa');
                $email = $this->input->post('email');
                $jambuka = $this->input->post('jambuka');
                $id_toko = $this->input->post('id_toko');
                $data =array(
                    'id_toko' => $id_toko,
                    'link_facebook' => $facebook,
                    'link_instagram' => $instagram,
                    'alamat' => $alamat,
                    'rekening' => $rekening,
                    'no_telfon' => $no_telfon,
                    'no_wa' => $no_wa,
                    'email' => $email,
                    'jam_buka' => $jambuka,
                    'banner_header' => $banner_header
                );

                $where = array(

                    'id_toko' => $id_toko
                    
                    );

                $hapus = $this->M_toko->getById($id_toko);

                $this->M_toko->update($where,$data);
                unlink("./assets/upload/toko/".$hapus->banner_header);
                
                redirect('back-end/c_toko');
                
            }
                      
        }else{

            $id_toko = $this->input->post('id_toko');
            $nama_foto =  $this->M_toko->getById($id_toko);

                $banner_header = $nama_foto->banner_header;
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $alamat = $this->input->post('alamat');
                $rekening = $this->input->post('rekening');
                $no_telfon = $this->input->post('no_telfon');
                $no_wa = $this->input->post('no_wa');
                $email = $this->input->post('email');
                $jambuka = $this->input->post('jambuka');
                $id_toko = $this->input->post('id_toko');
                $data =array(
                    'id_toko' => $id_toko,
                    'link_facebook' => $facebook,
                    'link_instagram' => $instagram,
                    'alamat' => $alamat,
                    'rekening' => $rekening,
                    'no_telfon' => $no_telfon,
                    'no_wa' => $no_wa,
                    'email' => $email,
                    'jam_buka' => $jambuka,
                    'banner_header' => $banner_header
                );

                $where = array(

                    'id_toko' => $id_toko
                    
                    );


                $this->M_toko->update($where,$data);
                redirect('back-end/c_toko');
        }
     
          
           }

	//Update one item
	public function edit( $id = NULL )
	{
		$tmp['toko'] = $this->M_toko->getById($id);
        $tmp['title'] = 'Edit Data Toko';
		$tmp['contents']='back-end/toko/edit_data';
		$this->load->view('back-end/tamplate', $tmp);
	}


}

/* End of file c_toko.php */
/* Location: ./application/controllers/back-end/c_toko.php */