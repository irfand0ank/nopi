<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-xs-6">
                <h4 class="box-title">Data Penjahit</h4>
            </div>
            <div class="col-xs-6" align="right" style="margin-bottom:15px;">
                <a href="<?= base_url() ?>disperindag/tambah" class="btn btn-violet btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-upload" aria-hidden="true"></i>  Upload</a>
            </div>
            <div class="col-xs-12">
                <div class="box-content">
                   <?php 
                        $artibut = array('class'=>'form-horizontal ' );
                        echo form_open('member/regis_penjual',$artibut);
                    ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kec" placeholder="Kecamatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Kelurahan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kel" placeholder="Kelurahan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Jenis Rek</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jenis_rek" placeholder="Bri,Bni atau lain-lain" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nomor Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_rek" placeholder="Nomor Rekening" required>
                            </div>
                        </div>
                        
                        <div class="form-group margin-bottom-0">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm">Tambah</button>
                                <a href="<?= base_url()?>member" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
                            </div>
                        </div>
                   <?= form_close() ?>



                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xs-12 -->


            <!-- /.col-xs-12 -->
        </div>
        <!-- /.row small-spacing -->
