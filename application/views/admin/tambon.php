
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo SITE_URL('admin/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>การจัดการตำบล</h1>
  </div>
  <div class="container-fluid">
    <hr>
      <a href="<?php echo SITE_URL('admin/tambon_form')?>">
      <button style="margin-bottom:20px;" type="button" class="btn btn-primary">เพิ่มตำบล</button>
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
                  <th>ชื่อตำบล</th>
                  <th>รูปประกอบ</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1?>
                  <?php foreach ($tambon as $info): ?>
                  <tr class="odd gradeX">
                    <td><?php echo $i ?></td>
                    <td><?php echo $info['tambon_name'] ;?></td>
                    <td style="text-align: center;"><img src="<?php echo BASE_URL('uploads/tambon/'.$info['tambon_img'])?>" width="100"></td>
                    <td  style="text-align: center;">
                      <a href="<?php echo SITE_URL('admin/tambon_form_update/'.$info['tambon_id'])?>">
                        <button type="button" class="btn btn-warning">แก้ไข</button>
                      </a>
                      <a href="<?php echo SITE_URL('admin/tambon_delete/'.$info['tambon_id'])?>">
                        <button type="button" class="btn btn-danger" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')">ลบ</button>
                      </a>
                    </td>
                  </tr>
                   <?php $i++ ?>
                  <?php endforeach; ?>
                </tbody>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
