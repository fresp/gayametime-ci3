<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_ketentuan extends CI_Model {
	var   $table =  'tb_ketentuan';
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

