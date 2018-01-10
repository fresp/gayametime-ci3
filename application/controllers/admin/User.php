<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		$this->load->library('encryption');
		$this->load->model('m_users');
		$this->load->model('m_images');
	}
	
	public function index()
	{


		$this->load->view('admin/user/index');
	}
	public function ajax_list()
	{
        //echo "hi";
		$list = $this->m_users->get_employees();       
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
    	// print_r($data);die;
			$no++;
			$row = array();
			$row[] = anchor('admin/user/delete/'.$customers->id,'Hapus',['class'=>'btn btn-danger '],['style'=>'margin-top:2%']).'  '.anchor('admin/user/edit/'.$customers->id,'Edit',['class'=>'btn btn-success ']) ;
			$row[] = $customers->email;
			$row[] = $customers->username;
			$name = $customers->firstname.' '.$customers->lastname;
			$row[] = $name;	
			
			$data[] = $row;

        //$_POST['draw']='';
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_users->count_all(),
			"recordsFiltered" => $this->m_users->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	function input()
	{
		if(!$this->input->post()){
			$this->load->view('admin/user/input');
		}else{
			$email =$this->input->post('email');
			$username =$this->input->post('username');
			$firstname =$this->input->post('firstname');
			$lastname =$this->input->post('lastname');
			$password =$this->input->post('password');
			$datauser	 = array(
				'email'			=> $email,
				'username'		=> $username,
				'firstname'		=> $firstname,
				'lastname'		=> $lastname,
				'activate'		=> 1,
				'password'		=> md5($password)

			);//end array datatestimoni

			$this->m_users->create($datauser);
			$this->session->set_userdata('notice','successcreate');
			redirect('admin/user');
		}//end if validation
	}
	function edit()
	{	
		$uri = $this->uri->segment(4);
		if(!$this->input->post()){

			$data['cek'] = $this->m_users->cek($uri);
			$data['user'] = $this->m_users->show($uri);
			$data['cek']=="False" ? redirect("admin/user"): $this->load->view('admin/user/input',$data);
		}else{
			$email =$this->input->post('email');
			$username =$this->input->post('username');
			$firstname =$this->input->post('firstname');
			$lastname =$this->input->post('lastname');
			$password =$this->input->post('password');
			if($password){
				$datauser	 = array(
					'email'			=> $email,
					'username'		=> $username,
					'firstname'		=> $firstname,
					'lastname'		=> $lastname,
					'password'		=> md5($password)	
				);//end array datatestimoni
			}else{
				$datauser	 = array(
					'email'			=> $email,
					'username'		=> $username,
					'firstname'		=> $firstname,
					'lastname'		=> $lastname
				);//end array datatestimoni
			}
			

			$this->m_users->update($uri,$datauser);
			$this->session->set_userdata('notice','successupdate');
			//dump print_r($this->input->post);
			redirect('admin/user');
		}//end if validation

	}


	function delete($id)
	{
		$this->session->set_userdata('notice','delete');
		$this->m_users->delete($id);
		redirect('admin/user');
	}
	

}
