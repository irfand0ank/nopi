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
                                <div class="profile-avatar">
                                    <?php 
                                        if(!is_null(@$list->foto))
                                        {
                                     ?>
                                        <img src="<?= base_url(); ?>/assets/images/<?= $list->foto ?>" alt=""  style="height:100px; width:100px;">
                                    <?php
                                        }
                                        else
                                        {
                                    ?>
                                        <img src="<?= base_url(); ?>/assets/images/blank.png" alt=""  style="height:100px;">
                                    <?php

                                        }
                                    ?>
                                    
                                    <h3><strong><?= $list->nama ?></strong></h3>
                                     <p>
                                     
                                        
                                    </p>
                                </div>
                                <table class="table  no-margin">
                                    <tbody>
                                        <!--<tr>
                                            <td>Status</td>
                                            <td><span class="notice notice-danger">Active</span></td>
                                        </tr>-->
                                        <tr>
                                            <td>Harga (Termasuk Kain)</td>
                                            <td>
                                                <b><?= rupiah($list->harga) ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Pengerjaan</td>
                                            <td>
                                                <?= $list->waktu_kerja ?> Hari
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>User Rating</td>
                                            <td>
                                                <?= rating($list->nilai_member) ?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Bergabung </td>
                                            <td><?= tgl_indo($list->waktu) ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center">
                                                <?php 
                                                    if(isset($sys_no))
                                                    {
                                                ?>          
                                                        <a href="<?= base_url()?>pesankustom/detail_pesan/<?= $list->no_kustom ?>" class="btn btn-info btn-bordered btn-xs btn-block" ><i class="fa fa-american-sign-language-interpreting"></i> Pesan Jahit  </a>
                                                        
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>
                                                        <a href="#" class="btn btn-info  btn-bordered btn-xs btn-block" data-toggle='modal'data-target='#belum_login'    style='text-decoration: none;'><i class="fa fa-cart-arrow-down"></i> Pesan Jahit </a>
                                                <?php
                                                    }
                                                ?>
                                                
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