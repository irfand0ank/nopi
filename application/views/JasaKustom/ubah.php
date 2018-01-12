<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-xs-6">
                <h4 class="box-title"><?= $title ?></h4>
            </div>
            <div class="col-xs-12">
                <div class="box-content">
                   <?php 
                        $artibut = array('class'=>'form-horizontal ' );
                        echo form_open('JasaKustom/edit',$artibut);
                    ?>
                    <input type="hidden" name="no" value="<?= $no ?>">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" readonly value="<?= $kategori ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> Harga Jasa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Jasa" required value="<?= $harga ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Waktu Pengerjaan (Hari)</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" name="waktu" placeholder="Waktu Pengerjaan (Hari)" required value="<?= $waktu ?>" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> Keterangan </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Keterangan" name="keterangan"><?= $keterangan ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group margin-bottom-0">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success btn-bordered waves-effect waves-light btn-sm">Ubah</button>
                                <a href="<?= base_url()?>jasa" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
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
