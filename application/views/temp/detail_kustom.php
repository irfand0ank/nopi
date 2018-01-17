<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title"><?= $title ?></h4>
					<!-- /.box-title -->
                    <div class="col-md-12 col-xs-12">
					<!-- /.box-title -->
					
					<!-- /.dropdown js__dropdown -->
                        
					<div class="col-lg-12 col-md-12 col-xs-12">
                                    <div class="box-content bordered primary">
                                        <h4 class="box-title"> Detail Pesanan</h4>
                                        <!-- /.box-title -->

                                        <!-- /.dropdown js__dropdown -->
                                        <table class="table no-margin">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-4">Penjahit</td>
                                                    <td>
                                                        <?= $profil[0]['nama'] ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>
                                                        <?= $kategori[0]['kategori'] ?>
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
                                                            <div class="col-md-3"  >
                                                                <h6>Ekstra Small : <?= $kustom[0]['xs'] ?></h6>
                                                            </div>

                                                            <div class="col-md-2 " >
                                                                <h6>Small : <?= $kustom[0]['s'] ?></h6>
                                                            </div>

                                                            <div class="col-md-2 " >
                                                                <h6>Medimum : <?= $kustom[0]['m'] ?></h6>
                                                            </div>

                                                            <div class="col-md-2" >
                                                                <h6>Large : <?= $kustom[0]['l'] ?></h6>
                                                            </div>

                                                            <div class="col-md-3 " >
                                                                <h6>Ekstra Large : <?= $kustom[0]['xl'] ?></h6>
                                                            </div>


                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr >
                                                    <td>Gambar (Contoh) Pesanan </td>
                                                    <td>
                                                        <img src="<?= base_url(); ?>/assets/images/<?= $kustom[0]['foto'] ?>" style="witdh:100px; height:100px;">
                                                        <!-- /.col-md-6 col-xs-12 -->


                                                    </td>
                                                </tr>
                                                <!--<tr >
                                                    <td>Punya Kain ? <sup>* abaikan jika tidak</sup>  </td>
                                                    <td>

                                                       <input type="checkbox" id="kain_sendiri"> 
                                                         /.col-md-6 col-xs-12 
                                                         Kain Sendiri
                                                        <h6>* Jika Belum Ada Kain,,pembeli harus membayar DP pembayaran (30%)</h6>
                                                        <h6>* Jika Ada Kain,,Batas pengiriman kain 3 hari setelah pemesanan </h6>
                                                    </td>
                                                </tr>-->

                                                <tr >
                                                    <td>Catatan Pesanan </td>
                                                    <td>

                                                      <?= $kustom[0]['catatan'] ?>
                                                        <!-- /.col-md-6 col-xs-12 -->
                                                    </td>
                                                </tr>


                                                <tr >
                                                    <td>Total Harga </td>
                                                    <td>

                                                       <?= rupiah($kustom[0]['bayar']) ?>
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

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-content -->
                                </div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 col-xs-12 -->
					
                    
                    
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