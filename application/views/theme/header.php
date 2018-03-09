<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบจัดการเว็บไซต์</title>
<?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'detail'): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL('assets/bootstrap/css/bootstrap.min.css')?>">
<?php else: ?>
	<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/bootstrap.min.css')?>" />
<?php endif; ?>
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/bootstrap-responsive.min.css')?>" />
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/fullcalendar.css')?>" />
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/matrix-style.css')?>" />
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/matrix-media.css')?>" />
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/uniform.css')?>" />
<link rel="stylesheet" href="<?php echo BASE_URL('assets/assets/css/select2.css')?>" />
<link href="<?php echo BASE_URL('assets/assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php  echo BASE_URL('assets/assets/css/jquery.gritter.css')?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL('assets/assets/js/jquery.datetimepicker.css')?>">
</head>
<body>

	<!--Header-part-->


	<div id="header">
	  <h1><img src="" style="width: 160px; margin-left: 25px; margin-top: 10px;"/></h1>
	</div>
	<!--close-Header-part-->


	<!--start-top-serch-->
	<div id="search">
	  <input type="text" placeholder="Search here..."/>
	  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
	</div>
	<!--close-top-serch-->
