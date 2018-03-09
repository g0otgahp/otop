<!DOCTYPE html>
<html lang="en">

<head>
        <title>Administration OTOP</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo BASE_URL('assets/css/bootstrap.min.css')?>" />
		<link rel="stylesheet" href="<?php echo BASE_URL('assets/css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?php echo BASE_URL('assets/css/matrix-login.css')?>" />
        <link href="<?php echo BASE_URL('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">
            <?php echo form_open('login/check') ?>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="user" id="txtName"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="pass"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!-- <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span> -->
                    <span class="pull-right"><button type="submit" class="btn btn-success" id="btnNext"/> Login</button></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            <!-- </form> -->
            <?php echo form_close() ?>
        </div>
        <script src="<?php echo BASE_URL('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo BASE_URL('assets/js/matrix.login.js')?>"></script>
    </body>

        <script type="text/javascript">
				$(document).ready(function(){
					// validate support storage
					if(typeof(Storage) == "undefined") {
						alert("Not storage support");
					}
					// button click
					$("#btnNext").click(function(){
					// set storage

					localStorage.setItem("sName", $("#txtName").val());
					// window.location="app/pages/product/smart2/login2.html";
					});
				});
				</script>

</html>
