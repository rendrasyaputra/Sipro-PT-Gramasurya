<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-warning btn-lg">
                    <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <!-- <label>SO</label> -->
        <h3 class="card-title">Data Laporan</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
     <form action="<?=site_url('pracetak/laporan/proses')?>" method="post">
        <div class="card-body">
        <?php foreach($laporan as $s => $row) {?>  
            <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
                <div class="row">
                    <div class="col-md-4">
                        <br>Nomor SO
                        <br><label class="form-label"><?= $row->nomor_so; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Pemesan
                        <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Halaman
                        <br><label class="form-label"><?= $row->halaman; ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Tanggal Masuk
                        <br><label class="form-label"><?= $row->tanggal_masuk; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Orderan
                        <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Oplag
                        <br><label class="form-label"><?= $row->oplag; ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Deadline
                        <br><label class="form-label"><?= $row->deadline; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Ukuran
                        <br><label class="form-label"><?= $row->ukuran; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Finsihing Akhir
                        <br><label class="form-label">
                        <?php 
                          $finishing = "";
                          if($row->bending != null){
                            $finishing .= "bending, ";
                          }
                          if($row->hard_cover != null){
                            $finishing .= 'hard cover, ';
                          }   
                          if($row->jahit_benang != null){
                            $finishing .= 'jahit benang, ';
                          } 
                          if($row->jahit_kawat != null){
                            $finishing .= 'jahit kawat, ';
                          }    
                          if($row->pond != null){
                            $finishing .= 'pond, ';
                          }   
                          if($row->spiral != null){
                            $finishing .= 'Spiral, ';
                          }
                          $finishing = rtrim($finishing, ", ");
                          echo $finishing;
                      ?>
                        </label>
                    </div>
                </div><br>
                <hr><br>

                <form action="<?=site_url('pracetak/laporan/proses')?>" method="post"> 
                    <div class="row" align="center">
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label>
                        </div>
                        <div class="col"> 
                            <input class="form-check-input" type="checkbox" value="Imposisi Isi" disabled <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>
                        </div>
                        <div class="col">    
                            <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled <?php echo $row->ctcp_status == "ctcp cover" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label>
                        </div>
                        <div class="col"> 
                            <input class="form-check-input" type="checkbox" value="CTCP Isi" disabled  <?php echo $row->ctcp_status == "ctcp isi" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label>
                        </div>                    
                        <div class="col">                    
                            <input  type="text" name="status_laporan_pracetak" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_laporan_pracetak" value="pracetak" <?php echo $row->so_status == "pracetak" ?  "checked" : "" ?> disabled>
                            <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                        </div>
                    </div>
                    <hr>

                    <!-- LABEL -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border bg-info">
                                <div class="card-header text-center">
                                    COVER
                                </div>
                            </div>
                        </div>
                        <?php if($row->isi1plat1 != 0) { ?>
                        <div class="col-md-6">
                            <div class="card border bg-info">
                                <div class="card-header text-center">
                                    ISI
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- BARIS 1 -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-6">
                                        <label>MESIN COVER 1</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=$row->cover1mesin1;?>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                        <label>Plat Keluar</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. Imposisi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. CTCP</label>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                            <?= $row->cover1plat1; ?>
                                        <?php if($row->cover1plat2 != 0) {?>
                                            <br><br><?= $row->cover1plat2; ?>
                                        <?php } if($row->cover1plat3 != 0) :?>
                                            <br><br><?= $row->cover1plat3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->cover1tglimposisi1; ?>
                                        <?php if($row->cover1plat2 != 0) {?>
                                            <br><br><?= $row->cover1tglimposisi2; ?>
                                        <?php } if($row->cover1plat3 != 0) :?>
                                            <br><br><?= $row->cover1tglimposisi3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->cover1tglctcp1; ?>
                                        <?php if($row->cover1plat2 != 0) {?>
                                            <br><br><?= $row->cover1tglctcp2; ?>
                                        <?php } if($row->cover1plat3 != 0) :?>
                                            <br><br><?= $row->cover1tglctcp3; ?>
                                        <?php endif ?>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <b>TOTAL PLAT KELUAR</b>
                                        <br><b>TOTAL PLAT GAGAL</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <?= $row->cover1plat1+$row->cover1plat2+$row->cover1plat3; ?>
                                        <br><?= $row->jumlahplategagalcover1; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5" align="center">
                                        <hr><b>TOTAL PLAT</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <hr><?= $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($row->isi1plat1 != 0) { ?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-6">
                                        <label>MESIN ISI 1</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=$row->isi1mesin1;?>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                        <label>Plat Keluar</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. Imposisi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. CTCP</label>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                            <?= $row->isi1plat1; ?>
                                        <?php if($row->isi1plat2 != 0) {?>
                                            <br><br><?= $row->isi1plat2; ?>
                                        <?php } if($row->isi1plat3 != 0) :?>
                                            <br><br><?= $row->isi1plat3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi1tglimposisi1; ?>
                                        <?php if($row->isi1plat2 != 0) {?>
                                            <br><br><?= $row->isi1tglimposisi2; ?>
                                        <?php } if($row->isi1plat3 != 0) :?>
                                            <br><br><?= $row->isi1tglimposisi3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi1tglctcp1; ?>
                                        <?php if($row->isi1plat2 != 0) {?>
                                            <br><br><?= $row->isi1tglctcp2; ?>
                                        <?php } if($row->isi1plat3 != 0) :?>
                                            <br><br><?= $row->isi1tglctcp3; ?>
                                        <?php endif ?>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <b>TOTAL PLAT KELUAR</b>
                                        <br><b>TOTAL PLAT GAGAL</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <?= $row->isi1plat1+$row->isi1plat2+$row->isi1plat3; ?>
                                        <br><?= $row->jumlahplategagalisi1; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5" align="center">
                                        <hr><b>TOTAL PLAT</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <hr><?= $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- BARIS 2 -->
                    <div class="row">
                        <?php if($row->cover2plat1 != 0) { ?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-6">
                                        <label>MESIN COVER 2</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=$row->cover2mesin1;?>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                        <label>Plat Keluar</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. Imposisi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. CTCP</label>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                            <?= $row->cover2plat1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->cover2plat2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->cover2plat3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->cover2tglimposisi1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->cover2tglimposisi2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->cover2tglimposisi3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->cover2tglctcp1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->cover2tglctcp2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->cover2tglctcp3; ?>
                                        <?php endif ?>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <b>TOTAL PLAT KELUAR</b>
                                        <br><b>TOTAL PLAT GAGAL</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <?= $row->cover2plat1+$row->cover2plat2+$row->cover2plat3; ?>
                                        <br><?= $row->jumlahplategagalcover2; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5" align="center">
                                        <hr><b>TOTAL PLAT</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <hr><?= $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } if($row->cover2plat1 == 0) { ?>
                        <div class="col-md-6">
                            <div class="row" align="center">
                                <div class="col">
                                    <div class="card border bg-info">
                                        <div class="card-header text-center">
                                            RINCIAN PENGGUNAAN PLAT
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3"><label>102</label></div>
                                            <div class="col-md-3"><label>74</label></div>
                                            <div class="col-md-3"><label>72</label></div>
                                            <div class="col-md-3"><label>TOKKO</label></div>
                                        </div>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>COVER</label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover1 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "102" ? $cover1=$cover1+$p1 :  $cover1;
                                                        echo $row->cover2mesin1 == "102" ? $cover1=$cover1+$p2 :  $cover1;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover2 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "74" ? $cover2=$cover2+$p1 :  $cover2;
                                                        echo $row->cover2mesin1 == "74" ? $cover2=$cover2+$p2 :  $cover2;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover3 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "72" ? $cover3=$cover3+$p1 :  $cover3;
                                                        echo $row->cover2mesin1 == "72" ? $cover3=$cover3+$p2 :  $cover3;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover4 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "Tokko" ? $cover4=$cover4+$p1 :  $cover4;
                                                        echo $row->cover2mesin1 == "Tokko" ? $cover4=$cover4+$p2 :  $cover4;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>ISI<label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi1 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "102" ? $isi1=$isi1+$p1 :  $isi1;
                                                        $row->isi2mesin1 == "102" ? $isi1=$isi1+$p2 :  $isi1;
                                                        echo $row->isi3mesin1 == "102" ? $isi1=$isi1+$p3 :  $isi1;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi2 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "74" ? $isi2=$isi2+$p1 :  $isi2;
                                                        $row->isi2mesin1 == "74" ? $isi2=$isi2+$p2 :  $isi2;
                                                        echo $row->isi3mesin1 == "74" ? $isi2=$isi2+$p3 :  $isi2;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi3 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "72" ? $isi3=$isi3+$p1 :  $isi3;
                                                        $row->isi2mesin1 == "72" ? $isi3=$isi3+$p2 :  $isi3;
                                                        echo $row->isi3mesin1 == "72" ? $isi3=$isi3+$p3 :  $isi3;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi4 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "Tokko" ? $isi4=$isi4+$p1 :  $isi4;
                                                        $row->isi2mesin1 == "Tokko" ? $isi4=$isi4+$p2 :  $isi4;
                                                        echo $row->isi3mesin1 == "Tokko" ? $isi4=$isi4+$p3 :  $isi4;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr><br>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>TOTAL</label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3"><?= $cover1+$isi1; ?></div>
                                            <div class="col-md-3"><?= $cover2+$isi2; ?></div>
                                            <div class="col-md-3"><?= $cover3+$isi3; ?></div>
                                            <div class="col-md-3"><?= $cover4+$isi4; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($row->isi2plat1 != 0) { ?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-6">
                                        <label>MESIN ISI 2</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=$row->isi2mesin1;?>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                        <label>Plat Keluar</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. Imposisi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. CTCP</label>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                            <?= $row->isi2plat1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->isi2plat2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->isi2plat3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi2tglimposisi1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->isi2tglimposisi2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->isi2tglimposisi3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi2tglctcp1; ?>
                                        <?php if($row->cover2plat2 != 0 || $row->isi2plat2 != 0) {?>
                                            <br><br><?= $row->isi2tglctcp2; ?>
                                        <?php } if($row->cover2plat3 != 0 || $row->isi2plat3 != 0) :?>
                                            <br><br><?= $row->isi2tglctcp3; ?>
                                        <?php endif ?>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <b>TOTAL PLAT KELUAR</b>
                                        <br><b>TOTAL PLAT GAGAL</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <?= $row->isi2plat1+$row->isi2plat2+$row->isi2plat3; ?>
                                        <br><?= $row->jumlahplategagalisi2; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5" align="center">
                                        <hr><b>TOTAL PLAT</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <hr><?= $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- BARIS 3 -->
                    <div class="row">
                        <?php if($row->cover2plat1 != 0) { ?>
                        <div class="col-md-6">
                            <div class="row" align="center">
                                <div class="col">
                                    <div class="card border bg-info">
                                        <div class="card-header text-center">
                                            RINCIAN PENGGUNAAN PLAT
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3"><label>102</label></div>
                                            <div class="col-md-3"><label>74</label></div>
                                            <div class="col-md-3"><label>72</label></div>
                                            <div class="col-md-3"><label>TOKKO</label></div>
                                        </div>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>COVER</label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover1 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "102" ? $cover1=$cover1+$p1 :  $cover1;
                                                        echo $row->cover2mesin1 == "102" ? $cover1=$cover1+$p2 :  $cover1;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover2 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "74" ? $cover2=$cover2+$p1 :  $cover2;
                                                        echo $row->cover2mesin1 == "74" ? $cover2=$cover2+$p2 :  $cover2;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover3 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "72" ? $cover3=$cover3+$p1 :  $cover3;
                                                        echo $row->cover2mesin1 == "72" ? $cover3=$cover3+$p2 :  $cover3;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $cover4 = 0;
                                                    $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                    $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                        $row->cover1mesin1 == "Tokko" ? $cover4=$cover4+$p1 :  $cover4;
                                                        echo $row->cover2mesin1 == "Tokko" ? $cover4=$cover4+$p2 :  $cover4;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>ISI<label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi1 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "102" ? $isi1=$isi1+$p1 :  $isi1;
                                                        $row->isi2mesin1 == "102" ? $isi1=$isi1+$p2 :  $isi1;
                                                        echo $row->isi3mesin1 == "102" ? $isi1=$isi1+$p3 :  $isi1;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi2 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "74" ? $isi2=$isi2+$p1 :  $isi2;
                                                        $row->isi2mesin1 == "74" ? $isi2=$isi2+$p2 :  $isi2;
                                                        echo $row->isi3mesin1 == "74" ? $isi2=$isi2+$p3 :  $isi2;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi3 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "72" ? $isi3=$isi3+$p1 :  $isi3;
                                                        $row->isi2mesin1 == "72" ? $isi3=$isi3+$p2 :  $isi3;
                                                        echo $row->isi3mesin1 == "72" ? $isi3=$isi3+$p3 :  $isi3;
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php 
                                                    $isi4 = 0;
                                                    $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                    $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                    $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                        $row->isi1mesin1 == "Tokko" ? $isi4=$isi4+$p1 :  $isi4;
                                                        $row->isi2mesin1 == "Tokko" ? $isi4=$isi4+$p2 :  $isi4;
                                                        echo $row->isi3mesin1 == "Tokko" ? $isi4=$isi4+$p3 :  $isi4;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr><br>
                                <div class="row" align="center">
                                    <div class="col-md-2"><label>TOTAL</label></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3"><?= $cover1+$isi1; ?></div>
                                            <div class="col-md-3"><?= $cover2+$isi2; ?></div>
                                            <div class="col-md-3"><?= $cover3+$isi3; ?></div>
                                            <div class="col-md-3"><?= $cover4+$isi4; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } if($row->cover2plat1 == 0) { ?>
                            <div class="col-md-6"></div>
                        <?php } ?>
                        <?php if($row->isi3plat1 != 0) :?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row" align="center">
                                    <div class="col-md-6">
                                        <label>MESIN ISI 3</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=$row->isi3mesin1;?>
                                    </div>
                                </div><hr>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                        <label>Plat Keluar</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. Imposisi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tgl. CTCP</label>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-4">
                                            <?= $row->isi3plat1; ?>
                                        <?php if($row->isi3plat2 != 0) {?>
                                            <br><br><?= $row->isi3plat2; ?>
                                        <?php } if($row->isi3plat3 != 0) :?>
                                            <br><br><?= $row->isi3plat3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi3tglimposisi1; ?>
                                        <?php if($row->isi3plat2 != 0) {?>
                                            <br><br><?= $row->isi3tglimposisi3; ?>
                                        <?php } if($row->isi3plat3 != 0) :?>
                                            <br><br><?= $row->isi3tglimposisi3; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-md-4">
                                            <?= $row->isi3tglctcp1; ?>
                                        <?php if($row->isi3plat2 != 0) {?>
                                            <br><br><?= $row->isi3tglctcp2; ?>
                                        <?php } if($row->isi3plat3 != 0) :?>
                                            <br><br><?= $row->isi3tglctcp3; ?>
                                        <?php endif ?>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <b>TOTAL PLAT KELUAR</b>
                                        <br><b>TOTAL PLAT GAGAL</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                        <?= $row->isi3plat1+$row->isi3plat2+$row->isi3plat3; ?>
                                        <br><?= $row->jumlahplategagalisi3; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5" align="center">
                                        <hr><b>TOTAL PLAT</b>
                                    </div>
                                    <div class="col-md-4" align="center">
                                         <hr><?= $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
                </form>
                <?php } ?> 
                
                <br>
                <div class="row" align="right">
                    <div class="col-md-12">
                        <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>                
            </div>        
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">
        Footer
    </div> -->
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->