<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/styles/style.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="<?= base_url()?>login/aut" method="post" class="frm-single">
		<div class="inside">
            <?= $this->session->flashdata('pesan');?>
			<div class="title"><strong>Silahkan</strong>Masuk</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<!--<div class="frm-input">
                <select name="level" class="form-control" required>
                    <option value="">--Pilih--</option>
                    <option value="1">Administrator</option>
                    <option value="2">Penjahit</option>
                    <option value="3">Disperindag</option>
                    <option value="4">Penjual</option>
                </select>
            </div>-->
            
			<div class="frm-input"><input type="text" name="user"  placeholder="Username" class="frm-inp" required><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" name="pass"  placeholder="Password" class="frm-inp" required><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<a href="<?= base_url()?>" class="frm-back">Kembali<i class="fa fa-arrow-circle-left"></i></a>
			<!-- /.row -->
			<a href="<?= base_url()?>login/regis" class="a-link"><i class="fa fa-key"></i>Belum Ada Akun ? Register.</a>
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
</body>
</html>