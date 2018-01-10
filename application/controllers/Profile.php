<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_testimoni');
		$this->load->model('m_profile');
		$this->load->model('m_sertifikat');
	}
	public function index()
	{
		$data['profile'] = $this->m_profile->show();
		$data['testimoni'] = $this->m_testimoni->show();
		$data['sertifikat'] = $this->m_sertifikat->showdata();
		$data['general'] = $this->m_general->show();
		$this->load->view('profile',$data);
	}

}
