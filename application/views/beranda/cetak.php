<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Laporan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href=".<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/cetak.css" rel="stylesheet" type="text/css" />
    <style type="text/css" media="print">
        .table td {
            border-color: #000 !important;
        }
        
        .foto {
            height: 55px;
        }
        
        @page {
            size: landscape;
        }
        
        .data {
            font-size: 15px;
            text-align: center;
            padding: 5px;
            border-color: #000;
        }
        
        .bawah_kanan {
            float: right;
            clear: both;
            text-align: center;
        }
        
        .bawah_kiri {
            float: left;
            clear: both;
            text-align: center;
        }

    </style>
</head>

<body onload="javascript:window.print()">

    <div class=" ">
        <div class=" ">
            <div class="atas_1">
                <img src="<?php echo base_url();?>/assets/images/lambang.png " style="float:left; top:0; width: 100px;height: 100px; ">
                <p style="text-align:right"> &nbsp;</p>
            </div>
            <div class="atas_2" style="margin:-40px 100px 0 0;">
                <h3 style="text-align:center; text-transform:uppercase; ;">PEMERINTAH PROVINSI GORONTALO <br>DINAS PENANAMAN MODAL ENERGI SUMBER DAYA MINERAL DAN TRANSMIGRASI</h3>
                <h5 style="text-align:center; text-transfrom:capitalize;">Jln. Tengah Desa Toto Selatan Kec. Kaila Bone Bolango Telp (0435)8591278 Fax (0435)8591277</h5>
            </div>
            <div class="atas" style="border-bottom:solid 5px #000000; "></div>
            <!--Garis KOP SURAT -->
            <h2 style="text-align:center;"> Detail Komoditi di Provinsi Gorontalo</h2>
            <div class="data">
                <table class="table" style="width:100%;margin-bottom:10px; height:40%; " border="1">
                    <tr class="text-center" style="font-weight:bold;">
                        <td>No</td>
                        <td>Tambang</td>
                        <td>JUmlah Tambang</td>
                        <td>Jumlah Investor</td>
                    </tr>
                    <?php 
                    if(isset($result))
                    {
                        $no = 1;
                                            
                        foreach($result->data as $json)
                        {
                                                   
                            $jumlah = $this->Mdl_query->GetJumlah2($json->kd_komoditi);
                    ?>
                        <tr>
                            <td>
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $json->nm_komoditi ?>
                            </td>
                            <td>
                                <?= $json->jumlah ?>
                            </td>
                            
                            <td>
                                <?= $jumlah ?>
                            </td>
                        </tr>

                    <?php 
                       $no++;
                        } 
                    }else{
                        
                    }

                    ?>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
