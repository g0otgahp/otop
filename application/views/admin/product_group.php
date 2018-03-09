
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>การจัดการประเภทสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>
      <a href="<?php echo SITE_URL('admin/product_group_form')?>">
      <button style="margin-bottom:20px;" type="button" class="btn btn-primary">เพิ่มประเภทสินค้า</button>
      </a>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>ตารางการจัดการ</h5>
          </div>
          <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อประเภทสินค้า</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1?>
                 <?php foreach ($product_group as $product_group): ?>
                 <tr class="odd gradeX">
                   <td><?php echo $i ?></td>
                   <td><?php echo $product_group['product_group_name'] ;?></td>
                   <td style="text-align: center;">
                       <a href="<?php echo SITE_URL('admin/product_group_form_update/'.$product_group['product_group_id'])?>">
                         <button type="button" class="btn btn-warning">แก้ไข</button>
                       </a>
                       <a href="<?php echo SITE_URL('admin/product_group_delete/'.$product_group['product_group_id'])?>">
                         <button type="button" class="btn btn-danger" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')" >ลบ</button>
                       </a>
                     </a>
                   </td>
                 </tr>
                 <?php $i++ ?>
                 <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
