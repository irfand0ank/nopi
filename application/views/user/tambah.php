<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah User 
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php
                            $artibut = array('class'=>'form-horizontal form-label-left');
                            echo form_open('user/insert',$artibut);
                        ?>   
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Username</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" name='user'  class="form-control" placeholder="Username">
                                </div>
                                <span id="pesan"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" name='nama'  class="form-control" placeholder=" Nama " >
                                </div>
                            </div> 
                            <div class="form-group">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-3">Level</label>
                                <div  class="col-md-8 col-sm-8 col-xs-8">
                                    <select name="level" class="form-control" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Operator</option>
                                                       
                                    </select>
                                </div>
                            </div> 
                            <div class="col-md-11" style="text-align:right;" >
                                <div class="form-group">
                                    <label class=""> </label>
                                    <div class="">
                                        <a href="<?php echo base_url().'user'; ?>" class="btn btn-default btn-flat"><i class="fa fa-undo  "  aria-hidden="true"></i> Kembali </a>
                                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-plus  " aria-hidden="true"></i> Simpan </button>
                                    </div>
                                </div>  
                            </div>                  
                        <?php echo form_close(); ?>
                    </div>
                   <!-- /.box body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

