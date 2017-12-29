<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin:15px 0 10px 0;">
        <h1>
            <?php echo $title; ?>
                
            <div class="pull-right">
                <a href="<?= site_url()?>beranda/cetak_<?= $jenis ?>" class='btn btn-success' target="_blank"> <i class="fa fa-print " aria-hidden="true" ></i> Cetak </a>
            </div>
            
            
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class='table-responsive'>
                           <table id="dt" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="text-center" style="font-weight:bold;">
                                            <td >No</td>
                                            <td >Tambang</td>
                                            <td >Jumlah Tambang</td>
                                            <td >Jumlah Investor</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php 
                                        if(isset($result))
                                        {
                                            $no = 1;
                                            
                                            foreach($result->data as $json)
                                            {
                                                
                                                $jumlah = $this->Mdl_query->GetJumlah2($json->kd_komoditi);
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $json->nm_komoditi ?></td>
                                            <td><?= $json->jumlah ?></td>
                                            <td><?= $jumlah ?></td>
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
