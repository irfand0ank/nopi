<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			
                <div class="col-xs-6">
                    <h4 class="box-title"><?= $title ?></h4>    
                </div>
                

            <div class="col-xs-12">
                <div class="box-content">
					<!-- /.box-title -->
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
							 <tr>
								<th style="text-align:center">No</th>
								<th style="text-align:center">Pemesan</th>
								<th style="text-align:center">Jasa</th>
								<th style="text-align:center">Jenis</th>
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
                                    $pemesan    = $this->Mdl_query->GetPemesan($info->id_pelanggan);
                                    $jasa       = $this->Mdl_query->GetJasa($info->id_jasa);
                              ?>
                              <tr>
                                  <td><?= $no ?></td>
                                  <td><?= $pemesan[0]['nama'] ?></td>
                                  <td><?= $jasa[0]['kategori'] ?></td>
                                  <td><?= $info->jenis_pesanan ?></td>
                                  <td><?= $info->catatan ?></td>
                                  <td  style="width:10%;">
                                      <!--<a href="<?= base_url(); ?>disperindag/ubah/<?= $info->no ?>" class="btn btn-primary btn-xs " > <i class="fa fa-edit fa-sm"></i></a> -->
                                      <?php
                                        if(is_null($info->setuju_jahit))
                                        {
                                      ?>
                                      <a  href='javascript:;' class='btn btn-success btn-xs '
                                         data-url='<?= base_url()."".$url_modul ?>' 
                                         data-no='<?= $info->no ?>' 
                                         data-toggle='modal' 
                                         data-target='#terima'  
                                         style='text-decoration: none;'><i class='fa fa-check'></i>  
                                      </a>
                                      <a  href='javascript:;' class='btn btn-danger btn-xs '
                                         data-url='<?= base_url()."".$url_modul ?>' 
                                         data-no='<?= $info->no ?>' 
                                         data-toggle='modal' 
                                         data-target='#tolak'  
                                         style='text-decoration: none;'><i class='fa fa-ban'></i>  
                                      </a>
                                      <?php 
                                        }
                                        elseif($info->setuju_jahit == 'W')
                                        {
                                      ?>
                                      <a  href='#' class='btn btn-info btn-xs ' style='text-decoration: none;'><i class='fa fa-spinner'></i> Tunggu 
                                      </a>
                                    <?php  
                                        }
                                      ?>

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
		

	