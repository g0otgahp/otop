<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($this->uri->segment(2)=="index"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/index')?>"><i class="icon icon-file"></i> <span>ประวัติการขาย</span></a></li>
    <li class="<?php if($this->uri->segment(2)=="product"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/product')?>"><i class="icon icon-file"></i> <span>การจัดการสินค้า</span></a></li>
    <li class="<?php if($this->uri->segment(2)=="product_group"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/product_group')?>"><i class="icon icon-file"></i> <span>การจัดการประเภทสินค้า</span></a></li>
    <li class="<?php if($this->uri->segment(2)=="member"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/member')?>"><i class="icon icon-file"></i> <span>การจัดการสมาชิก</span></a></li>
    <li class="<?php if($this->uri->segment(2)=="tambon"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/tambon ')?>"><i class="icon icon-file"></i> <span>การจัดการตำบล</span></a></li>
    <li class="<?php if($this->uri->segment(2)=="general"){ ?>active<?php } ?>"> <a href="<?php echo SITE_URL('admin/general')?>"><i class="icon icon-file"></i> <span>ตั้งค่าทั่วไป</span></a></li>
    <li><a href="<?php echo SITE_URL('login/logout')?>"><i class="icon icon-fullscreen"></i> <span>ออกจากระบบ</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
