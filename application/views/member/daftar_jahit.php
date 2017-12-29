<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-xs-6">
                <h4 class="box-title">Lengkapi Data Anda</h4>
            </div>
            <div class="col-xs-6" align="right" style="margin-bottom:15px;">
            </div>
            <div class="col-xs-12">
                <div class="box-content">
                   <?php 
                        $artibut = array('class'=>'form-horizontal ' );
                        echo form_open('member/regis_jahit',$artibut);
                    ?>
                    <input type="hidden" name="jahit_id" value="<?= $jahit_id ?>">
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
                                <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm">Selesai</button>
                                <a href="<?= base_url()?>member/penjahit" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
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
