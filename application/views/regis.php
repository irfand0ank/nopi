<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="<?= base_url()?>login/register" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong>Silahkan</strong>Daftar</div>
			<!-- /.title -->
			<div class="frm-title">Register </div>
			<!-- /.frm-title -->
			<div class="frm-input">
                <input type="text" name="user"  placeholder="Username" class="frm-inp" required><i class="fa fa-user frm-ico"></i>
            </div>
            <div class="frm-input">
                <input type="text" name="nama"  placeholder="Nama Lengkap" class="frm-inp" required><i class="fa fa-user frm-ico"></i>
            </div>
            
			<!-- /.frm-input -->
			<div class="frm-input">
                <input type="password" name="pass" id="pass"  placeholder="Password" class="frm-inp" required><i class="fa fa-lock frm-ico"></i>
            </div>
            <div class="frm-input">
                <input type="password" name="pass2" id="pass2"  placeholder="Ulangi Password" class="frm-inp" required><i class="fa fa-lock frm-ico"></i>
            </div>
            
			<!-- /.frm-input -->
			
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit"> Daftar <i class="fa fa-arrow-circle-right"></i></button>
			<!-- /.row -->
			<a href="<?= base_url()?>login" class="a-link"><i class="fa fa-sign-in"></i>Sudah Ada Akun ? Login.</a>
			<div class="frm-footer"><strong>Copyright &copy;  </strong> All rights reserved.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?= base_url() ?>assets/scripts/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/scripts/modernizr.min.js"></script>
	<script src="<?= base_url() ?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/plugin/nprogress/nprogress.js"></script>
	<script src="<?= base_url() ?>assets/plugin/waves/waves.min.js"></script>

	<script src="<?= base_url() ?>assets/scripts/main.min.js"></script>
	<script>
        
        var password = document.getElementById("pass")
        , confirm_password = document.getElementById("pass2");

        function validatePassword()
        {
            if(password.value != confirm_password.value) 
            {
                confirm_password.setCustomValidity("Passwords Tidak Sama ");
            } 
            else 
            {
                confirm_password.setCustomValidity('');
            }
        }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    
    </script>
</body>
</html>