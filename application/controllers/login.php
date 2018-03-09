<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function check()
	{
			$input = $this->input->post();
			// $pwd = md5($input['member_pass']);
			$query = $this->db
			->where('member_username',$input['user'])
			->where('member_password',$input['pass'])
			->get('member')
			->result_array();

			if (count($query) > 0) {
					if ($query[0]['member_status'] == 10) {
					redirect('admin/index');
				}

			} else {
				echo "<script> alert ('กรุณาตรวจสอบรหัสผ่านของท่าน')</script>";
				echo "<meta http-equiv='refresh' content='0; url=../login' />";
			}

	}

	public function logout()
	{
		session_start();
		session_destroy();

		redirect('login');
	}



}
