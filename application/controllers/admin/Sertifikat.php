<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		$this->load->model('m_sertifikat');
		$this->load->model('m_images');
	}
	
	public function index()
	{
		$this->load->view('admin/sertifikat/index');
	}
	public function ajax_list()
	{
        //echo "hi";
		$list = $this->m_sertifikat->get_employees();       
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
    	// print_r($data);die;
			$no++;
			$row = array();
			$row[] = anchor('admin/sertifikat/delete/'.$customers->id,'Hapus',['class'=>'btn btn-danger '],['style'=>'margin-top:2%']).'  '.anchor('admin/sertifikat/edit/'.$customers->id,'Edit',['class'=>'btn btn-success ']) ;
			$row[] = $customers->nama;
			$data[] = $row;
        //$_POST['draw']='';
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_sertifikat->count_all(),
			"recordsFiltered" => $this->m_sertifikat->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	function input()
	{
		if(!$this->input->post()){
			$this->load->view('admin/sertifikat/input');
		}else{
			$nama =$this->input->post('nama');
			$token =$this->input->post('token');
			$datasertifikat	 = array(
				'nama'			=> $nama,
				'data'		=> $token

			);//end array datatestimoni

			$this->m_sertifikat->create($datasertifikat);
			$this->session->set_userdata('notice','successcreate');
			redirect('admin/sertifikat');
		}//end if validation
	}
	function edit()
	{	
		$uri = $this->uri->segment(4);
		if(!$this->input->post()){

			$data['cek'] = $this->m_sertifikat->cek($uri);
			$data['sertifikat'] = $this->m_sertifikat->show($uri);
			$data['cek']=="False" ? redirect("admin/sertifikat"): $this->load->view('admin/sertifikat/input',$data);
		}else{
			$nama =$this->input->post('nama');
			$token =$this->input->post('token');
			$datasertifikat	 = array(
				'nama'			=> $nama,
				'data'		=> $token

			);//end array datatestimoni

			$this->m_sertifikat->update($uri,$datasertifikat);
			$this->session->set_userdata('notice','successupdate');
			//dump print_r($this->input->post);
			redirect('admin/sertifikat');
		}//end if validation

	}

	
	//Untuk proses upload foto
	function proses_upload(){

		$config['upload_path']   = FCPATH.'/assets/uploads/sertifikat/';
		$config['allowed_types'] = 'gif|jpg|png|ico';
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
			if(file_exists($file=FCPATH.'/assets/uploads/sertifikat/'.$nama_foto)){
				unlink($file);
			}
			$this->m_images->delete($token);

		}


		echo "{}";
	}
	function delete($id)
	{
		$this->session->set_userdata('notice','delete');
		$this->m_sertifikat->delete($id);
		redirect('admin/sertifikat');
	}

}
