<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		
		$this->load->model('m_ketentuan');
	}
	public function index()
	{
		
		$data['ketentuan'] =array();
		$data['ketentuan'] = $this->m_ketentuan->show();
		$this->load->view('admin/ketentuan',$data);

	}
	public function post(){	
		$deskripsi =$this->input->post('editor1');
		$id = "1";
		$data = array(
			'deskripsi'		=> $deskripsi		
		);//end array data_products
		$this->m_ketentuan->update($id,$data);
		$this->session->set_userdata('notice','successupdate');
		redirect('admin/ketentuan');
		//print_r($this->input->post());
	}
	


}
