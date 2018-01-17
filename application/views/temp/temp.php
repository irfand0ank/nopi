<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Pesanan Anda</h4>
					<!-- /.box-title -->
					<div class="table-responsive">
                    
                        <table class="table table-bordered" style="text-align:center;">
                            <tr>
                                <th colspan="7" style="text-align:center; text-transform:uppercase">Jahit Kustom</th>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td>No</td>
                                <td>Kategori</td>
                                <td>Penjahit</td>
                                <td>Harga</td>
                                <td>Waktu Kerja</td>
                                <td>Jumlah Pesanan</td>
                                <td>Detail</td>
                            </tr>
                            <?php 
                            $no = 1;
                                foreach($kustom as $temp1)
                                {
                                $kustom     = $this->Mdl_query->GetWhereArr("jasa_kustom","no",$temp1->id_kustom);
                                $jumlah     = $temp1->xs + $temp1->s + $temp1->m + $temp1->l + $temp1->xl;
                                
                                $kategori   = $this->Mdl_query->GetWhereArr("kategori","no",$kustom[0]['kode_kategori']);
                                $penjahit   = $this->Mdl_query->GetWhereArr("users","no",$kustom[0]['id_penjahit']);

                            ?>
                            <tr>
                                <td><?= $no ?> </td>
                                <td><?= $kategori[0]['kategori'] ?> </td>
                                <td><?= $penjahit[0]['nama'] ?> </td>
                                <td><?= rupiah($temp1->bayar) ?> </td>
                                <td><?= $kustom[0]['waktu'] ?> Hari</td>
                                <td><?= $jumlah ?> </td>
                                <td>
                                    <a class="btn btn-violet btn-bordered btn-xs" href="<?= base_url() ?>temp/detail_kustom/<?= $temp1->no ?>"> Detail </a>
                                    <a class="btn btn-danger btn-bordered btn-xs" href="<?= base_url() ?>temp/detail_kustom/<?= $temp1->no ?>"> Hapus </a>
                                    
                                </td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                            <tr>
                                <th colspan="7"  colspan="7" style="text-align:center; text-transform:uppercase">Jahit Model</th>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td>No</td>
                                <td>Model Jahit</td>
                                <td>Penjahit</td>
                                <td>Harga</td>
                                <td>Waktu Kerja</td>
                                <td>Jumlah Pesanan</td>
                                <td>Detail</td>
                            </tr>
                            <?php 
                            $no = 1;
                                foreach($model as $temp2)
                                {
                                $model      = $this->Mdl_query->GetWhereArr("jasa_model","no",$temp2->id_model);
                                $jumlah     = $temp2->xs + $temp2->s + $temp2->m + $temp2->l + $temp2->xl;
                                
                                $penjahit   = $this->Mdl_query->GetWhereArr("users","no",$model[0]['id_penjahit']);

                            ?>
                            <tr>
                                <td><?= $no ?> </td>
                                <td><?= $model[0]['nama'] ?> </td>
                                <td><?= $penjahit[0]['nama'] ?> </td>
                                <td><?= rupiah($temp2->bayar) ?> </td>
                                <td><?= $model[0]['waktu'] ?> Hari</td>
                                <td><?= $jumlah ?> </td>
                                <td>
                                    <a class="btn btn-info btn-bordered btn-xs" href="<?= base_url() ?>temp/detail_model/<?= $temp2->no ?>"> Detail </a>
                                    <a class="btn btn-danger btn-bordered btn-xs" href="<?= base_url() ?>temp/detail_kustom/<?= $temp1->no ?>"> Hapus </a>
                                </td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                            <tr>
                                <th colspan="7"  colspan="7" style="text-align:center; text-transform:uppercase">Pesan Kain</th>
                            </tr>
                             <tr>
                                <td>No</td>
                                <td>Kategori</td>
                                <td>Penjahit</td>
                                <td>Harga</td>
                                <td>Waktu Kerja</td>
                                <td>Jumlah Pesanan</td>
                                <td>Detail</td>
                            </tr>
                        </table>
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