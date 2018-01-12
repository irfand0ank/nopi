<?php 
    $sys_no     = $this->session->userdata('sys_no');
?>
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
            <div class="col-xs-6">
                <h4 class="box-title"></h4>    
            </div>
			 <div class="col-xs-12">
                 <div class="col-md-3 col-xs-12">
                    <div class="box-content bordered  margin-bottom-20">
                        <div class="profile-avatar">
                            <?php 
                                if(!is_null(@$profil[0]['foto']))
                                {
                             ?>
                                <img src="<?= base_url(); ?>/assets/images/<?= $profil[0]['foto'] ?>" alt="">
                            <?php
                                }
                                else
                                {
                            ?>
                                <img src="<?= base_url(); ?>/assets/images/blank.png" alt="">
                            <?php

                                }
                            ?>

                            <h3   class='btn btn-block btn-friend'> </h3>
                            <h3><strong>Betty Simmons</strong></h3>
                            <h4>Owner at Our Company, Inc.</h4>
                            <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <!-- .profile-avatar -->
                        <table class="table table-hover no-margin">
                            <tbody>
                                <tr>
                                    <td>User Rating</td>
                                    <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></td>
                                </tr>
                                <tr>
                                    <td>Member Since</td>
                                    <td>Jan 07, 2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-content bordered -->


                    <!-- /.box-content -->
                </div>  
                <div class="col-md-9 col-xs-12">
                    <div class="col-md-12">
                        <div class="box-content bordered primary" >
                            <h4 class="box-title">Detail Jasa</h4>
                            <?php
                                $artibut = array('class'=>'form-horizontal form-label-left' );
                                echo form_open_multipart('profil/update_photo',$artibut);
                            ?>
                            <table class="table no-margin">
                                <tbody>
                                    <tr>
                                        <td>Kategori</td>
                                        <td><?= $result[0]['kode_kategori'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pengerjaan </td>
                                        <td><?= $result[0]['waktu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Pesanan </td>
                                        <td>
                                            <select class="form-control input-sm" name="jenis_pesanan"  required >
                                                <option value="">--Jenis Pesanan--</option>
                                                <option value="1">Per Pieces</option>
                                                <option value="2">Grosir</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>Jenis Pesanan </td>
                                        <td>
                                            <select class="form-control input-sm" name="ukuran" id="ukuran" required>
                                                <option value="">--Pilih Ukuran--</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>Contoh Pesanan </td>
                                        <td>
                                            
                                            <input type="file" name="foto1" id="input-file-now"  class="dropify" required/>
                                            <!-- /.col-md-6 col-xs-12 -->
                                             
                                            
                                        </td>
                                    </tr>
                                     <tr >
                                        <td> </td>
                                        <td>
                                            <button type="submit" class="btn btn-info btn-waves"> Tambah</button>
                                            <!-- /.col-md-6 col-xs-12 -->
                                             
                                            
                                        </td>
                                    </tr>
                                    
                                    <?= form_close() ?>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="box-content bordered primary" >
                            <h4 class="box-title">Detail Jasa</h4>
                            <table class="table table-hover no-margin">
                                <tbody>
                                    <tr>
                                        <td>Kategori</td>
                                        <td><?= $result[0]['kode_kategori'] ?></td>
                                    </tr>

                                    <tr>    
                                        <td>Harga</td>
                                        <td>
                                            <?= rupiah($result[0]['harga']) ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Waktu Pengerjaan </td>
                                        <td><?= $result[0]['waktu'] ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>  
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
			</div>
			<!-- /.col-xs-12 -->
		</div>