<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			
                <div class="col-xs-6">
                    <h4 class="box-title">
                        <a href="<?= base_url() ?>JasaModel/tambah" class="btn btn-primary btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah  </a>
                    </h4>   
                </div>
                

            <div class="col-xs-12">
                <div class="box-content">
					<!-- /.box-title -->
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
							 <tr>
								<th style="text-align:center">No</th>
								<th style="text-align:center">Nama</th>
								<th style="text-align:center">Foto</th>
								<th style="text-align:center">Harga</th>
								<th style="text-align:center">Harga Jahit</th>
								<th style="text-align:center">Waktu Kerja</th>
								<th style="text-align:center">Catatan</th>
								<th style="text-align:center">Aksi</th>
							</tr>
						  </thead>
						  <tbody class="text-center">
                            <?php 
                            if(isset($result))
                            {
                                $no = 1;
                                foreach($result as $info)
                                {
                              ?>
                              <tr>
                                  <td><?= $no ?></td>
                                  <td><?= $info->nama ?></td>
                                  <td>
                                      <img src="<?= base_url()."assets/images/".$info->foto; ?>" alt="" width="150px" height="150px">
                                  </td>
                                  <td><?= rupiah($info->harga) ?></td>
                                  <td><?= rupiah($info->harga_jahit) ?></td>
                                  <td><?= $info->waktu ?> Hari</td>
                                  <td><?= $info->keterangan ?></td>
                                  <td  style="width:10%;">
                                      <a href="<?= base_url(); ?>JasaModel/ubah/<?= $info->no ?>" class="btn btn-primary btn-xs " > <i class="fa fa-edit fa-sm"></i></a> 
                                      <a  href='javascript:;' class='btn btn-danger btn-xs '
                                         data-url='<?php echo base_url()."".$url_modul ?>' 
                                         data-no='<?php echo $info->no ?>' 
                                         data-toggle='modal' 
                                         data-target='#modaltest'  
                                         style='text-decoration: none;'><i class='fa fa-trash'></i>  
                                      </a>

                                      

                                  </td>
                              </tr>

                              <?php 
                                  $no++;   
                                } 
                            }else{

                            }

                              ?>
                            </tbody>
					   </table>
                    </div>
					
				</div>
			</div>
		</div>
		

	