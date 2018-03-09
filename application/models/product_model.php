<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {

	public function product()
	{
		$dataall = $this ->db
		->where('product_status',1)
		->join('product_group','product.product_group_id=product_group.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product') ->result_array();
		return $dataall;
	}
	public function product_id($id)
	{
		$dataall = $this ->db
		->where('product_id',$id)
		->join('product_group','product.product_group_id=product_group.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product') ->result_array();
		return $dataall;
	}
	public function product_add($input)
	{
		$this->db->insert('product',$input);
	}
	public function product_update($input)
	{
		$this->db
		->where('product_id',$input['product_id'])
		->update('product',$input);
	}
	public function product_delete($input)
	{
		$this->db
		->where('product_id',$input['product_id'])
		->update('product',$input);
	}

	//////////ประเภท//////////
	public function product_group()
	{
		$dataall = $this ->db
		->where('product_group_status',1)
		->get('product_group') ->result_array();
		return $dataall;
	}
	public function product_group_id($id)
	{
		$dataall = $this ->db
		->where('product_group_id',$id)
		->get('product_group') ->result_array();
		return $dataall;
	}
	public function product_group_add($input)
	{
		$this->db->insert('product_group',$input);
	}
	public function product_group_update($input)
	{
		$this->db
		->where('product_group_id',$input['product_group_id'])
		->update('product_group',$input);
	}
	public function product_group_delete($input)
	{
		$this->db
		->where('product_group_id',$input['product_group_id'])
		->update('product_group',$input);
	}


	public function Get_Product_By_Brand($id)
	{
		$data = $this->db
		->order_by('product_id','DESC')
		->where('product_status',1)
		->where('product.product_group_id',$id)
		->join('product_group','product_group.product_group_id = product.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product')->result_array();
		return $data;
	}

	public function Get_Product_By_Tambon($id)
	{
		$data = $this->db
		->order_by('product_id','DESC')
		->where('product_status',1)
		->where('product.product_tambon',$id)
		->join('product_group','product_group.product_group_id = product.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product')->result_array();
		return $data;
	}

	public function Get_Tambon_Id($id)
	{
		$data = $this->db
		->where('tambon_status',1)
		->where('tambon_id',$id)
		->get('tambon')->result_array();
		return $data;
	}

	public function Get_Product_By_Id($id)
	{
		$data = $this->db
		->where('product_id',$id)
		->join('product_group','product_group.product_group_id = product.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product')->result_array();
		return $data;
	}

	public function Get_Product_Find($input)
	{
		$find = "%".$input."%";
		$data = $this->db
		->where('product.product_name LIKE',$find)
		->where('product_status',1)
		->join('product_group','product_group.product_group_id = product.product_group_id')
		->join('tambon','tambon.tambon_id = product.product_tambon')
		->get('product')->result_array();
		return $data;
	}

}
