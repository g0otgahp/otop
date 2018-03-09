<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_model extends CI_Model {

    public function Get_Brand()
    {
      $data = $this->db->order_by('product_group_id','DESC')->get('product_group')->result_array();
      return $data;
    }

    public function Get_Product_list()
    {
      $data = $this->db
      ->order_by('product_id','DESC')
      ->join('product_group','product_group.product_group_id = product.product_group_id')
      ->join('tambon','tambon.tambon_id = product.product_tambon')
      ->get('product')->result_array();
      return $data;
    }

    public function Get_General(){
      $data = $this->db
      ->get('general')->result_array();
      return $data;
    }
}
