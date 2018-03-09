<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	// public function __construct()
	// {
	// 		parent::__construct();
	// 		@session_start();
	// 		if(@$_SESSION['token']==""){
	// 			redirect('admin');
	// 		}
	// }


	public function index()
	{
		$data['order_detail'] = $this->order_model->Get_Order_Detail_All();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/index');
		$this->load->view('theme/footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['order'] = $this->order_model->Get_Order($id);
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/order_detail');
		$this->load->view('theme/footer');
	}

	public function cancel()
	{
		$id = $this->uri->segment(3);
		$this->order_model->Order_detail_cancel($id);

		$url = $_SERVER['HTTP_REFERER'];
		echo "<script>
		alert('ยกเลิกคำสั่งซื้อแล้ว');
		window.location.href='$url';
		</script>";
	}

	public function status()
	{
		$input = $this->input->post();
		$this->order_model->Order_Status($input);

		$url = $_SERVER['HTTP_REFERER'];
		echo "<script>
		alert('เปลี่ยนสถานะเรียบร้อยแล้ว');
		window.location.href='$url';
		</script>";
	}

///////////////////  สินค้า   /////////////////
	public function product()
	{
		$data['product'] = $this ->product_model->product();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/product');
		$this->load->view('theme/footer');
	}
	public function product_form()
	{
		$data['product_group'] = $this ->product_model->product_group();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/product_form');
		$this->load->view('theme/footer');
	}
	public function product_form_update()
	{
		$id = $this->uri->segment(3);
		$data['product'] = $this ->product_model->product_id($id);
		$data['product_group'] = $this ->product_model->product_group();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/product_form_update');
		$this->load->view('theme/footer');
	}
	public function product_add()
	{
		$input = $this->input->post();
		if (!empty($_FILES["product_img"]["name"])) {
			$pathinfo = pathinfo($_FILES["product_img"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["product_img"]["tmp_name"],"uploads/product/".$new_file);
			$input['product_img'] = $new_file;
		} else {
			$input['product_img'] = "404.jpg";
		}
		$this->product_model->product_add($input);
		redirect('admin/product');
	}
	public function product_update()
	{
		$input = $this->input->post();
		if (!empty($_FILES["product_img"]["name"])) {
			$pathinfo = pathinfo($_FILES["product_img"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["product_img"]["tmp_name"],"uploads/product/".$new_file);
			$input['product_img'] = $new_file;
		} else {
			$input['product_img'] = $this->input->post('product_img');
		}
		$this->product_model->product_update($input);
		redirect('admin/product');
	}

	public function product_delete()
	{
		$id = $this->uri->segment(3);
		$input = array(
			'product_status' => 0,
			'product_id' => $id,
		);
		$this->product_model->product_delete($input);
		redirect('admin/product');
	}



//////////////////////////////   ประเภทสินค้า    //////////////
	public function product_group()
	{
		$data['product_group'] = $this ->product_model->product_group();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/product_group');
		$this->load->view('theme/footer');
	}
	public function product_group_form()
	{
		$this->load->view('theme/header');
		$this->load->view('theme/menu');
		$this->load->view('admin/product_group_form');
		$this->load->view('theme/footer');
	}
	public function product_group_form_update()
	{
		$id = $this->uri->segment(3);
		$data['product_group'] = $this ->product_model->product_group_id($id);
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/product_group_form_update');
		$this->load->view('theme/footer');
	}
	public function product_group_add()
	{
		$input = $this->input->post();
		$this->product_model->product_group_add($input);
		redirect('admin/product_group');
	}
	public function product_group_update()
	{
		$input = $this->input->post();
		$this->product_model->product_group_update($input);
		redirect('admin/product_group');
	}
	public function product_group_delete()
	{
		$id = $this->uri->segment(3);
		$input = array(
			'product_group_status' => 0,
			'product_group_id' => $id,
		);
		$this->product_model->product_group_delete($input);
		redirect('admin/product_group');
	}







//////////////////////     สมาชิก      ///////////////////
	public function member()
	{
		$data['member'] = $this ->member_model->member();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/member');
		$this->load->view('theme/footer');
	}
	public function member_form()
	{
		$this->load->view('theme/header');
		$this->load->view('theme/menu');
		$this->load->view('admin/member_form');
		$this->load->view('theme/footer');
	}
	public function member_form_update()
	{
		$id = $this->uri->segment(3);
		$data['member'] = $this ->member_model->member_get_by($id);
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/member_form_update');
		$this->load->view('theme/footer');
	}
	public function member_add()
	{
		$input = $this->input->post();
		$this->member_model->member_add($input);
 		redirect('admin/member');
	}
	public function member_update()
	{
		$input = $this->input->post();
		$this->member_model->member_update($input);
		redirect('admin/member');
	}
	public function member_status_1()
		{
			$id = $this->uri->segment(3);
			$input = array(
				'member_status' => 1,
				'member_id' => $id,
			);
			$this->member_model->member_accept($input);
			redirect('admin/member');
		}
		public function member_status_0()
			{
				$id = $this->uri->segment(3);
				$input = array(
					'member_status' => 0,
					'member_id' => $id,
				);
				$this->member_model->member_accept($input);
				redirect('admin/member');
			}

	public function member_delete()
	{
		$id = $this->uri->segment(3);
		$this->member_model->member_delete($id);
		redirect('admin/member');
	}


////////////////  ตำบล /////////////
	public function tambon()
	{
		$data['tambon'] = $this ->tambon_model->tambon();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/tambon');
		$this->load->view('theme/footer');
	}
	public function tambon_form()
	{
		$this->load->view('theme/header');
		$this->load->view('theme/menu');
		$this->load->view('admin/tambon_form');
		$this->load->view('theme/footer');
	}
	public function tambon_form_update()
	{
		$id = $this->uri->segment(3);
		$data['tambon'] = $this ->tambon_model->tambon_id($id);
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/tambon_form_update');
		$this->load->view('theme/footer');
	}
	public function tambon_add()
	{
		$input = $this->input->post();
		if (!empty($_FILES["tambon_img"]["name"])) {
			$pathinfo = pathinfo($_FILES["tambon_img"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["tambon_img"]["tmp_name"],"uploads/tambon/".$new_file);
			$input['tambon_img'] = $new_file;
		} else {
			$input['tambon_img'] = "404.jpg";
		}
		$this->tambon_model->tambon_add($input);
		redirect('admin/tambon');
	}
	public function tambon_update()
	{
		$input = $this->input->post();
		if (!empty($_FILES["tambon_img"]["name"])) {
			$pathinfo = pathinfo($_FILES["tambon_img"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["tambon_img"]["tmp_name"],"uploads/tambon/".$new_file);
			$input['tambon_img'] = $new_file;
		} else {
			$input['tambon_img'] = $this->input->post('tambon_img');
		}
		$this->tambon_model->tambon_update($input);
		redirect('admin/tambon');
	}

	public function tambon_delete()
	{
		$id = $this->uri->segment(3);
		$this->tambon_model->tambon_delete($id);
		redirect('admin/tambon');
	}





	public function general()
	{
		$data['general'] = $this ->general_model->general();
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu');
		$this->load->view('admin/general');
		$this->load->view('theme/footer');
	}
	public function general_update()
	{
		$input = $this->input->post();
		if (!empty($_FILES["general_img"]["name"])) {
			$pathinfo = pathinfo($_FILES["general_img"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["general_img"]["tmp_name"],"uploads/general/".$new_file);
			$input['general_img'] = $new_file;
		} else {
			$input['general_img'] = $this->input->post('general_img');
		}
		$this->general_model->general_update($input);
		redirect('admin/general');
	}



}
