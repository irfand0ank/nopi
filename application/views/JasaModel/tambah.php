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
                        echo form_open_multipart('JasaModel/simpan',$artibut);
                    ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Foto Model Jahit</label>
                            <div class="col-sm-8">
                                 <input type="file" name="foto" id="input-file-now"  class="dropify" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"> Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama"  placeholder="Nama Jasa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"> Harga Jasa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Jasa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"> Harga Jahit  (tidak termasuk kain)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="harga_jahit" id="harga_jahit" placeholder="Harga Jahit  (tidak termasuk kain)" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Waktu Pengerjaan (Hari)</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" class="form-control" name="waktu" placeholder="Waktu Pengerjaan (Hari)" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"> Keterangan </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" placeholder="Keterangan" name="keterangan"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group margin-bottom-0">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm">Tambah</button>
                                <a href="<?= base_url()?>JasaModel" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
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
