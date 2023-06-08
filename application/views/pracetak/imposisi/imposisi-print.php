<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>IMPOSISI</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <img style="width:200px;" src="<?=base_url()?>/assets/dist/img/logo gramasurys.png">
            <div class="card-body bg-light text-dark" align="center" style="margin-top:10px;">
                <h1 class="card-title" style="font-size: 40px;width: 100%;">WORK ORDER</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
            <form action="<?=site_url('pracetak/imposisi/lihat_imposisi')?>" method="post">        
                <div class="row">
                <?php foreach($imposisi as $s => $row) {?>  
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
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->tanggal_masuk ))?></label>
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
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->deadline)) ?></label>
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
                <?php } ?>
                <br><hr><br>
            </form>

            <form action="<?=site_url('pracetak/imposisi/lihat_imposisi')?>" method="post">
                <?php foreach($imposisi as $s => $row) {?>
                    <!-- INFORMASI IMPOSISI -->
                        <div class="row">
                            <!-- IMPOSISI COVER -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <!-- NAMA OPERATOR IMPOSISI COVER -->
                                        <div class="col-md-6" align="center"><label class="form-label">Nama Operator</label></div>
                                        <div class="col-md-6"><?=$row->namaoperator1;?></div>
                                    </div><br>
                                    <div class="row">
                                        <!-- TOTAL PLAT IMPOSISI COVER -->
                                        <div class="col-md-3"><label class="form-label">Total Plat Cover</label></div>
                                        <div class="col-md-3"><?=$row->total_plat_cover;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_imposisi_cover" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_imposisi_cover" value="imposisi cover" <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.IMPOSISI COVER -->

                            <!-- IMPOSISI ISI -->
                            <?php if($row->isi1plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <div class="row">
                                        <!-- NAMA OPERATOR IMPOSISI ISI -->
                                        <div class="col-md-6" align="center"><label class="form-label">Nama Operator</label></div>
                                        <div class="col-md-6"><?=$row->namaoperator2;?></div>
                                    </div><br>
                                    <div class="row">
                                        <!-- TOTAL PLAT IMPOSISI ISI -->
                                        <div class="col-md-3"><label class="form-label">Total Plat Isi</label></div>
                                        <div class="col-md-3"><?=$row->total_plat_isi;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_imposisi_isi" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_imposisi_isi" value="imposisi isi" <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.IMPOSISI ISI -->
                        </div><br>
                    <!-- /.INFORMASI IMPOSISI -->
                    
                    <!-- BARIS 1 -->
                        <div class="row">
                            <!-- IMPOSISI COVER 1 -->
                                <div class="col-md-6">
                                    <!-- CARD HEADER IMPOSISI COVER 1 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-success">
                                                <div class="card-header text-center">
                                                    IMPOSISI COVER 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER IMPOSISI COVER 1 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN IMPOSISI COVER 1 -->
                                            <div class="col-md-3"><label>Mesin</label></div>
                                            <div class="col-md-3"><?=$row->cover1mesin1;?></div>
                                            <!-- JUMLAH PLAT IMPOSISI COVER 1 -->
                                            <div class="col-md-3"><label>Plate</label></div>
                                            <div class="col-md-3"><?=$row->jumlahplatecover1;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN IMPOSISI COVER 1 -->
                                            <div class="col-md-12"><label>Rincian Imposisi</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN IMPOSISI COVER 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-2"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-2"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->cover1plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1set1; ?></div>
                                                    <div class="col-md-2"><?= $row->cover1lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1up1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1warna1; ?></div>
                                                    <div class="col-md-2"><?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->cover1keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->cover1plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover1plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1set2; ?></div>
                                                        <div class="col-md-2"><?= $row->cover1lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1up2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1warna2; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover1keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->cover1plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover1plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1set3; ?></div>
                                                        <div class="col-md-2"><?= $row->cover1lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1up3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1warna3; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->cover1status3 != "-" ?   $row->cover1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover1keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.IMPOSISI COVER 1 -->

                            <!-- IMPOSISI ISI 1 -->
                            <?php if($row->isi1plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER IMPOSISI ISI 1 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    IMPOSISI ISI 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER IMPOSISI ISI 1 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN IMPOSISI ISI 1 -->
                                            <div class="col-md-3"><label>Mesin</label></div>
                                            <div class="col-md-3"><?=$row->isi1mesin1;?></div>
                                            <!-- JUMLAH PLAT IMPOSISI ISI 1 -->
                                            <div class="col-md-3"><label>Plate</label></div>
                                            <div class="col-md-3"><?=$row->jumlahplateisi1;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN IMPOSISI ISI 1 -->
                                            <div class="col-md-12"><label>Rincian Imposisi</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN IMPOSISI ISI 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-2"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-2"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi1plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1set1; ?></div>
                                                    <div class="col-md-2"><?= $row->isi1lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1warna1; ?></div>
                                                    <div class="col-md-2"><?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi1keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi1plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi1plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1set2; ?></div>
                                                        <div class="col-md-2"><?= $row->isi1lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1warna2; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi1keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi1plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi1plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1set3; ?></div>
                                                        <div class="col-md-2"><?= $row->isi1lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1warna3; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi1keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.IMPOSISI ISI 1 -->
                        </div><br>
                    <!-- /.BARIS 1 -->

                    <!-- BARIS 2 -->
                        <div class="row">
                            <!-- IMPOSISI COVER 2 -->
                            <!-- SAAT IMPOSISI COVER 2 ADA ISINYA -->
                            <?php if($row->cover2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER IMPOSISI COVER 2 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-success">
                                                <div class="card-header text-center">
                                                    IMPOSISI COVER 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER IMPOSISI COVER 2 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN IMPOSISI COVER 2 -->
                                            <div class="col-md-3"><label>Mesin</label></div>
                                            <div class="col-md-3"><?=$row->cover2mesin1;?></div>
                                            <!-- JUMLAH PLAT IMPOSISI COVER 2 -->
                                            <div class="col-md-3"><label>Plate</label></div>
                                            <div class="col-md-3"><?=$row->jumlahplatecover2;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN IMPOSISI COVER 2 -->
                                            <div class="col-md-12"><label>Rincian Imposisi</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN IMPOSISI COVER 2 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-2"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-2"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->cover2plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2set1; ?></div>
                                                    <div class="col-md-2"><?= $row->cover2lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2up1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2warna1; ?></div>
                                                    <div class="col-md-2"><?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->cover2keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->cover2plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover2plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2set2; ?></div>
                                                        <div class="col-md-2"><?= $row->cover2lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2up2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2warna2; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover2keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->cover2plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover2plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2set3; ?></div>
                                                        <div class="col-md-2"><?= $row->cover2lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2up3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2warna3; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->cover2status3 != "-" ?   $row->cover2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover2keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- SAAT IMPOSISI COVER 2 TIDAK ADA ISINYA -->
                            <?php if($row->cover2plat1 == 0) { ?>
                                <div class="col-md-6">
                                    <!-- CATATAN IMPOSISI -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <br><textarea class="form-control" placeholder="catatan" name="catatan_imposisi" value="<?=$row->catatan_imposisi;?>" style="height: 150px;" disabled><?=$row->catatan_imposisi;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.IMPOSISI COVER 2 -->

                            <!-- IMPOSISI ISI 2 -->
                            <?php if($row->isi2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER IMPOSISI ISI 2 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    IMPOSISI ISI 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER IMPOSISI ISI 2 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN IMPOSISI ISI 2 -->
                                            <div class="col-md-3"><label>Mesin</label></div>
                                            <div class="col-md-3"><?=$row->isi2mesin1;?></div>
                                            <!-- JUMLAH PLAT IMPOSISI ISI 2 -->
                                            <div class="col-md-3"><label>Plate</label></div>
                                            <div class="col-md-3"><?=$row->jumlahplateisi2;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN IMPOSISI ISI 2 -->
                                            <div class="col-md-12"><label>Rincian Imposisi</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN IMPOSISI ISI 2 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-2"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-2"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi2plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2set1; ?></div>
                                                    <div class="col-md-2"><?= $row->isi2lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2warna1; ?></div>
                                                    <div class="col-md-2"><?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi2keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi2plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi2plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2set2; ?></div>
                                                        <div class="col-md-2"><?= $row->isi2lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2warna2; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi2keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi2plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi2plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2set3; ?></div>
                                                        <div class="col-md-2"><?= $row->isi2lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2warna3; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi2keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.IMPOSISI ISI 2 -->
                        </div><br>
                    <!-- /.BARIS 2 -->

                    <!-- BARIS 3 -->
                        <div class="row">
                            <!-- CATATAN IMPOSISI -->
                            <!-- SAAT IMPOSISI COVER 2 ADA ISINYA -->
                            <?php if($row->cover2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CATATAN IMPOSISI -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <br><textarea class="form-control" placeholder="catatan" name="catatan_imposisi" value="<?=$row->catatan_imposisi;?>" style="height: 150px;" disabled><?=$row->catatan_imposisi;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- SAAT IMPOSISI COVER 2 TIDAK ADA ISINYA -->
                            <?php if($row->cover2plat1 == 0) { ?>
                                <div class="col-md-6"></div>
                            <?php } ?>
                            <!-- /.CATATAN IMPOSISI -->

                            <!-- IMPOSISI ISI 3 -->
                            <?php if($row->isi3plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER IMPOSISI ISI 3 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    IMPOSISI ISI 3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER IMPOSISI ISI 3 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN IMPOSISI ISI 3 -->
                                            <div class="col-md-3"><label>Mesin</label></div>
                                            <div class="col-md-3"><?=$row->isi3mesin1;?></div>
                                            <!-- JUMLAH PLAT IMPOSISI ISI 3 -->
                                            <div class="col-md-3"><label>Plate</label></div>
                                            <div class="col-md-3"><?=$row->jumlahplateisi3;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN IMPOSISI ISI 3 -->
                                            <div class="col-md-12"><label>Rincian Imposisi</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN IMPOSISI ISI 3 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-2"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-2"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi3plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3set1; ?></div>
                                                    <div class="col-md-2"><?= $row->isi3lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3warna1; ?></div>
                                                    <div class="col-md-2"><?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi3keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi3plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi3plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3set2; ?></div>
                                                        <div class="col-md-2"><?= $row->isi3lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3warna2; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi3keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi3plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi3plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3set3; ?></div>
                                                        <div class="col-md-2"><?= $row->isi3lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3warna3; ?></div>
                                                        <div class="col-md-2"><?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi3keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.IMPOSISI ISI 3 -->
                        </div>
                    <!-- /.BARIS 3 -->
                <?php } ?>
            </form>
            <script>
                window.print();
            </script>
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