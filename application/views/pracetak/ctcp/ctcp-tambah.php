<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak/Ctcp" class="btn btn-warning btn-lg">
                <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
              </li>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li> -->
            </ol>
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
        <h3 class="card-title">Data CTCP</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
        <?php foreach($ctcp as $s => $row) {?>  
            <div class="row">            
                <div class="col-md-4">
                    <br>Nomor SO
                    <br><label class="form-label" ><?=$row->nomor_so?></label>
                </div>
                <div class="col-md-4">
                    <br>Nama Pemesan
                    <br><label class="form-label"><?=$row->nama_pemesan?></label>
                </div>
                <div class="col-md-4">
                    <br>Halaman
                    <br><label class="form-label"><?=$row->halaman?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <br>Tanggal Masuk
                    <br><label class="form-label"><?= date('d F Y', strtotime( $row->tanggal_masuk)) ?></label>
                </div>
                <div class="col-md-4">
                    <br>Nama Orderan
                    <br><label class="form-label"><?=$row->nama_orderan?></label>
                </div>
                <div class="col-md-4">
                    <br>Oplag
                    <br><label class="form-label"><?=$row->oplag?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <br>Deadline
                    <br><label class="form-label"><?= date('d F Y', strtotime( $row->deadline))?></label>
                </div>
                <div class="col-md-4">
                    <br>Ukuran
                    <br><label class="form-label"><?=$row->ukuran?></label>
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
            </div>
                <br><hr><br>
                <form action="<?=site_url('pracetak/ctcp/proses')?>" method="post">
                <div class="row">
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
                        <input type="text" class="form-control" name="namaoperatorctcp1" value="<?=$row->namaoperatorctcp1?>">
                    </div>
                    <?php if($row->isi1plat1 != 0) {?>
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="namaoperatorctcp2" value="<?=$row->namaoperatorctcp2?>">
                    </div>
                    <?php } ?>
                </div><br>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Cover<br>
                        <label class="form-label">Total Plat Gagal Cover</label>
                    </div>
                    <div class="col-md-1">
                        <?=$row->total_plat_cover?><br>
                        <!-- TEMPAT UNTUK VARIABEL TOTAL PLAT GAGAL COVER -->

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN MENGGUNAKAN TAG LABEL -->
                        <input type="number" class="form-control" name="total_plat_gagal_cover" hidden>
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_cover" value="imposisi cover" disabled <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>                            
                        </div>

                        <div class="form-check">
                            <input type="text" name="status_ctcp_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_ctcp_cover" value="ctcp cover">
                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                        </div>
                    </div>
                    <?php if($row->isi1plat1 != 0) {?>
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Isi<br>
                        <label class="form-label">Total Plat Gagal Isi</label>
                    </div>
                    <div class="col-md-1">
                        <?=$row->total_plat_isi?><br>
                        <!-- <?=$row->total_plat_gagal_isi?>  TEMPAT UNTUK VARIABEL TOTAL PLAT GAGAL ISI -->
                        

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN MENGGUNAKAN TAG LABEL -->
                        <input type="number" class="form-control" name="total_plat_gagal_isi" hidden>
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_isi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_isi" value="imposisi isi" disabled <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label><br>                            
                        </div>
                        
                        <div class="form-check">
                            <input type="text" name="status_ctcp_isi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_ctcp_isi" value="ctcp isi">
                            <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label><br>
                        </div>
                    </div>
                    <?php } ?>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                CTCP COVER 1
                            </div>
                        </div>
                    </div>
                    <?php if($row->isi1plat1 != 0) {?>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            CTCP ISI 1
                        </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col">
                                    <?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?>
                                </div>
                                <div class="col" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col">
                                    <?= $row->jumlahplatecover1; ?>
                                </div>
                                <div class="col" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="jumlahplategagalcover1">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->cover1plat1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1plat2; ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?= $row->cover1plat3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->cover1set1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1set2; ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?= $row->cover1set3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->cover1lbrcetak1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1lbrcetak2; ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?= $row->cover1lbrcetak3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->cover1up1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1up2; ?>
                                            <?php } if($row->cover1plat3 != 0 ) {?>
                                                <br><br><?= $row->cover1up3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->cover1warna1; ?>
                                            <?php if($row->cover1plat2 != 0 ) {?>
                                                <br><br><?= $row->cover1warna2; ?>
                                            <?php } if($row->cover1plat3 != 0 ) {?>
                                                <br><br><?= $row->cover1warna3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?>
                                            <?php if($row->cover1plat2 != 0 ) {?>
                                                <br><br><?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?php  echo $row->cover1status3 != "-" ?   $row->cover1status3  : '-' ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label><br><br>
                                            <?= $row->cover1keterangan1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1keterangan2; ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?= $row->cover1keterangan3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <?= $row->cover1tglimposisi1; ?>
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><?= $row->cover1tglimposisi2; ?>
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><?= $row->cover1tglimposisi3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="cover1tglctcp1">
                                            <?php if($row->cover1plat2 != 0) {?>
                                                <br><br><input type="date" class="form-control" name="cover1tglctcp2">
                                            <?php } if($row->cover1plat3 != 0) {?>
                                                <br><br><input type="date" class="form-control" name="cover1tglctcp3">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($row->isi1plat1 != 0) {?>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-2">
                                    <?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-2">
                                    <?= $row->jumlahplateisi1; ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="jumlahplategagalisi1">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->isi1plat1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1plat2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1plat3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->isi1set1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1set2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1set3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->isi1lbrcetak1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1lbrcetak2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1lbrcetak3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->isi1up1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1up2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1up3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->isi1warna1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1warna2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1warna3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label><br><br>
                                            <?= $row->isi1keterangan1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1keterangan2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1keterangan3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <?= $row->isi1tglimposisi1; ?>
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><?= $row->isi1tglimposisi2; ?>
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><?= $row->isi1tglimposisi3; ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="isi1tglctcp1">
                                            <?php if($row->isi1plat2 != 0) {?>
                                                <br><br><input type="date" class="form-control" name="isi1tglctcp2">
                                            <?php } if($row->isi1plat3 != 0) {?>
                                                <br><br><input type="date" class="form-control" name="isi1tglctcp3">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div><br>
                <div class="row">
                    <?php if($row->cover2plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="card border bg-success">
                                <div class="card-header text-center">
                                    CTCP COVER 2
                                </div>
                            </div>
                        </div>
                    <?php } if($row->cover2plat1 == 0) {?>
                        <div class="col-md-6"></div>
                    <?php } if($row->isi2plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="card border bg-info">
                            <div class="card-header text-center">
                                CTCP ISI 2
                            </div>
                            </div>
                        </div>
                    <?php } {?>
                </div>
                <div class="row">
                    <?php if($row->cover2plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row">
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Mesin</label>
                                    </div>
                                    <div class="col-md-2">
                                        <?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?>
                                    </div>
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Plate</label>
                                    </div>
                                    <div class="col-md-2">
                                        <?= $row->jumlahplatecover2; ?>
                                    </div>
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Plate Gagal</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="jumlahplategagalcover2">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">Rincian Ctcp</label>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col">
                                                <label class="form-label">Plate</label><br><br>
                                                <?= $row->cover2plat1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2plat2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2plat3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Set</label><br><br>
                                                <?= $row->cover2set1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2set2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2set3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Lbr.Cetak</label><br><br>
                                                <?= $row->cover2lbrcetak1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2lbrcetak2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2lbrcetak3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Up</label><br><br>
                                                <?= $row->cover2up1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2up2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2up3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Warna</label><br><br>
                                                <?= $row->cover2warna1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2warna2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2warna3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Proses</label><br><br>
                                                <?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?php  echo $row->cover2status3 != "-" ?   $row->cover2status3  : '-' ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Keterangan</label><br><br>
                                                <?= $row->cover2keterangan1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2keterangan2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2keterangan3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Tgl. Imposisi</label><br>
                                                <?= $row->cover2tglimposisi1; ?>
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><?= $row->cover2tglimposisi2; ?>
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><?= $row->cover2tglimposisi3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Tgl. CTCP</label><br><br>
                                                <input type="date" class="form-control" name="cover2tglctcp1">
                                                <?php if($row->cover2plat2 != 0) {?>
                                                    <br><br><input type="date" class="form-control" name="cover2tglctcp2">
                                                <?php } if($row->cover2plat3 != 0) {?>
                                                    <br><br><input type="date" class="form-control" name="cover2tglctcp3">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } if($row->cover2plat1 == 0) { ?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <textarea name="catatan_ctcp"  class="form-control" placeholder="catatan" style="height: 240px;" ><?=$row->catatan_ctcp?></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6" align="left">
                                    <button type="submit" name="add" class="btn btn-success">Simpan</button>
                                </div>
                                <div class="col-md-6" align="right">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?php } if($row->isi2plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                <div class="row">
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Mesin</label>
                                    </div>
                                    <div class="col-md-2">
                                        <?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?>
                                    </div>
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Plate</label>
                                    </div>
                                    <div class="col-md-2">
                                        <?= $row->jumlahplateisi2; ?>
                                    </div>
                                    <div class="col-md-2" align="center">
                                        <label class="form-label">Plate Gagal</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="jumlahplategagalisi2">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">Rincian Ctcp</label>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col">
                                                <label class="form-label">Plate</label><br><br>
                                                <?= $row->isi2plat1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2plat2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2plat3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Set</label><br><br>
                                                <?= $row->isi2set1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2set2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2set3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Lbr.Cetak</label><br><br>
                                                <?= $row->isi2lbrcetak1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2lbrcetak2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2lbrcetak3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Up</label><br><br>
                                                <?= $row->isi2up1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2up2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2up3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Warna</label><br><br>
                                                <?= $row->isi2warna1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2warna2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2warna3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Proses</label><br><br>
                                                <?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Keterangan</label><br><br>
                                                <?= $row->isi2keterangan1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2keterangan2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2keterangan3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Tgl. Imposisi</label><br>
                                                <?= $row->isi2tglimposisi1; ?>
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><?= $row->isi2tglimposisi2; ?>
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><?= $row->isi2tglimposisi3; ?>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Tgl. CTCP</label><br><br>
                                                <input type="date" class="form-control" name="isi2tglctcp1">
                                                <?php if($row->isi2plat2 != 0) {?>
                                                    <br><br><input type="date" class="form-control" name="isi2tglctcp2">
                                                <?php } if($row->isi2plat3 != 0) {?>
                                                    <br><br><input type="date" class="form-control" name="isi2tglctcp3">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <br>
                <div class="row">
                    <?php } if($row->cover2plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <br><br>                                    
                                        <div class="row">
                                            <!-- <div class="col-md-6">
                                                <label class="form-label">Tanggal Out CTCP Cover</label>
                                                <br>
                                                <input type="text" name="id_order" value="<?=$row->id_order?>" hidden>
                                                <input type="date" class="form-control" name="tanggal_out_ctcp_cover"  >
                                                <br><label class="form-label">Tanggal Out CTCP Isi</label>
                                                <div class="row">
                                                    <div class="col-md-3">Ke 1 </div>
                                                    <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1"  ></div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-3">Ke 2 </div>
                                                    <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi2"  ></div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12">
                                                <textarea name="catatan_ctcp"  class="form-control" placeholder="catatan" style="height: 240px;" ><?=$row->catatan_ctcp?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6" align="left">
                                    <button type="submit" name="add" class="btn btn-success">Simpan</button>
                                </div>
                                <div class="col-md-6" align="right">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?php } if($row->cover2plat1 == 0) {?>
                        <div class="col-md-6"></div>
                    <?php } if($row->isi3plat1 != 0) {?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <div class="card border bg-info">
                                        <div class="card-header text-center">
                                            CTCP ISI 3
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <div class="col-md-2" align="center">
                                                <label class="form-label">Mesin</label>
                                            </div>
                                            <div class="col-md-2">
                                                <?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?>
                                            </div>
                                            <div class="col-md-2" align="center">
                                                <label class="form-label">Plate</label>
                                            </div>
                                            <div class="col-md-2">
                                                <?= $row->jumlahplateisi3; ?>
                                            </div>
                                            <div class="col-md-2" align="center">
                                                <label class="form-label">Plate Gagal</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" name="jumlahplategagalisi3">
                                            </div>
                                        </div><br>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label">Rincian Ctcp</label>
                                                </div>
                                                </div>
                                            <div class="row" align="center">
                                                <div class="col">
                                                    <label class="form-label">Plate</label><br><br>
                                                    <?= $row->isi3plat1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3plat2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3plat3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Set</label><br><br>
                                                    <?= $row->isi3set1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3set2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3set3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Lbr.Cetak</label><br><br>
                                                    <?= $row->isi3lbrcetak1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3lbrcetak2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3lbrcetak3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Up</label><br><br>
                                                    <?= $row->isi3up1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3up2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3up3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Warna</label><br><br>
                                                    <?= $row->isi3warna1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3warna2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3warna3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Proses</label><br><br>
                                                    <?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label><br><br>
                                                    <?= $row->isi3keterangan1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3keterangan2; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3keterangan3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tgl. Imposisi</label><br>
                                                    <?= $row->isi3tglimposisi1; ?>
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><?= $row->isi3tglimposisi3; ?>
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><?= $row->isi3tglimposisi3; ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tgl. CTCP</label><br><br>
                                                    <input type="date" class="form-control" name="isi3tglctcp1">
                                                    <?php if($row->isi3plat2 != 0) {?>
                                                        <br><br><input type="date" class="form-control" name="isi3tglctcp2">
                                                    <?php } if($row->isi3plat3 != 0) {?>
                                                        <br><br><input type="date" class="form-control" name="isi3tglctcp3">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                </div>
                </form> 
            <?php } ?>

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