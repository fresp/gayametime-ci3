<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		$this->load->library('encryption');
		$this->load->model('m_message');
	}
	
	public function index()
	{


		$this->load->view('admin/message/index');
	}
	public function ajax_list()
	{
        //echo "hi";
		$list = $this->m_message->get_employees();       
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
    	// print_r($data);die;
			$no++;
			$row = array();
			$active = $customers->activate;
			$row[] = $active==1 ? anchor('admin/message/show/'.$customers->id,'READ',['class'=>'btn btn-success ']):  anchor('admin/message/show/'.$customers->id,'READ',['class'=>'btn btn-success ']).' '.anchor('admin/message/unread/'.$customers->id,'UNREAD',['class'=>'btn btn-warning ']);
			
			$row[] = $customers->nama;
			$row[] = $customers->telepon;
			$row[] = $customers->subject;
			$row[] = substr($customers->pesan, 0, 50) . ' ...';;
			
			$data[] = $row;

        //$_POST['draw']='';
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_message->count_all(),
			"recordsFiltered" => $this->m_message->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}

	function show()
	{	
		$uri = $this->uri->segment(4);
		
		$data['cek'] = $this->m_message->cek($uri);
		$data['layanan'] = $this->m_message->show($uri);
		$datalayanan	 = array('activate'			=> '0');//end array datatestimoni
		$data['cek']=="False" ? redirect("admin/message"): $this->load->view('admin/message/input',$data);
		$this->m_message->update($uri,$datalayanan);
			//$this->session->set_userdata('notice','successupdate');
			//dump print_r($this->input->post);

	}//end if validation
	function unread()
	{	
		$uri = $this->uri->segment(4);
		
		$data['cek'] = $this->m_message->cek($uri);
		$data['layanan'] = $this->m_message->show($uri);
		$datalayanan	 = array('activate'			=> '1');//end array datatestimoni
		$this->m_message->update($uri,$datalayanan);
		 redirect("admin/message");
			//$this->session->set_userdata('notice','successupdate');
			//dump print_r($this->input->post);

	}//end if validation


}
