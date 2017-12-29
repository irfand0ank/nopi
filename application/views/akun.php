<div class="">
    <!-- Content Header (Page header) -->
    <h3 style="margin-top:100px;"><i class="fa fa-info fa-fw"></i> <?php echo $title; ?></h3><hr> 

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <div class="box-body">
                        <?php
                            $artibut = array('class'=>'form-horizontal form-label-left');
                            echo form_open('akun/pass',$artibut);
                        ?>   
                        <div class="col-md-5 col-md-offset-3">
                            <h4 style="text-align:center;"><label class="label label-danger" >Mohon Ingat Baik-Baik Password Baru Anda</label></h4>
                            <?php if ( isset( $_SESSION['info'] ) ) { ?>

                            <div style="width:320px;background:#eee;border-left:5px solid #46b8da;padding:10px; margin-left:-15px; "> 
                                <h4> <?php echo $_SESSION['info'] ?></h4> 
                            </div>

                        <?php unset( $_SESSION['info'] ); } ?>
                            
                            
                            
                            <input type="hidden" value="<?php echo $this->session->userdata('si_aset_id'); ?>">
                            <div class="form-group">
                                <label class="">Password Lama</label>
                                <div class="">
                                    <input type='password' class='form-control'  name='passlama' autocomplete='off' >
                                </div>
                                <span id="pesan"></span>
                            </div>
                            <div class="form-group">
                                <label class="">Password Baru</label>
                                <div class=" ">
                                    <input type='password' class='form-control'  name='passbaru' autocomplete='off' >
                                </div>
                                <span id="pesan"></span>
                            </div>
                            
                            <div class="col-md-12" style="text-align:right;" >
                                <div class="form-group">
                                    <label class=""> </label>
                                    <div class="">
                                        <a href="<?php echo base_url().'/beranda'; ?>" class="btn btn-default btn-flat"><i class="fa fa-undo  "  aria-hidden="true"></i> Kembali </a>
                                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-plus  " aria-hidden="true"></i> Ubah </button>
                                    </div>
                                </div>  
                            </div>  
                        </div>
                                            
                        </form>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>

