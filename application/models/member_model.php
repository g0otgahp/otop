<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Model {

    public function Get_Member()
    {
      $data = $this->db->order_by('member_id','DESC')->get('member')->result_array();

      return $data;
    }

    public function Register_Member($input)
    {
      $this->db->insert('member',$input);
      $id = $this->db->insert_id();

      $data = $this->db
      ->order_by('member_id','DESC')
      ->where('member_id',$id)
      ->get('member')
      ->result_array();

      return $data;
    }

    public function Edit_Member($input)
    {
      $this->db->where('member_id',$input['member_id'])->update('member',$input);

      $data = $this->db
      ->order_by('member_id','DESC')
      ->where('member_id',$input['member_id'])
      ->get('member')
      ->result_array();

      return $data;
    }

    public function Get_Member_By_Id($id)
    {
      $data = $this->db
      ->where('member_id',$id)
      ->get('member')->result_array();
      return $data;
    }

    public function member_save($input)
    {
      $this->db->insert('member',$input);
    }

    public function member_update($input)
    {
      $this->db->where('member_id',$input['member_id'])->update('member',$input);
    }

    public function member()
  	{
  		$dataall = $this ->db
  		->where('member_status <', 10)
  		->get('member') ->result_array();
  		return $dataall;
  	}
  	public function member_get_by($id)
  	{
  		$dataall = $this ->db
  		->where('member_id',$id)
  		->get('member') ->result_array();
  		return $dataall;
  	}
  	public function member_get_2()
  	{
  		$dataall = $this ->db
  		->where('member_status',2)
  		->get('member') ->result_array();
  		return $dataall;
  	}
  	public function member_get_1()
  	{
  		$dataall = $this ->db
  		->where('member_status',1)
  		->get('member') ->result_array();
  		return $dataall;
  	}
  	public function member_get_0()
  	{
  		$dataall = $this ->db
  		->where('member_status',0)
  		->get('member') ->result_array();
  		return $dataall;
  	}
  	public function member_add($input)
  	{
  		$this->db->insert('member',$input);
  	}
  	public function member_delete($id)
  	{
  		$this->db
  		->where('member_id',$id)
  		->delete('member');
  	}
  	public function member_get_status1()
  	{
  		$dataall = $this ->db
  		->where('member_status',1)
  		->get('member') ->result_array();

  		return $dataall;
  	}
  	public function member_accept($input)
  	{
  		$this->db
  		->where('member_id',$input['member_id'])
  		->update('member',$input);
  	}
}
