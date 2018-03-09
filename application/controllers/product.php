<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

  public function LoadPage($value){
    $data = $value['Result'];
    $this->load->view('template/header', $data);
    $this->load->view($value['View']);
    $this->load->view('template/footer');
  }

  public function brand()
  {
    $id = $this->uri->segment(3);
    $product = $this->product_model->Get_Product_By_Brand($id);
    $Brand = $this->homepage_model->Get_Brand();
    $General = $this->homepage_model->Get_General();

    $value = array(
      'Result' => array(
        'brand' => $Brand,
        'product' => $product,
        'general' => $General,

      ),
      'View' => 'homepage/product',
    );

    $this->LoadPage($value);
  }

  public function tambon()
  {
    $id = $this->uri->segment(3);
    $tambon = $this->product_model->Get_Tambon_Id($id);
    $product = $this->product_model->Get_Product_By_Tambon($id);
    $Brand = $this->homepage_model->Get_Brand();
    $General = $this->homepage_model->Get_General();

    $value = array(
      'Result' => array(
        'brand' => $Brand,
        'product' => $product,
        'general' => $General,
        'tambon' => $tambon,
      ),
      'View' => 'homepage/product',
    );

    $this->LoadPage($value);
  }

  public function product_detail()
  {
    $id = $this->uri->segment(3);
    $product = $this->product_model->Get_Product_By_Id($id);
    $Brand = $this->homepage_model->Get_Brand();
    $General = $this->homepage_model->Get_General();


    $value = array(
      'Result' => array(
        'brand' => $Brand,
        'product' => $product,
        'general' => $General,

      ),
      'View' => 'homepage/product_detail',
    );

    $this->LoadPage($value);
  }

  public function product_find()
  {
    $input = $this->input->post('find');
    if ($input=='') {
      redirect('home/');
      exit();
    }
    $product = $this->product_model->Get_Product_Find($input);
    $Brand = $this->homepage_model->Get_Brand();
    $General = $this->homepage_model->Get_General();

    $find = $input;

    $value = array(
      'Result' => array(
        'brand' => $Brand,
        'product' => $product,
        'find' => $find,
        'general' => $General,

      ),
      'View' => 'homepage/product_find',
    );

    $this->LoadPage($value);
  }

  public function product_tambon()
  {
    $input = $this->input->post();
    print_r($input);
    if($input['tambon_id'] != 0){
      redirect('product/tambon/'.$input['tambon_id']);
    } else {
      redirect('home');
    }
  }
}
