<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_testimoni');
		$this->load->model('m_layanan');
	}
	function index(){
		$data['testimoni'] = $this->m_testimoni->show();
		$data['general'] = $this->m_general->show();
		$name = $this->uri->segment(2);
		$cek = $this->m_layanan->cekservice($name);
		$id = $cek->id;
		$cek!="false" ? $data['layanan'] = $this->m_layanan->showdetail($id): "#";
		
		$this->load->view('service',$data);
	}

}
