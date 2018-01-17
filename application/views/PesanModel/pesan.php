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
                 
                <div class="col-lg-12 col-md-9 col-xs-12">
                    <div class="col-md-12">
                        <div class="box-content bordered primary" >
                            <h4 class="box-title">Detail Jasa</h4>
                            <?php
                                $artibut = array('class'=>'form-horizontal form-label-left' );
                                echo form_open_multipart('pesanmodel/temp_model',$artibut);
                            ?>
                            <input type="hidden" value="<?= $result[0]['harga']?>" name="harga" id="harga_model" >
                            <input type="hidden" value="<?= $result[0]['no']?>" name="id_model" id="id_model"  >
                            <table class="table no-margin">
                                <tbody>
                                    <tr>
                                        <td class="col-md-4">Penjahit</td>
                                        <td>
                                            <?= $profil[0]['nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-4">Model Jahit</td>
                                        <td>
                                           <img src="<?= base_url(); ?>/assets/images/<?= $result[0]['foto'] ?>" alt=""  style="height:100px; width:100px;">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td> *Estimasi Waktu Pengerjaan </td>
                                        <td>
                                            <?= $result[0]['waktu'] ?> Hari
                                            <h6>* Waktu Pengerjaan bisa lebih dari waktu estimasi sesuai dengan jumlah orderan</h6>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>Harga Per Satuan (Termasuk kain) </td>
                                        <td>
                                           <?= rupiah($result[0]['harga']) ?>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>Jumlah Pesanan </td>
                                        <td>
                                            <div style="margin-left:-15px;">
                                                <div class="col-md-7"  >
                                                    <input type="number" min="0" class="form-control input-sm ukuran_model " name="ekstra_small" placeholder="ekstra small (XS)" id="xs" >
                                                </div>
                                                <div class="col-md-5 ">
                                                    Ekstra Small (XS)
                                                </div>
                                                <div class="col-md-7 " style="margin-top:5px">
                                                    <input type="number" min="0" class="form-control input-sm ukuran_model " name="small" id="s"  placeholder=" small (S)" >
                                                </div>
                                                <div class="col-md-5 " style="margin-top:5px">
                                                     Small (S)
                                                </div>
                                                <div class="col-md-7 " style="margin-top:5px">
                                                    <input type="number" min="0" class="form-control input-sm ukuran_model" name="medium" id="m" placeholder=" Medium (M)" >
                                                </div>
                                                <div class="col-md-5 " style="margin-top:5px">
                                                     Medimum (M)
                                                </div>
                                                <div class="col-md-7" style="margin-top:5px">
                                                    <input type="number" min="0" class="form-control input-sm ukuran_model" name="large" id="l" placeholder=" Large (L)" >
                                                </div>
                                                <div class="col-md-5 " style="margin-top:5px">
                                                     Large (L)
                                                </div>
                                                <div class="col-md-7 " style="margin-top:5px">
                                                    <input type="number" min="0" class="form-control input-sm ukuran_model" name="esktra_larga" id="xl" placeholder=" Ekstra Large (XL)" >
                                                </div>
                                                <div class="col-md-5 " style="margin-top:5px">
                                                    Ekstra Large (XL)
                                                </div>
                                                
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr >
                                        <td>Punya Kain ? <sup>* abaikan jika tidak</sup>  </td>
                                        <td>
                                            
                                           <input type="checkbox" id="kain_model"> 
                                            <!-- /.col-md-6 col-xs-12 -->
                                             Kain Sendiri
                                            <h6>* Jika Belum Ada Kain,,pembeli harus membayar DP pembayaran (30%)</h6>
                                            <h6>* Jika Ada Kain,,Batas pengiriman kain 3 hari setelah pemesanan </h6>
                                        </td>
                                    </tr>
                                    
                                    <tr >
                                        <td>Catatan Pesanan </td>
                                        <td>
                                            
                                           <textarea class="form-control" name="catatan" placeholder="Catatan Pesanan Anda"></textarea>
                                            <!-- /.col-md-6 col-xs-12 -->
                                             
                                            
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr >
                                        <td>Total Harga </td>
                                        <td>
                                            
                                           <input type="text"  class="form-control  " name="bayar" id="bayar_model" placeholder=" Total Pembayaran" readonly>
                                            <!-- /.col-md-6 col-xs-12 -->
                                             
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr >
                                        <td> </td>
                                        <td>
                                            <h6>* Waktu Fitting Orderan Akan di Informasikan Penjahit</h6>
                                            
                                            <!-- /.col-md-6 col-xs-12 -->
                                             
                                            
                                        </td>
                                    </tr>
                                     <tr >
                                        <td> </td>
                                        <td>
                                            <a href="<?= base_url()?>pesanmodel" class="btn btn-default btn-bordered waves-effect waves-light btn-sm"> kembali</a>
                                            <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm"> Tambah</button>
                                        </td>
                                    </tr>
                                    
                                    <?= form_close() ?>
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