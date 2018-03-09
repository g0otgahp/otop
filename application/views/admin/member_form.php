<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo SITE_URL('admin/member')?>" class="tip-bottom">Member</a> <a href="#" class="current">Member_form</a> </div>
  <h1>เพิ่มสมาชิก</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>ข้อมูลสมาชิก</h5>
        </div>
        <div class="widget-content nopadding">
          <?php echo form_open_multipart('admin/member_add','class="form-horizontal') ?>
            <div class="control-group">
              <label class="control-label">ชื่อ :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First Name" name="member_fname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สกุล :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last Name" name="member_lname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อีเมล์ :</label>
              <div class="controls">
                <input type="email"  class="span11" placeholder="Email"  name="member_email"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ไอดี :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="ID"  name="member_username"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">รหัสผ่าน :</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Password"  name="member_password"/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-danger">ยกเลิก</button>
              <a href="<?php echo SITE_URL('admin/member')?>"><button type="button" class="btn btn-info" style="float: right;">ย้อนกลับ</button></a>
            </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
