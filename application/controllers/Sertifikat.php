<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_testimoni');
		$this->load->model('m_sertifikat');
	}
	public function index()
	{
		$data['sertifikat'] = $this->m_sertifikat->showdata();
		$data['testimoni'] = $this->m_testimoni->show();
		$data['general'] = $this->m_general->show();
		$this->load->view('sertifikat',$data);
	}

}
