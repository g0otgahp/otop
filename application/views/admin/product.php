
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>การจัดการสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>
      <a href="<?php echo SITE_URL('admin/product_form')?>">
      <button style="margin-bottom:20px;" type="button" class="btn btn-primary">เพิ่มสินค้า</button>
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
                  <th>ชื่อสินค้า</th>
                  <th>ราตาสินค้า</th>
                  <th>รูปสินค้า</th>
                  <th>คงเหลือ</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1?>
                 <?php foreach ($product as $product): ?>
                 <tr class="odd gradeX">
                   <td><?php echo $i ?></td>
                   <td><?php echo $product['product_group_name'] ;?></td>
                   <td><?php echo $product['product_name'] ;?></td>
                   <td><?php echo $product['product_price'] ;?></td>
                   <td style="text-align: center;"><img src="<?php echo BASE_URL('uploads/product/'.$product['product_img'])?>" width="100"></td>
                   <td align="center"><b>
                   <?php if ($product['product_stock'] == 0): ?>
                     <span style="color:red;"><?php echo $product['product_stock'] ?></span>
                  <?php else: ?>
                    <span><?php echo $product['product_stock'] ?></span>
                   <?php endif; ?>
                 </td></b>

                   <td style="text-align: center;">
                       <a href="<?php echo SITE_URL('admin/product_form_update/'.$product['product_id'])?>">
                         <button type="button" class="btn btn-warning">แก้ไข</button>
                       </a>
                       <a href="<?php echo SITE_URL('admin/product_delete/'.$product['product_id'])?>">
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
