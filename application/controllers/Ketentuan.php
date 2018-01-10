<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_ketentuan');
		$this->load->model('m_testimoni');
	}
	public function index()
	{
		$data['ketentuan'] = $this->m_ketentuan->show();
		$data['testimoni'] = $this->m_testimoni->show();
		$data['general'] = $this->m_general->show();
		$this->load->view('ketentuan',$data);
	}

}
