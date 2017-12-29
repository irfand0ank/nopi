<div class="modal fade" id="modaltest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Konfirmasi Hapus</h4>
			</div>
			<div class="modal-body">
				<h4>Apakah Anda Yakin Menghapus Data Ini?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                <a href="javascript:;" class="btn btn-danger" id="hapus-true"><i class="fa fa-trash"></i> Konfirmasi</a>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="terima">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">  Terima Pesanan </h4>
            </div>
            <?php
                $artibut = array('class'=>'form-horizontal form-label-left' );
                echo form_open('order/terima',$artibut);
            ?>
            <div class="modal-body">      
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Waktu Pengerjaan (Hari)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="waktu" placeholder="Hari" required>
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

<div class="modal fade" id="tolak">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">  Tolak Pesanan </h4>
            </div>
            <div class="modal-body">
				<h4>Apakah Anda Yakin Ingin Menolak Pesanan Ini?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                <a href="javascript:;" class="btn btn-danger" id="hapus-true"><i class="fa fa-ban"></i> Konfirmasi</a>
			</div>
        </div>
    </div>
</div>
