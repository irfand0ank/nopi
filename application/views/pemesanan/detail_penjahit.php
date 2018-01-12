<?php 
    $sys_no     = $this->session->userdata('sys_no');
?>
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
            <div class="col-xs-6">
                    <h4 class="box-title"><?= $title ?></h4>    
                </div>
			<div class="col-xs-12">
				<div class="box-content">
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
					
                        <?php 
                            foreach($penjahit as $list)
                            {
                        ?>
                        <div class="col-lg-4 col-md-6 col-xs-12"  >
                            <div class="box-content bordered primary" >
                                
                                <table class="table table-hover no-margin">
                                    <tbody>
                                        <tr>
                                            <td>Jasa</td>
                                            <td><?= $list->kode_kategori ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>
                                                <?= rupiah($list->harga) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Pengerjaan </td>
                                            <td><?= $list->waktu ?></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan </td>
                                            <td><?= $list->keterangan ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="text-align:center">
                                                       
                                                <a href="<?= base_url()?>pemesanan/pesan_jahit/<?= $list->no ?>" class="btn btn-info btn-xs" ><i class="fa fa-cart-arrow-down"></i> Pesan Jahit </a>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         <br/>
                        
                    </div>
                        <?php
                            }
                        ?>
                        
                        
					
                 <div class="col-lg-12">
                        <nav class='text-center'>
                           <?= $this->pagination->create_links() ?>
                        </nav>


                        <!-- /.box-content -->
                    </div>

				</div>
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