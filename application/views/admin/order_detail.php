
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>รายละเอียดใบสั่งซื้อ<h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="row">

            <div class="panel-body">
              <div class="row">
                <div class="col-sm-5" align="center">
                  <img class="img-responsive" width="370" src="<?php echo BASE_URL('uploads/order_detail/'.$order['Order_detail'][0]['order_detail_pic'])?>">
                </div>
                <div class="col-sm-7">
                  <span align="center">
                  <?php if ($order['Order_detail'][0]['order_detail_status'] == 1): ?>
                    <h3 style="color:gray;">ยังไม่ยืนยัน</h3>
                  <?php elseif($order['Order_detail'][0]['order_detail_status'] == 2): ?>
                    <h3 style="color:orange;">รอการยืนยัน</h3>
                  <?php elseif($order['Order_detail'][0]['order_detail_status'] == 3): ?>
                    <h3 style="color:blue;">ผ่านการยืนยันแล้ว</h3>
                  <?php elseif($order['Order_detail'][0]['order_detail_status'] == 4): ?>
                    <h3 style="color:blue;">กำลังจัดส่งสินค้า</h3>
                  <?php elseif($order['Order_detail'][0]['order_detail_status'] == 5): ?>
                    <h3 style="color:green;">การสั่งซื้อเสร็จสิ้น</h3>
                  <?php else: ?>
                    <h3 style="color:red;">ยกเลิกใบสั่งซื้อ</h3>
                  <?php endif; ?>
                </span>
                  <dl class="dl-horizontal">
                    <dt>วันที่สั่งซื้อ</dt>
                    <dd><?php echo $order['Order_detail'][0]['order_detail_date']?></dd>
                    <dt>สถานที่ส่งสินค้า</dt>
                    <dd><?php echo $order['Order_detail'][0]['order_detail_address']?></dd>
                  </dl>
                  <hr>
                  <dl class="dl-horizontal">
                    <dt>ชื่อบัญชี</dt>
                    <dd><?php echo $order['Order_detail'][0]['member_username']?></dd>
                    <dt>ชื่อลุกค้า</dt>
                    <dd><?php echo $order['Order_detail'][0]['member_fname'].$order['Order_detail'][0]['member_lname']?></dd>
                    <dt>เบอร์โทรศัพท์</dt>
                    <dd><?php echo $order['Order_detail'][0]['member_phone']?></dd>
                    <dt>Email</dt>
                    <dd><?php echo $order['Order_detail'][0]['member_email']?></dd>
                  </dl>
                  <hr>
                  <?php if ($order['Order_detail'][0]['order_detail_status'] != 5 ): ?>
                    <?php if ($order['Order_detail'][0]['order_detail_status'] != 0 ): ?>
                  <span align="center">
                  <h3>แก้ไขสถานะ</h3>
                  <?php echo form_open('admin/status')?>
                  <p>
                    <select onchange="this.form.submit()" required class="form-control" name="order_detail_status">
                      <option value="">--แก้ไขสถานะ--</option>
                      <option value="1">ยังไม่ยืนยัน</option>
                      <option value="2">รอการยืนยัน</option>
                      <option value="3">ผ่านการยืนยันแล้ว</option>
                      <option value="4">กำลังจัดส่งสินค้า</option>
                      <option value="5">การสั่งซื้อเสร็จสิ้น</option>
                      <option value="0">ยกเลิกใบสั่งซื้อ</option>
                    </select>
                  </p>
                  <p><input class="form-control" type="hidden" name="order_detail_id" value="<?php echo $order['Order_detail'][0]['order_detail_id']?>"></p>
                  <?php echo form_close();?>
                  </span>
                <?php endif; ?>
                <?php endif; ?>

                </div>
              </div>
                  <div class="col-md-12 col-sm-12">

                    <table class="table table-hover" id="table">
                      <thead>
                        <tr class="info">
                          <th>#</th>
                          <th width="45%">ชื่อสินค้า</th>
                          <th>จำนวน</th>
                          <th width="15%">ราคาชิ้นละ</th>
                          <th width="15%">รวมราคา</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php $i=1; $total=0; foreach ($order['Order'] as $row): ?>
                        <tr>
                          <td><?php echo $i ?></td>
                          <td><?php echo $row['product_name']?></td>
                          <td><?php echo $row['order_amount']?></td>
                          <td><?php echo number_format($row['order_price_per'])?> .-</td>
                          <?php $result = $row['order_price_per']*$row['order_amount'];?>
                          <td align="right"><?php echo number_format($result)?> .-</td>
                        </tr>
                      <?php $i++; $total += $result; endforeach; ?>

                      <tr class="warning">
                        <td colspan="3">
                        </td>
                        <td align="right">
                          รวม
                        </td>
                        <td align="right">
                          <?php echo number_format($total);?>.-
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>  </div>
</div>
