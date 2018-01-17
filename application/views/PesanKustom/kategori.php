<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">List Kategori</h4>
					<!-- /.box-title -->
                    <div class="row small-spacing">
                       <?php 
                            foreach($result as $info)
                            {
                            ?>
                            <div class="col-lg-2 col-md-6 col-sm-12" style="padding:3px;">
                                <a href="<?= base_url()?>PesanKustom/penjahit/<?= $info->no ?>" class="btn btn-default btn-bordered btn-block">
                                    <i class="ico  fa fa-microchip fa-rotate-90 fa-5x"></i>     
                                    <h4 class="counter" style="text-transform:capitalize"> <?= $info->kategori ?></h4> 
                                </a>
                            </div>
                            <?php 
                            }
                            ?>
                            <!-- /.box-content -->
                        
                    </div>
				</div>
				<!-- /.box-content -->
			</div>
			
		</div>
		<!-- /.row -->		
		
       
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->