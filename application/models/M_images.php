<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_images extends CI_Model {
	var   $table =  'tb_images';
	function update($id,$data)
	{
		$this->db->where('id',$id)
		->update($table,$data);
	}
	function improtimage($dataimages)
	{
		
		$this->db->insert($this->table,$dataimages);

	}
	function delete($token)
	{
		$this->db->where('token',$token)
				->delete($this->table);
	}
	
}///end class  ///	

