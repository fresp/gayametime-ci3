<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		
		$this->load->model('m_general');
	}
	public function index()
	{
		
		$data['general'] =array();
		$data['general'] = $this->m_general->show();
		$this->load->view('admin/general',$data);

	}
	public function post(){	
		$nama =$this->input->post('nama');
		$alamat =$this->input->post('alamat');
		$phone =$this->input->post('phone');
		$email =$this->input->post('email');
		$map =$this->input->post('gmap');
		$pisah = explode("<iframe ", $map);
		$pisah = explode(" ", $map);
		$pisah[2]='width="100%"';
		$pisah[3]='height="250px"';
		$jadi =  $pisah;
		$gmap =  implode(" ",$jadi);
		$jam1 =$this->input->post('jam1') ? $this->input->post('jam1'): "#";
		$jam2 =$this->input->post('jam2') ? $this->input->post('jam2'): "#";
		$clock1 =$this->input->post('clock1') ? $this->input->post('clock1'): "#";
		$clock2 =$this->input->post('clock2') ? $this->input->post('clock2'): "#";
		$fb =$this->input->post('facebook') ? $this->input->post('facebook'): "#";
		$tw =$this->input->post('twitter') ? $this->input->post('twitter'): "#";
		$ig =$this->input->post('instagram') ? $this->input->post('instagram'): "#";
		$yt =$this->input->post('youtube') ? $this->input->post('youtube'): "#";
		$open = '[{"id":"1","day":"'.$jam1.'", "clock":"'.$clock1.'"}, {"id":"2","day":"'.$jam2.'", "clock":"'.$clock2.'"} ]';
		$socmed = '[{"nama":"facebook", "value":"'.$fb.'"},{"nama":"twitter", "value":"'.$tw.'"},{"nama":"instagram", "value":"'.$ig.'"},{"nama":"youtube", "value":"'.$yt.'"}]';
		$id = "1";
		$data = array(
			'name'		=> $nama,
			'alamat'			=> $alamat,
			'hp'			=> $phone,
			'email'			=> $email,
			'linkGmap'		=> $gmap,
			'openingHours'		=> $open,
			'socialmedia'		=> $socmed,		
		);//end array data_products
		$this->m_general->update($id,$data);
		$this->session->set_userdata('notice','successgeneral');
		redirect('admin/general');
		//print_r($this->input->post());
	}
	


}
