
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>ตั้งค่าทั่วไป</h1>
  </div>
  <div class="container-fluid">
    <hr>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>ข้อมูลทั้วไป</h5>
              </div>
              <div class="widget-content nopadding">
                <?php echo form_open_multipart('admin/general_update','class="form-horizontal"')?>
                  <div class="control-group">
                    <label class="control-label">ชื่อร้าน :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="general_name"  value="<?php echo $general[0]['general_name'];?> "/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">รายละเอียดร้าน :</label>
                    <div class="controls">
                      <textarea rows="10" name="general_detail"  class="span11"  ><?php echo $general[0]['general_detail'];?></textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">รูปภาพหน้าร้าน :</label>
                    <div class="controls">
                      <input type="file" name="general_img"/>
                    </div>
                  </div>
                  <div class="control-group">
                     <label class="control-label">รูปภาพหน้าร้าน (เดิม) :</label>
                     <div class="controls">
                       <img src="<?php echo BASE_URL('uploads/general/'.$general[0]['general_img'])?>" width="200">
                       <input type="hidden" name="general_img" value="<?php echo $general[0]['general_img'];?> ">
                     </div>
                   </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
