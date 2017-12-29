<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-xs-6">
                <h4 class="box-title">Data Penjahit</h4>
            </div>
            <div class="col-xs-6" align="right" style="margin-bottom:15px;">
                <a href="<?= base_url() ?>disperindag/upload" class="btn btn-violet btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-upload" aria-hidden="true"></i>  Upload</a>
            </div>
            <div class="col-xs-12">
                <div class="box-content">
                   <?php 
                        $artibut = array('class'=>'form-horizontal ' );
                        echo form_open('disperindag/edit',$artibut);
                    ?>
                    <input type="hidden" name="no" value="<?= $no ?>">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $nama ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kec" placeholder="Kecamatan"  value="<?= $kec ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Kelurahan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kel" placeholder="Kelurahan"  value="<?= $kel ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat"  value="<?= $alamat ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Jenis Usaha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jenis" placeholder="Jenis Usaha"  value="<?= $jenis ?>">
                            </div>
                        </div>
                        
                        <div class="form-group margin-bottom-0">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success btn-bordered waves-effect waves-light btn-sm">Ubah</button>
                                <a href="<?= base_url()?>disperindag" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
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
