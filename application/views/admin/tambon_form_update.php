<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo SITE_URL('admin/otop')?>" class="tip-bottom">otop</a> <a href="#" class="current">otop_form</a> </div>
  <h1>เพิ่มตำบล</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>ข้อมูลตำบล</h5>
        </div>
        <div class="widget-content nopadding">
          <?php echo form_open_multipart('admin/tambon_update','class="form-horizontal"')?>
            <div class="control-group">
              <label class="control-label">ชื่อตำบล :</label>
              <div class="controls">
                <input type="text" class="span11" name="tambon_name" value="<?php echo $tambon[0]['tambon_name'] ;?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">รูปตำบล :</label>
              <div class="controls">
                <input type="file" name="tambon_img"/>
              </div>
            </div>
            <div class="control-group">
               <label class="control-label">รูปตำบล (เดิม) :</label>
               <div class="controls">
                 <img src="<?php echo BASE_URL('uploads/tambon/'.$tambon[0]['tambon_img'])?>" width="200">
                 <input type="hidden" name="tambon_img" value="<?php echo $tambon[0]['tambon_img'];?> ">
               </div>
             </div>
              <input type="hidden" name="tambon_id" value="<?php echo $tambon[0]['tambon_id'];?> ">
            <div class="form-actions">
              <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-danger">ยกเลิก</button>
              <a href="<?php echo SITE_URL('admin/tambon')?>"><button type="button" class="btn btn-info" style="float: right;">ย้อนกลับ</button></a>
            </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
