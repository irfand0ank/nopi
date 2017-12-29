<div class="modal fade" id="update_photo">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Ganti Foto </h4>
            </div>
            <?php
                $artibut = array('class'=>'form-horizontal form-label-left' );
                echo form_open_multipart('profil/update_photo',$artibut);
            ?>
            <div class="modal-body">      
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Foto</label>
                    <div class="col-sm-7">
                        <input name='foto' class="form-control col-md-12 up1" type="file" id="up1" required >
                        <br>
                        <img id="priv1" src="" style="width:150px; height:150px; margin-top:15px;" alt="your image" />
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-success" name="simpan" > <i class="fa fa-check"></i>Confirm</button>
               <!-- <a href="javascript:;" class="btn btn-danger" id="hapus-true"><i class="fa fa-check"></i> Confirm</a>-->
            </div>
          <?= form_close()?>
        </div>
    </div>
</div>
