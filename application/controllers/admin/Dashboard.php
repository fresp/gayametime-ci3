<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		$this->load->model('m_message');
	}
	public function index()
	{
		$data['message'] = $this->m_message->show5();
		$this->load->view('admin/index',$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_userdata('notice','logout');
		redirect(base_url('admin/login'));
	}

}
