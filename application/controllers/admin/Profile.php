<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}

		$this->load->model('m_profile');
		$this->load->model('m_images');
	}
	public function index()
	{
		$data['data'] =array();
		$data['data'] = $this->m_profile->show();
		$this->load->view('admin/profile',$data);
	}
	//Untuk proses upload foto
	function proses_upload(){

		$config['upload_path']   = FCPATH.'/assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$config['max_width'] = '500';
		$config['max_height'] = '300';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('userfile')){
			$token=$this->input->post('token_foto');
			$nama=$this->upload->data('file_name');
			$dataimage = array(
				'id'			=> NULL,
				'nama'			=> $nama,
				'token'		=> $token

			);//end array datatestimoni
			
			$this->m_images->improtimage($dataimage);
		}


	}


	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');
		$foto=$this->db->get_where('tb_images',array('token'=>$token));
		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama;
			$file = file_exists($file=FCPATH.'/assets/uploads/'.$nama_foto);
			if($file){
				unlink($file);
			}
			unlink($file);

			$this->m_images->delete($token);

		}


		echo "{}";
	}
	 function post(){	
		$nama =$this->input->post('nama') ? $this->input->post('nama'): "#";
		$token =$this->input->post('token') ? $this->input->post('token'): "";
		$Deskripsi =$this->input->post('Deskripsi') ? $this->input->post('Deskripsi'): "#";
		$Visi =$this->input->post('Visi') ? $this->input->post('Visi'): "#";
		$Misi =$this->input->post('Misi') ? $this->input->post('Misi'): "#";
		$id = "1";
		$data = array(
			'bigtitle'		=> $nama,
			'banner'			=> $token,
			'data'			=> $Deskripsi,
			'visi'			=> $Visi,
			'misi'		=> $Misi,	
		);//end array data_products
		$this->m_profile->update($id,$data);
		$this->session->set_userdata('notice','success');
		redirect('admin/profile');
		//print_r($this->input->post());
	}

}
