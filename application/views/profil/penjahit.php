
<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-md-3 col-xs-12">
				<div class="box-content bordered  margin-bottom-20">
					<div class="profile-avatar">
                        <?php 
                            if(!is_null(@$profil[0]['foto']))
                            {
                         ?>
                            <img src="<?= base_url(); ?>/assets/images/<?= $profil[0]['foto'] ?>" alt="">
                        <?php
                            }
                            else
                            {
                        ?>
                            <img src="<?= base_url(); ?>/assets/images/blank.png" alt="">
                        <?php
                                
                            }
                        ?>
						
                        <a  href='javascript:;' class='btn btn-block btn-friend'
                           data-no='<?= $sys_no ?>' 
                           data-gambar='<?= @$profil[0]['foto'] ?>' 
                           data-toggle='modal' 
                           data-target='#update_photo'  
                           style='text-decoration: none;'>
                            <i class="fa fa-camera"></i> Ganti Foto
                        </a>
						<h3><strong>Betty Simmons</strong></h3>
						<h4>Owner at Our Company, Inc.</h4>
						<p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<!-- .profile-avatar -->
					<table class="table table-hover no-margin">
						<tbody>
							<tr>
								<td>Status</td>
								<td><span class="notice notice-danger">Active</span></td>
							</tr>
							<tr>
								<td>User Rating</td>
								<td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></td>
							</tr>
							<tr>
								<td>Member Since</td>
								<td>Jan 07, 2014</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-content bordered -->

				
				<!-- /.box-content -->
			</div>
            <div class="col-md-9 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>About</h4>
							<!-- /.box-title -->
							<div class="card-content">
                                
                                <input type="hidden" name="jahit_id" value="<?= $sys_no ?>">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>First Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">Betty</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Last Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">Simmons</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>User Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">Betty</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Email:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">youremail@gmail.com</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
                                    <div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Phone:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">+1-234-5678</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Jenis Rek</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">
                                                <a href="#" class="inline-member" data-name="jenis_rek" data-type="text" data-url="<?= base_url() ?>profil/Updateinline" data-pk="<?= $info[0]['no'] ?>" data-title="Enter name"><?= $info[0]['jenis_rek'] ?></a>
                                            </div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Nomor Rekening</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">
                                                <a href="#" class="inline-member" data-name="nomor_rek" data-type="text" data-url="<?= base_url() ?>profil/UpdateInline" data-pk="<?= $info[0]['no'] ?>" data-title="Enter name"><?= $info[0]['nomor_rek'] ?></a>
                                                
                                            </div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-5"><label>Jasa Jahit:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">
                                                <a href="#"  id="inline-jasa" data-name="jasa" data-type="checklist"   data-pk="<?= $info[0]['no'] ?>"  data-url="<?= base_url() ?>profil/Updatechecked" data-value="<?= $info[0]['jasa'] ?>"  data-title="Select fruits"></a>
                                                <!--<a href="#" id="inline-jasa" data-type="checklist" data-pk="<?= $info[0]['no'] ?>" data-url="<?= base_url() ?>profil/updatecheked" data-value="<?= $info[0]['jasa'] ?>"  data-title="Select options"></a>-->
                                            
                                            </div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div> 
                    <!-- /.col-md-12 -->
                    </div>
				<!-- /.row -->
			</div>
			<!-- /.col-md-9 col-xs-12 -->
		</div>
        <!-- /.row small-spacing -->
