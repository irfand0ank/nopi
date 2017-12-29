<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			
                <div class="col-xs-6">
                    <h4 class="box-title">Data Penjahit</h4>    
                </div>
                <div class="col-xs-6" align="right" style="margin-bottom:15px;">
                    <a href="<?= base_url() ?>disperindag/tambah" class="btn btn-primary btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
                </div>
            <div class="col-xs-12">
                <div class="box-content card white">
					<h4 class="box-title">Upload Data</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<?php
                            $artibut = array('class'=>'form-horizontal');
                            echo form_open_multipart('disperindag/do_upload',$artibut);
                        ?> 
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="file" name='upload'  class="form-control" required >
								</div>
							</div>
							
							<div class="form-group margin-bottom-0">
								<div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm">Upload</button>
                                <a href="<?= base_url()?>disperindag" class="btn btn-default btn-bordered waves-effect waves-light btn-sm">Batal</a>
                            </div>
							</div>
						<?= form_close() ?>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			
			
			<!-- /.col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->		
		
	
	