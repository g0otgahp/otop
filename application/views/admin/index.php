
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>ใบสั่งซื้อ<h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>การจัดการใบสั่งซื้อ</h5>
          </div>
          <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
              <thead>
                <tr class="info">
                  <th>#</th>
                  <th width="20%">รหัสบิล</th>
                  <th width="50%">วันที่ - เวลา</th>
                  <th width="30%">สถานะ</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1; foreach ($order_detail as $row): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td>T00<?php echo $row['order_detail_id']?></td>
                  <td><?php echo $row['order_detail_date']?></td>
                  <?php if ($row['order_detail_status'] == 1): ?>
                    <td style="color:gray;">ยังไม่ยืนยัน</td>
                  <?php elseif($row['order_detail_status'] == 2): ?>
                    <td style="color:orange;">รอการยืนยัน</td>
                  <?php elseif($row['order_detail_status'] == 3): ?>
                    <td style="color:blue;">ผ่านการยืนยันแล้ว</td>
                  <?php elseif($row['order_detail_status'] == 4): ?>
                    <td style="color:blue;">กำลังจัดส่งสินค้า</td>
                  <?php elseif($row['order_detail_status'] == 5): ?>
                    <td style="color:green;">การสั่งซื้อเสร็จสิ้น</td>
                  <?php else: ?>
                    <td style="color:red;">ยกเลิกใบสั่งซื้อ</td>
                  <?php endif; ?>
                  <td align="center">
                    <a href="<?php echo SITE_URL('admin/detail/'.$row['order_detail_id'])?>" class="btn btn-primary btn-sm">รายละเอียด</a>
                  </td>
                </tr>
              <?php $i++; endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>  </div>
</div>
