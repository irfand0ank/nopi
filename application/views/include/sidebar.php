
<?php 
    $user = $this->Mdl_query->GetWhereArr('users','no',$sys_no);
    if(is_null(@$user[0]['foto']))
    {
        $src =  base_url()."assets/images/user.png";
    }
    else
    {
        $src =  base_url()."assets/images/".$user[0]['foto'];
    }
?>
<div class="main-menu">
	<header class="header">
		<a href="#" class="logo"> SI-KONFEKSI</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar">
                <img src="<?= $src ?>" alt="">
                <span class="status online"></span>
            </a>
			<!-- /.name -->
			
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="<?= @$beranda_act ?>">
					<a class="waves-effect" href="<?= base_url()?>beranda"><i class="menu-icon fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a>
				</li>
                <!--<li class="<?= @$penjual_act ?>">
					<a class="waves-effect" href="<?= base_url()?>penjual"><i class="menu-icon fa fa-window-maximize" aria-hidden="true"></i><span>Toko Kain</span></a>
				</li>
                
                <li class="<?= @$penjahit_act ?>">
					<a class="waves-effect" href="<?= base_url()?>penjahit"><i class="menu-icon fa fa-certificate" aria-hidden="true"></i><span>Penjahit</span></a>
				</li>-->
                
                <?php 
                if(isset($sys_no))
                {
                    switch($sys_level)
                    {
                        case"1":
                    ?>
                    <li class="<?= @$jahit_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>kategori"><i class="menu-icon fa fa-bars"></i><span>Kategori Jahit </span></a>
                    </li>
                    <?php
                        break;

                        case"2":
                     ?>
                    <li class="<?= @$jahit_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>disperindag"><i class="menu-icon fa fa-code"></i><span>Data Penjahit</span></a>
                    </li>
                    <?php        
                        break;

                        case"3":
                    ?>
                    <li class="<?= @$orderan_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>order"><i class="menu-icon fa fa-code"></i><span>Orderan Jahit</span>&nbsp;<span class="badge notice-purple" id="order_count"></span></a>
                    </li>
                    <li class="<?= @$progress_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>order/progress"><i class="menu-icon fa fa-spinner"></i><span>On-Progress Orderan</span>&nbsp;<span class="badge notice-purple" id="ready_count"></span></a>
                    </li>
                    <li class="<?= @$riwayat_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>order/riwayat"><i class="menu-icon fa fa-hourglass"></i><span>Riwayat Orderan</span></a>
                    </li>
                    <li class="<?= @$cancel_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>order/tolak"><i class="menu-icon fa fa-ban"></i><span> Orderan Batal</span>&nbsp;<span class="badge notice-purple" id="cancel_count"></span></a>
                    </li>
                    
                    <li class="<?= @$profil_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>profil"><i class="menu-icon fa fa-user"></i><span>Profil Penjahit</span></a>
                    </li>
                    
                    <?php
                        break;

                        case"4":
                        break;

                        case"5":
                    ?>
                    <li class="<?= @$profil_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>profil"><i class="menu-icon fa fa-user"></i><span>Profil Anda</span> &nbsp;<span class="badge notice-yellow" id="profil_allert"><i class="fa fa-exclamation" aria-hidden="true"></i></span></a>
                    </li>
                    <?php
                        break;
                    }
                }
                else
                {
                ?>
                    <li class="<?= @$profil_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>profil"><i class="menu-icon fa fa-paw"></i><span> Penjahit</span></a>
                    </li>
                    <li class="<?= @$profil_act ?>">
                        <a class="waves-effect" href="<?= base_url()?>profil"><i class="menu-icon fa fa-shopping-bag"></i><span> Lapak Kain</span></a>
                    </li>
                    
                <?php
                }
                ?>
				
			</ul>
			
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">
            <?= $title ?>
        </h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<?php 
           
            if(isset($sys_no))
            {
                if($sys_level == '5')
                {
                    
               
        ?>  
		      <a  href='<?= base_url()?>member' class="ico-item  " style="color:#f4e214" data-toggle="tooltip" data-placement="bottom" title="Menjadi Member SI-Konfeksi">  <i class="fa fa-id-badge" aria-hidden="true"></i> </a>
            <?php 
                }
            ?>
                <a  href='javascript:;' class="ico-item  "
                   data-url='<?php echo base_url()."beranda/logout" ?>' 
                   data-toggle='modal' 
                   data-target='#logout'  
                   style='text-decoration: none;'> <?= $sys_nama ; ?> 
                    <i class=" fa fa-power-off"></i>
                </a>
        <?php
            }
            else
            {
        ?>
              <a  href='<?= base_url()?>login' class="ico-item  "> Masuk <i class="fa fa-sign-in" aria-hidden="true"></i> </a>
        <?php
            }
        ?>
        
		
	</div>
	<!-- /.pull-right -->
</div>
