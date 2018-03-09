<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambon_model extends CI_Model {

	public function tambon()
	{
		$dataall = $this ->db
		->where('tambon_status',1)
		->get('tambon') ->result_array();
		return $dataall;
	}
	public function tambon_id($id)
	{
		$dataall = $this ->db
		->where('tambon_id',$id)
		->get('tambon') ->result_array();
		return $dataall;
	}
	public function tambon_add($input)
	{
		$this->db->insert('tambon',$input);
	}
	public function tambon_update($input)
	{
		$this->db
		->where('tambon_id',$input['tambon_id'])
		->update('tambon',$input);
	}
	public function tambon_delete($input)
	{
		$delete['tambon_status'] = 0;
		$delete['tambon_id'] = $input;
		$this->db
		->where('tambon_id',$delete['tambon_id'])
		->update('tambon',$delete);
	}

}
