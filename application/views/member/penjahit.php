<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-xs-6">
                <h4 class="box-title">Member Penjahit</h4>
            </div>
            
            <div class="col-md-12">
                
            </div>
            <div class="col-xs-12">
                   <?php 
                        $artibut = array('class'=>'form-horizontal ' );
                        echo form_open('member/cek_penjahit',$artibut);
                    ?>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-5 ">
                            <div class="box-content bordered info js__card">
                                <h4 class="box-title with-control">
                                    Cek Nama Anda
                                </h4>
                                <!-- /.box-title -->
                                <div class="js__card_content">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="cek_nama" id="cek_nama" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-info btn-bordered waves-effect waves-light btn-sm btn-block" > Cek </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-content -->
                        </div>
                    
                    </div>
                    <?= form_close() ?>
                    
                            



                </div>
                <!-- /.box-content -->
            
            <div class="col-xs-12">
                <div class="box-content">
                   
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
							 <tr >
								<th style="text-align:center" >No</th>
								<th style="text-align:center" >Nama</th>
								<th style="text-align:center" >Kecamatan</th>
								<th style="text-align:center" >Kelurahan</th>
								<th style="text-align:center" >Alamat</th>
								<th style="text-align:center" >Jenis Usaha</th>
								<th style="text-align:center" >Aksi</th>
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
                                      <a href="<?php echo base_url(); ?>member/daftar_jahit/<?php echo $info->no ?>" class="btn btn-violet btn-xs waves-effect waves-light " > <i class="fa fa-share  fa-sm"></i> Lanjut</a> 

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
                <!-- /.box-content -->
            
            
            
            
            </div>
            <!-- /.col-xs-12 -->


            <!-- /.col-xs-12 -->
        </div>
        <!-- /.row small-spacing -->
        
        <script>
            
        </script>
        