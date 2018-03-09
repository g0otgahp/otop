<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo SITE_URL('admin/otop')?>" class="tip-bottom">otop</a> <a href="#" class="current">otop_form</a> </div>
  <h1>เพิ่มสินค้า</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>ข้อมูลสินค้า</h5>
        </div>
        <div class="widget-content nopadding">
          <?php echo form_open_multipart('admin/product_add','class="form-horizontal"')?>
          <div class="control-group">
            <label class="control-label">ชื่อประเภทสินค้า :</label>
            <div class="controls">
              <select name="product_group_id" class="span4">
                <option value="">เลือกประเภทสินค้า</option>
                 <?php foreach($product_group as $product_group) :?>
                <option value="<?php echo $product_group['product_group_id']?>"><?php echo $product_group['product_group_name']?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php $tambon = $this->db->order_by('tambon_id','DESC')->get('tambon')->result_array();?>
          <div class="control-group">
            <label class="control-label">ชื่อตำบล :</label>
            <div class="controls">
              <select name="tambon_id" class="span4">
                <option value="">เลือกตำบล</option>
                 <?php foreach($tambon as $tambon) :?>
                <option value="<?php echo $tambon['tambon_id']?>"><?php echo $tambon['tambon_name']?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
            <div class="control-group">
              <label class="control-label">ชื่อสินค้า :</label>
              <div class="controls">
                <input type="text" class="span11" name="product_name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">รายละเอียดสินค้า :</label>
              <div class="controls">
                <textarea rows="10" name="product_detail"  class="span11" ></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ราตาสินค้า :</label>
              <div class="controls">
                <input type="text" class="span11" name="product_price" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">รูปสินค้า :</label>
              <div class="controls">
                <input type="file" name="product_img"/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-danger">ยกเลิก</button>
              <a href="<?php echo SITE_URL('admin/product')?>"><button type="button" class="btn btn-info" style="float: right;">ย้อนกลับ</button></a>
            </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
