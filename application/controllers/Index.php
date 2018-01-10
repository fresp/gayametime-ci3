<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_testimoni');
		$this->load->model('m_layanan');
	}
	public function index()
	{
		$data['testimoni'] = $this->m_testimoni->show();
		$data['layanan'] = $this->m_layanan->showrekomendasi();
		$data['general'] = $this->m_general->show();
		$this->load->view('index',$data);
	}

}
