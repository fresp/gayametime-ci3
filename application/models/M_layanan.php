<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_layanan extends CI_Model {
	var   $table =  'tb_layanan';
    var $column_order = array(null, 'title',null,null,'rekomendasi'); //set column field database for datatable orderable
    var $column_search = array('title'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 

    public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }

    private function _get_query()
    {
    	$this->db->from($this->table);
    	$i = 0;
        foreach ($this->column_search as $emp) // loop column 
        {
        	if(isset($_POST['search']['value']) && !empty($_POST['search']['value'])){
        		$_POST['search']['value'] = $_POST['search']['value'];
        	} else
        	$_POST['search']['value'] = '';
        	if($_POST['search']['value'])
        	{
        		if($i===0)  
        		{
        			$this->db->group_start();
        			$this->db->like($emp, $_POST['search']['value']);
        		}else{
        			$this->db->or_like($emp, $_POST['search']['value']);
        		}
        		if(count($this->column_search) - 1 == $i) 
        			$this->db->group_end();
        	}
        	$i++;
        }

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else if(isset($this->order)){
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_employees()
	{
		$this->_get_query();
		if(isset($_POST['length']) && $_POST['length'] < 1) {
			$_POST['length']= '10';
		} else
		$_POST['length']= $_POST['length'];

		if(isset($_POST['start']) && $_POST['start'] > 1) {
			$_POST['start']= $_POST['start'];
		}
		$this->db->limit($_POST['length'], $_POST['start']);
	 //print_r($_POST);die;
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	function show($id){
		$show = $this->db->select('t1.title, t1.data, t1.image,t1.mnot,t1.m60, t1.m90, t1.m120, t1.m150, t1.id_kat, t2.token, t2.nama')
		->from(''.$this->table.' as t1')
		->join('tb_images as t2', 't2.token = t1.image')
		->where('t1.id',$id)
		->limit(1)
		->get();
		if($show->num_rows() > 0 ) {
			return $show->row();
		} else {
			return array();
		}		
	}
	function create($data)
	{
		$this->db->insert($this->table,$data);
	}
	function update($id,$data)
	{
		$this->db->where('id',$id)
		->update($this->table,$data);
	}
	function cek($uri){
		$gry = $this->db->where('id',$uri)
		->limit(1)
		->get('tb_layanan');
		if($gry->num_rows()	>	0)
		{
			return "True";
		}else{
			return "False";
		}				
	}
	function delete($id)
	{
		$this->db->where('id',$id)
		->delete($this->table);
	}
	function star($id,$data)
	{
		$this->db->where('id',$id)
		->update($this->table,$data);
	}
	function cekstar(){
		$show = $this->db->select('id, count(*) as total')
						 ->where('rekomendasi','yes')
						 ->get($this->table);
		if($show->num_rows() > 0 ) {
			return $show->row();	
		} else {
			return array();
		}	
	}
	function showrekomendasi(){
		$show = $this->db->select('t1.title, t1.data, t1.image,t1.mnot,t1.m60, t1.m90, t1.m120, t1.m150, t1.id_kat, t2.token, t2.nama as namagambar')
		->from(''.$this->table.' as t1')
		->join('tb_images as t2', 't2.token = t1.image')
		->where('rekomendasi','yes')
		->get();
		if($show->num_rows() > 0 ) {
			return $show->result();
		} else {
			return array();
		}		
	}
	function cekservice($name){
		$show = $this->db->where('nama',$name)
						 ->get('tb_kat');
		if($show->num_rows() > 0 ) {
			return $show->row();	
		} else {
			return "false";
		}	
	}
	function showdetail($id){
		$show = $this->db->select('layanan.title,layanan.id, layanan.data,layanan.mnot,layanan.m60, layanan.m90, layanan.m120, layanan.m150, image.token, image.nama as namagambar')
						->from(''.$this->table.' as layanan')
						->join('tb_images as image', 'image.token = layanan.image')
						->where('layanan.id_kat',$id)
						->get();
		if($show->num_rows() > 0 ) {
			return $show->result();
		} else {
			return array();
		}		
	}

}///end class  ///	

