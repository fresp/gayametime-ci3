<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_general extends CI_Model {
	var   $table =  'tb_general_data';
	function show(){
		$show = $this->db->get($this->table);
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

