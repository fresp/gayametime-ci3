<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != "TRUE"){
			$this->session->set_userdata('notice','denied');
			redirect("admin/login");
		}
		$this->load->library('encryption');
		$this->load->model('m_layanan');
		$this->load->model('m_images');
	}
	
	public function index()
	{


		$this->load->view('admin/layanan/index');
	}
	public function ajax_list()
	{
        //echo "hi";
		$list = $this->m_layanan->get_employees();       
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
    	// print_r($data);die;
			$no++;
			$row = array();
			$row[] = anchor('admin/layanan/delete/'.$customers->id,'Hapus',['class'=>'btn btn-danger '],['style'=>'margin-top:2%']).'  '.anchor('admin/layanan/edit/'.$customers->id,'Edit',['class'=>'btn btn-success ']) ;
			$row[] = $customers->title;
			$row[] = substr($customers->data, 0, 100) . ' ...';
			if(!$customers->mnot){
				$customers->mnot = "Kosong";
			}
			if(!$customers->m60){
				$customers->m60 = "Kosong";
			}if(!$customers->m90){
				$customers->m90 = "Kosong";
			}if(!$customers->m120){
				$customers->m120 = "Kosong";
			}if(!$customers->m150){
				$customers->m150 = "Kosong";
			}

			$row[] = "~M : ".$customers->mnot."<br>60M : ".$customers->m60."<br>90M :".$customers->m90."<br>120M :".$customers->m120."<br>150M :".$customers->m150."<br>";
			$active = $customers->rekomendasi;
			$row[] = $active=="yes" ? '<i class="fa fa-star"></i> <span> Rekomendasi</span> '.anchor('admin/layanan/unstar/'.$customers->id,'Batal',['class'=>'btn btn-warning ']) :  anchor('admin/layanan/star/'.$customers->id,'Pilih',['class'=>'btn btn-success ']);
			
			$data[] = $row;

        //$_POST['draw']='';
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_layanan->count_all(),
			"recordsFiltered" => $this->m_layanan->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	function input()
	{
		if(!$this->input->post()){
			$this->load->view('admin/layanan/input');
		}else{
			$nama =$this->input->post('nama');
			$token =$this->input->post('token');
			$deskripsi =$this->input->post('deskripsi');
			$mnot =$this->input->post('mnot');
			$menit60 =$this->input->post('60menit');
			$menit90 =$this->input->post('90menit');
			$menit120 =$this->input->post('120menit');
			$menit150 =$this->input->post('150menit');
			$idkat =$this->input->post('kategori');
			$datalayanan	 = array(
				'title'			=> $nama,
				'image'			=> $token,
				'data'			=> $deskripsi,
				'mnot'			=> $mnot,
				'm60'			=> $menit60,
				'm90'			=> $menit90,
				'm120'			=> $menit120,
				'm150'			=> $menit150,
				'id_kat'		=> $idkat

			);//end array datatestimoni

			$this->m_layanan->create($datalayanan);
			$this->session->set_userdata('notice','successcreate');
			redirect('admin/layanan');
		}//end if validation
	}
	function edit()
	{	
		$uri = $this->uri->segment(4);
		if(!$this->input->post()){

			$data['cek'] = $this->m_layanan->cek($uri);
			$data['layanan'] = $this->m_layanan->show($uri);
			$data['cek']=="False" ? redirect("admin/layanan"): $this->load->view('admin/layanan/input',$data);
		}else{
			$nama =$this->input->post('nama');
			$token =$this->input->post('token');
			$deskripsi =$this->input->post('deskripsi');
			$mnot =$this->input->post('mnot');
			$menit60 =$this->input->post('60menit');
			$menit90 =$this->input->post('90menit');
			$menit120 =$this->input->post('120menit');
			$menit150 =$this->input->post('150menit');
			$idkat =$this->input->post('kategori');
			$datalayanan	 = array(
				'title'			=> $nama,
				'image'			=> $token,
				'data'			=> $deskripsi,
				'mnot'			=> $mnot,
				'm60'			=> $menit60,
				'm90'			=> $menit90,
				'm120'			=> $menit120,
				'm150'			=> $menit150,
				'id_kat'		=> $idkat

			);//end array datatestimoni
			$this->m_layanan->update($uri,$datalayanan);
			$this->session->set_userdata('notice','successupdate');
			//dump print_r($this->input->post);
			redirect('admin/layanan');
		}//end if validation

	}

	
	//Untuk proses upload foto
	function proses_upload(){

		$config['upload_path']   = FCPATH.'/assets/uploads/layanan/';
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$config['max_width'] = '500';
		$config['max_height'] = '300';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('userfile')){
			$token=$this->input->post('token_foto');
			$nama=$this->upload->data('file_name');
			$dataimage = array(
				'id'			=> NULL,
				'nama'			=> $nama,
				'token'		=> $token

			);//end array datatestimoni
			
			$this->m_images->improtimage($dataimage);
		}


	}


	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');
		$foto=$this->db->get_where('tb_images',array('token'=>$token));
		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama;
			if(file_exists($file=FCPATH.'/assets/uploads/layanan/'.$nama_foto)){
				unlink($file);
			}
			$this->m_images->delete($token);

		}


		echo "{}";
	}
	function delete($id)
	{
		$this->session->set_userdata('notice','delete');
		$this->m_layanan->delete($id);
		redirect('admin/layanan');
	}
	function star($id)
	{
		$cek = $this->m_layanan->cekstar();
		$total= $cek->total;

		if($total==6){
			$this->session->set_userdata('notice','limitstar');
			redirect('admin/layanan');
		}else{
			$star= "yes";
			$datalayanan	 = array(
				'rekomendasi'			=> $star,
				);//end array datatestimoni
			$this->m_layanan->star($id,$datalayanan);
			$this->session->set_userdata('notice','suksesstar');
			redirect('admin/layanan');
		}
		
	}
	function unstar($id)
	{
		$star= "no";
		$datalayanan	 = array(
			'rekomendasi'			=> $star,
			);//end array datatestimoni
		$this->m_layanan->star($id,$datalayanan);
		$this->session->set_userdata('notice','suksesunstar');
		redirect('admin/layanan');
	}
	function dump(){
		error_reporting(0);
		$m60 = "1000000";
		$m90 = "1000000";
		$m120 = "1000000";
		$m150 = "1000000";
		if(!$m60){
			$m60 = "Belum Ada Harga";
		}elseif(!$m90){
			$m90 = "Belum Ada Harga";
		}elseif(!$m120){
			$m120 = "Belum Ada Harga";
		}elseif(!$m150){
			$m150 = "Belum Ada Harga";
		}
		echo "60 Menit :".$m60."<br>";
		echo"90 Menit :".$m90."<br>";
		echo "120 Menit :".$m120."<br>";
		echo "150 Menit :".$m150."<br>";
	}

}
