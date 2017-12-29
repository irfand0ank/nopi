<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			
                <div class="col-xs-6">
                    <h4 class="box-title">Data Penjahit</h4>    
                </div>
                <div class="col-xs-6" align="right" style="margin-bottom:15px;">
                    <a href="<?= base_url() ?>disperindag/tambah" class="btn btn-primary btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
                    <a href="#" class="btn btn-success btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-print" aria-hidden="true"></i>  Cetak</a>
                    <a href="<?= base_url() ?>disperindag/upload" class="btn btn-violet btn-bordered waves-effect waves-light btn-sm"><i class="fa fa-upload" aria-hidden="true"></i>  Upload</a>
                </div>
            <div class="col-xs-12">
                <div class="box-content">
					<!-- /.box-title -->
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
							 <tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kecamatan</th>
								<th>Kelurahan</th>
								<th>Alamat</th>
								<th>Jenis Usaha</th>
								<th>Aksi</th>
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
                                  <td><?php echo $no ?></td>
                                  <td><?php echo $info->nama ?></td>
                                  <td><?php echo $info->kecamatan ?></td>
                                  <td><?php echo $info->kelurahan ?></td>
                                  <td><?php echo $info->alamat ?></td>
                                  <td><?php echo $info->jenis_usaha ?></td>
                                                  
                                  <td  style="width:10%;">
                                      <a href="<?php echo base_url(); ?>disperindag/ubah/<?php echo $info->no ?>" class="btn btn-primary btn-xs " > <i class="fa fa-edit fa-sm"></i></a> 
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
		

	