
<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_users');
		if($this->session->userdata('logged_in') == "TRUE"){
			redirect("admin/");
		}	

	}
	function index(){
		
		$this->form_validation->set_rules('username','Username','required|alpha_numeric','Username hanya huruf dan angka');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|md5','Password hanya huruf dan angka');
		
		if($this->form_validation->run()	==	FALSE)
		{
			$this->load->view('login'); 
			
		}else{
			$valid_account	= $this->m_users->cekaccount();
			if($valid_account	==	FALSE)
			{
				$this->session->set_userdata('notice','notcorrect');
				redirect(site_url().'admin/login');
			}else{
				$fullname =  $valid_account->firstname." ".$valid_account->lastname;
				$this->session->set_userdata('fullname',$fullname);
				$this->session->set_userdata('notice','correct');
				$this->session->set_userdata('logged_in','TRUE');
				redirect(site_url()."admin/");
			}//end if valid_user 
		}//end if validation
	}


	function cekuser(){
		$username = set_value('username');		
		$valid_user	= $this->m_users->cekuser($username);


	}
	function cekpassword(){
		$password = set_value('password');
		$valid_pass	= $this->m_users->cekpass($password);
	}
}
