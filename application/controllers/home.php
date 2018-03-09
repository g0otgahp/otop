<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function LoadPage($value){
    $data = $value['Result'];
    $this->load->view('template/header', $data);
    $this->load->view($value['View']);
    $this->load->view('template/footer');
  }


  public function index()
  {
    $Brand = $this->homepage_model->Get_Brand();
    $Product = $this->homepage_model->Get_Product_list();
    $General = $this->homepage_model->Get_General();
    $value = array(
      'Result' => array(
        'brand' => $Brand,
        'product' => $Product,
        'general' => $General,
      ),
      'View' => 'homepage/home',
    );

    $this->LoadPage($value);
  }

  public function login()
  {
    if ($this->input->post('LoginUser')=='admin') {
      // $admin = $this->db
      // ->where('member_username',$this->input->post('LoginUser'))
      // ->where('member_password',$this->input->post('LoginPwd'))
      // ->get('member')
      // ->result_array();
      //
      // if (count($admin) >0) {
      //   @session_start();
      //   $_SESSION['ADMIN'] = $admin[0]['admin_username'];
      //   redirect('admin/member');
      // } else {
        $url = $_SERVER['HTTP_REFERER'];
        echo "<script>
        alert('ไม่อณุญาติให้ใช้รหัสนี้');
        window.location.href='$url';
        </script>";
      // }
    } else {
      $login = $this->db
      ->where('member_username',$this->input->post('LoginUser'))
      ->where('member_password',$this->input->post('LoginPwd'))
      ->get('member')
      ->result_array();

      if (count($login) >0) {
          @session_start();
          $_SESSION['USER_ID'] = $login[0]['member_id'];
          $_SESSION['USER_NAME'] = $login[0]['member_username'];
          $_SESSION['FNAME'] = $login[0]['member_fname'];
          $_SESSION['LNAME'] = $login[0]['member_lname'];
          $_SESSION['PHONE'] = $login[0]['member_phone'];
          $_SESSION['EMAIL'] = $login[0]['member_email'];
          $_SESSION['ADD'] = $login[0]['member_address'];
          redirect($_SERVER['HTTP_REFERER']);
        } else {
          $url = $_SERVER['HTTP_REFERER'];
          echo "<script>
          alert('รหัสผ่านไม่ถูกต้อง');
          window.location.href='$url';
          </script>";
      }
    }
  }

  public function logout()
  {
    session_start();
    session_destroy();
    redirect('home');
  }

  public function register()
  {
    $input = $this->input->post();
    $login = $this->member_model->Register_Member($input);

      @session_start();
      $_SESSION['USER_ID'] = $login[0]['member_id'];
      $_SESSION['USER_NAME'] = $login[0]['member_username'];
      $_SESSION['FNAME'] = $login[0]['member_fname'];
      $_SESSION['LNAME'] = $login[0]['member_lname'];
      $_SESSION['PHONE'] = $login[0]['member_phone'];
      $_SESSION['EMAIL'] = $login[0]['member_email'];
      $_SESSION['ADD'] = $login[0]['member_address'];

      redirect($_SERVER['HTTP_REFERER']);
  }

  public function Edit()
  {
    $input = $this->input->post();
    $login = $this->member_model->Edit_Member($input);

    @session_start();
    $_SESSION['USER_ID'] = $login[0]['member_id'];
    $_SESSION['USER_NAME'] = $login[0]['member_username'];
    $_SESSION['FNAME'] = $login[0]['member_fname'];
    $_SESSION['LNAME'] = $login[0]['member_lname'];
    $_SESSION['PHONE'] = $login[0]['member_phone'];
    $_SESSION['EMAIL'] = $login[0]['member_email'];
    $_SESSION['ADD'] = $login[0]['member_address'];

    $url = $_SERVER['HTTP_REFERER'];
    echo "<script>
    alert('แก้ไขข้อมูลเรียบร้อย');
    window.location.href='$url';
    </script>";
  }
}
