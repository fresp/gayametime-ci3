<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_testimoni');
		$this->load->model('m_message');
	}
	public function index()
	{
		
		if(!$this->input->post()){

			$data['testimoni'] = $this->m_testimoni->show();
			$data['general'] = $this->m_general->show();
			$this->load->view('contact.php',$data);
		}else{
			$nama =$this->input->post('nama');
			$email =$this->input->post('email');
			$phone =$this->input->post('phone');
			$pesan =$this->input->post('pesan');
			$subject =$this->input->post('subject');
			$datatestimoni = array(
				'nama'			=> $nama,
				'email'			=> $email,
				'telepon'			=> $phone,
				'pesan'			=> $pesan,
				'subject'		=> $subject,
				'activate'		=> '1',

			);//end array datatestimoni
			$this->m_message->create($datatestimoni);
			$this->session->set_userdata('notice','successcontact');
			redirect('contact');
		}//end if validation
	}

}
