
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>การจัดการสมาชิก</h1>
  </div>
  <div class="container-fluid">
    <hr>
      <a href="<?php echo SITE_URL('admin/member_form')?>">
      <button style="margin-bottom:20px;" type="button" class="btn btn-primary">เพิ่มสมาชิก</button>
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
                  <th>ชื่อ</th>
                  <th>นามสกุล</th>
                  <th>อีเมล์</th>
                  <th>เบอร์โทรศัพท์</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1?>
                  <?php foreach ($member as $info): ?>
                  <tr class="odd gradeX">
                    <td><?php echo $i ?></td>
                    <td><?php echo $info['member_fname'] ;?></td>
                    <td><?php echo $info['member_lname'] ;?></td>
                    <td><?php echo $info['member_email'] ;?></td>
                    <td><?php echo $info['member_phone'] ;?></td>

                    <!-- <td  style="text-align: center;">
                    <?php //if ($info['member_status'] == 1) {?>
                      <a href="<?php echo SITE_URL('admin/member_status_0/'.$info['member_id'])?>">
                        <button type="button" class="btn btn-success">เปิดใช้งาน</button>
                      </a>
                    <?php //}?>
                    <?php //if ($info['member_status'] == 0) {?>
                      <a href="<?php echo SITE_URL('admin/member_status_1/'.$info['member_id'])?>">
                        <button type="button" class="btn btn-danger">ยังไมเปิดใช้งาน</button>
                      </a>
                    <?php //}?>
                    </td> -->
                    <td  style="text-align: center;">
                      <a href="<?php echo SITE_URL('admin/member_form_update/'.$info['member_id'])?>">
                        <button type="button" class="btn btn-warning">แก้ไข</button>
                      </a>
                      <a href="<?php echo SITE_URL('admin/member_delete/'.$info['member_id'])?>">
                        <button type="button" class="btn btn-danger" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')">ลบ</button>
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
