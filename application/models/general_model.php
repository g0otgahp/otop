<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class general_model extends CI_Model {

	public function general()
	{
		$dataall = $this ->db
		->where('general_id',1)
		->get('general') ->result_array();
		return $dataall;
	}
	public function general_add($input)
	{
		$this->db->insert('general',$input);
	}
	public function general_update($input)
	{
		$this->db
		->where('general_id',1)
		->update('general',$input);
	}

}
