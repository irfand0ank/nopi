<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin:15px 0 10px 0;">
        <h1>
            <?php echo $title; ?>

            <div class="pull-right">
                <a href="<?= site_url()?>user/tambah" class='btn btn-primary'>  <i class="fa fa-plus " aria-hidden="true"></i> Tambah </a>
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
                            <table id="dt" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center" style="font-weight:bold;">
                                            <td >No </td>
                                            <td >Username </td>
                                            <td >Nama </td>
                                            <td >Level</td>
                                            <td >Aksi</td>
                                            
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
                                                <td><?php echo $info->user ?></td>
                                                <td><?php echo $info->nama ?></td>
                                                <td>
                                                    <?php
                                                        if($info->level == '1')
                                                        {
                                                            echo "Admin";
                                                        }
                                                        else
                                                        {
                                                            echo "Operator";
                                                        }
                                                    ?>
                                                </td>
                                                <td  style="width:10%;">
                                                    <a href="<?php echo base_url(); ?>user/ubah/<?php echo $info->no ?>" class="btn btn-primary btn-sm " > <i class="fa fa-edit fa-sm"></i></a> 
                                                    <a  href='javascript:;' class='btn btn-danger btn-sm '
                                                       data-url='<?php echo base_url(); ?>' 
                                                       data-no='<?php echo $info->no ?>' 
                                                       data-toggle='modal' 
                                                       data-target='#delete'  
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

<?php 
    $this->load->view('modal/delete'); 
?>
<script>
    $(function() {

        // Hapus
        $('#delete').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            // Untuk mengambil nilai dari data-no="" yang telah kita tempatkan pada link hapus
            var no = div.data('no')
            var url = div.data('url')

            var modal = $(this)

            // Mengisi atribut href pada tombol ya yang kita berikan no hapus-true pada modal.
            modal.find('#hapus-true').attr("href", url + "user/delete/" + no );

        });


    });

</script>
