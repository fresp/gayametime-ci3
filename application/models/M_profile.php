<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_profile extends CI_Model {
	var   $table =  'tb_profile';
	function show(){
		$show = $this->db->select('t1.bigtitle, t1.data, t1.visi,t1.misi, t1.banner,t2.token, t2.nama')
						->from(''.$this->table.' as t1')
						->join('tb_images as t2', 't2.token = t1.banner')
						
						->limit(1)
						->get();
		if($show->num_rows() > 0 ) {
			return $show->row();
		} else {
			return array();
		}		
	}
	function update($id,$data)
	{
		$this->db->where('id',$id)
		->update($this->table,$data);
	}
	
	

}///end class  ///	

