<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}

		$this->load->model('m_testimoni');
	}
	function index()
	{
		if(!$this->input->post()){
	
			$data['counttestimoni'] = $this->m_testimoni->countrow();
			$this->load->view('admin/testimoni',$data);
		}else{
			$nama =$this->input->post('nama');
			$pesan =$this->input->post('pesan');
			$pekerjaan =$this->input->post('pekerjaan');
			$datatestimoni = array(
				'nama'			=> $nama,
				'pesan'			=> $pesan,
				'pekerjaan'		=> $pekerjaan

			);//end array datatestimoni
			
			$this->m_testimoni->create($datatestimoni);
			$this->session->set_userdata('notice','successtestimoni');
			redirect('admin/testimoni');
		}//end if validation
	}
	public function ajax_list()
	{
        //echo "hi";
		$list = $this->m_testimoni->get_employees();       
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
    	// print_r($data);die;
			$no++;
			$row = array();
			$row[] = anchor('admin/testimoni/delete/'.$customers->id,'Hapus',['class'=>'btn btn-danger ']);
			$row[] = $customers->nama;
			$row[] = $customers->pekerjaan;
			$row[] = $customers->pesan;

			$data[] = $row;

        //$_POST['draw']='';
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_testimoni->count_all(),
			"recordsFiltered" => $this->m_testimoni->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	function delete($id)
	{
		$this->session->set_userdata('notice','delete');
		$this->m_testimoni->delete($id);
		redirect('admin/testimoni');
	}
}
