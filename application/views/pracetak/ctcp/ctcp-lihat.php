<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>CTCP</h1>
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
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
            <form action="<?=site_url('pracetak/ctcp/lihat_ctcp')?>" method="post">        
                <div class="row">
                <?php foreach($ctcp as $s => $row) {?>  
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
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->tanggal_masuk))?></label>
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
                <?php } ?>
                <br><hr><br>
            </form>

            <form action="<?=site_url('pracetak/ctcp/lihat_ctcp')?>" method="post">
                <?php foreach($ctcp as $s => $row) {?>
                    <!-- INFORMASI CTCP -->
                        <div class="row">
                            <!-- CTCP COVER -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <!-- NAMA OPERATOR CTCP COVER -->
                                        <div class="col-md-6" align="center"><label class="form-label">Nama Operator</label></div>
                                        <div class="col-md-6"><?=$row->namaoperatorctcp1?></div>
                                    </div><br>
                                    <div class="row">
                                        <!-- TOTAL PLAT CTCP COVER -->
                                        <div class="col-md-4"><label class="form-label">Total Plat Cover</label></div>
                                        <div class="col-md-2"><?=$row->total_plat_cover;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_imposisi_cover" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_imposisi_cover" value="imposisi cover" <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- TOTAL PLAT GAGAL CTCP COVER -->
                                        <div class="col-md-4"><label class="form-label">Total Plat Gagal Cover</label></div>
                                        <div class="col-md-2"><?=$row->total_plat_gagal_cover;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_ctcp_cover" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_ctcp_cover" value="ctcp cover" <?php echo $row->ctcp_status == "ctcp cover" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.CTCP COVER -->

                            <!-- CTCP ISI -->
                            <?php if($row->isi1plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <div class="row">
                                        <!-- NAMA OPERATOR CTCP ISI -->
                                        <div class="col-md-6" align="center"><label class="form-label">Nama Operator</label></div>
                                        <div class="col-md-6"><?=$row->namaoperatorctcp2?></div>
                                    </div><br>
                                    <div class="row">
                                        <!-- TOTAL PLAT CTCP ISI -->
                                        <div class="col-md-4"><label class="form-label">Total Plat Isi</label></div>
                                        <div class="col-md-2"><?=$row->total_plat_isi;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_imposisi_isi" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_imposisi_isi" value="imposisi isi" <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- TOTAL PLAT GAGAL CTCP ISI -->
                                        <div class="col-md-4"><label class="form-label">Total Plat Gagal Isi</label></div>
                                        <div class="col-md-2"><?=$row->total_plat_gagal_isi;?></div>
                                        <div class="col-md-3" align="left">
                                            <div class="form-check">
                                                <input type="text" name="status_ctcp_isi" value="" hidden>
                                                <input class="form-check-input" type="checkbox" name="status_ctcp_isi" value="ctcp isi" <?php echo $row->ctcp_status == "ctcp isi" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?> disabled>
                                                <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.CTCP ISI -->
                        </div><br>
                    <!-- /.INFORMASI CTCP -->
                    
                    <!-- BARIS 1 -->
                        <div class="row">
                            <!-- CTCP COVER 1 -->
                                <div class="col-md-6">
                                    <!-- CARD HEADER CTCP COVER 1 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-success">
                                                <div class="card-header text-center">
                                                    CTCP COVER 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER CTCP COVER 1 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN CTCP COVER 1 -->
                                            <div class="col-md-2"><label>Mesin</label></div>
                                            <div class="col-md-2"><?=$row->cover1mesin1;?></div>
                                            <!-- JUMLAH PLAT CTCP COVER 1 -->
                                            <div class="col-md-2"><label>Plate</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplatecover1;?></div>
                                            <!-- JUMLAH PLAT GAGAL CTCP COVER 1 -->
                                            <div class="col-md-2"><label>Plate Gagal</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplategagalcover1;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN CTCP COVER 1 -->
                                            <div class="col-md-12"><label>Rincian CTCP</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN CTCP COVER 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-1"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-1"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. CTCP</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->cover1plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1set1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1up1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover1warna1; ?></div>
                                                    <div class="col-md-1"><?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->cover1keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi1)); ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglctcp1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->cover1plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover1plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1set2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1up2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1warna2; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover1keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi2)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglctcp2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->cover1plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover1plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1set3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1up3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover1warna3; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->cover1status3 != "-" ?   $row->cover1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover1keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi3)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover1tglctcp3 )); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.CTCP COVER 1 -->

                            <!-- CTCP ISI 1 -->
                            <?php if($row->isi1plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER CTCP ISI 1 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    CTCP ISI 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER CTCP ISI 1 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN CTCP ISI 1 -->
                                            <div class="col-md-2"><label>Mesin</label></div>
                                            <div class="col-md-2"><?=$row->isi1mesin1;?></div>
                                            <!-- JUMLAH PLAT CTCP ISI 1 -->
                                            <div class="col-md-2"><label>Plate</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplateisi1;?></div>
                                            <!-- JUMLAH PLAT GAGAL CTCP ISI 1 -->
                                            <div class="col-md-2"><label>Plate Gagal</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplategagalisi1;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN CTCP ISI 1 -->
                                            <div class="col-md-12"><label>Rincian CTCP</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN CTCP ISI 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-1"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-1"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. CTCP</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi1plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1set1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi1warna1; ?></div>
                                                    <div class="col-md-1"><?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi1keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi1)); ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglctcp1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi1plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi1plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1set2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1warna2; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi1keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi2)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglctcp2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi1plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi1plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1set3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi1warna3; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi1keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi3)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi1tglctcp3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.CTCP ISI 1 -->
                        </div><br>
                    <!-- /.BARIS 1 -->

                    <!-- BARIS 2 -->
                        <div class="row">
                            <!-- CTCP COVER 2 -->
                            <!-- SAAT CTCP COVER 2 ADA ISINYA -->
                            <?php if($row->cover2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER CTCP COVER 2 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-success">
                                                <div class="card-header text-center">
                                                    CTCP COVER 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER CTCP COVER 2 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN CTCP COVER 2 -->
                                            <div class="col-md-2"><label>Mesin</label></div>
                                            <div class="col-md-2"><?=$row->cover2mesin1;?></div>
                                            <!-- JUMLAH PLAT CTCP COVER 2 -->
                                            <div class="col-md-2"><label>Plate</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplatecover2;?></div>
                                            <!-- JUMLAH PLAT GAGAL CTCP COVER 2 -->
                                            <div class="col-md-2"><label>Plate Gagal</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplategagalcover2;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN CTCP COVER 2 -->
                                            <div class="col-md-12"><label>Rincian CTCP</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN CTCP COVER 2 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-1"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-1"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. CTCP</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->cover2plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2set1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2up1; ?></div>
                                                    <div class="col-md-1"><?= $row->cover2warna1; ?></div>
                                                    <div class="col-md-1"><?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->cover2keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi1)); ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglctcp1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->cover2plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover2plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2set2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2up2; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2warna2; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover2keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi2)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglctcp2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->cover2plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->cover2plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2set3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2up3; ?></div>
                                                        <div class="col-md-1"><?= $row->cover2warna3; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->cover2status3 != "-" ?   $row->cover2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->cover2keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglimposisi3)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->cover2tglctcp3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- SAAT CTCP COVER 2 TIDAK ADA ISINYA -->
                            <?php if($row->cover2plat1 == 0) { ?>
                                <div class="col-md-6">
                                    <!-- CATATAN CTCP -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <br><textarea class="form-control" placeholder="catatan" name="catatan_ctcp" value="<?=$row->catatan_ctcp;?>" style="height: 150px;" disabled><?=$row->catatan_ctcp;?></textarea>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!-- TOMBOL -->
                                    <div class="row">
                                        <div class="col-md-6" align="left">
                                            <a href="<?=site_url()?>pracetak/Ctcp" class="btn btn-default">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.CTCP COVER 2 -->

                            <!-- CTCP ISI 2 -->
                            <?php if($row->isi2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER CTCP ISI 2 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    CTCP ISI 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER CTCP ISI 2 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN CTCP ISI 2 -->
                                            <div class="col-md-2"><label>Mesin</label></div>
                                            <div class="col-md-2"><?=$row->isi2mesin1;?></div>
                                            <!-- JUMLAH PLAT CTCP ISI 2 -->
                                            <div class="col-md-2"><label>Plate</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplateisi2;?></div>
                                            <!-- JUMLAH PLAT GAGAL CTCP ISI 2 -->
                                            <div class="col-md-2"><label>Plate Gagal</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplategagalisi2;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN CTCP ISI 2 -->
                                            <div class="col-md-12"><label>Rincian CTCP</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN CTCP ISI 2 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-1"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-1"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. CTCP</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi2plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2set1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi2warna1; ?></div>
                                                    <div class="col-md-1"><?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi2keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi1)); ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglctcp1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi2plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi2plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2set2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2warna2; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi2keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi2)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglctcp2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi2plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi2plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2set3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi2warna3; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi2keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglimposisi3)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi2tglctcp3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.CTCP ISI 2 -->
                        </div><br>
                    <!-- /.BARIS 2 -->

                    <!-- BARIS 3 -->
                        <div class="row">
                            <!-- CATATAN CTCP -->
                            <!-- SAAT CTCP COVER 2 ADA ISINYA -->
                            <?php if($row->cover2plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CATATAN CTCP -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <br><textarea class="form-control" placeholder="catatan" name="catatan_ctcp" value="<?=$row->catatan_ctcp;?>" style="height: 150px;" disabled><?=$row->catatan_ctcp;?></textarea>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!-- TOMBOL -->
                                    <div class="row">
                                        <div class="col-md-6" align="left">
                                            <a href="<?=site_url()?>pracetak/Ctcp" class="btn btn-default">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- SAAT CTCP COVER 2 TIDAK ADA ISINYA -->
                            <?php if($row->cover2plat1 == 0) { ?>
                                <div class="col-md-6"></div>
                            <?php } ?>
                            <!-- /.CATATAN CTCP -->

                            <!-- CTCP ISI 3 -->
                            <?php if($row->isi3plat1 != 0) { ?>
                                <div class="col-md-6">
                                    <!-- CARD HEADER CTCP ISI 3 -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    CTCP ISI 3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CARD BODY HEADER CTCP ISI 3 -->
                                     <div class="card-body p-3 mb-2 bg-light text-dark">
                                        <div class="row">
                                            <!-- MESIN CTCP ISI 3 -->
                                            <div class="col-md-2"><label>Mesin</label></div>
                                            <div class="col-md-2"><?=$row->isi3mesin1;?></div>
                                            <!-- JUMLAH PLAT CTCP ISI 3 -->
                                            <div class="col-md-2"><label>Plate</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplateisi3;?></div>
                                            <!-- JUMLAH PLAT GAGAL CTCP ISI 3 -->
                                            <div class="col-md-2"><label>Plate Gagal</label></div>
                                            <div class="col-md-2"><?=$row->jumlahplategagalisi3;?></div>
                                        </div><br>
                                        <div class="row">
                                            <!-- RINCIAN CTCP ISI 3 -->
                                            <div class="col-md-12"><label>Rincian CTCP</label></div>
                                            <div class="col-md-12">
                                                <!-- LABEL RINCIAN CTCP ISI 3 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><label class="form-label">Plate</label></div>
                                                    <div class="col-md-1"><label class="form-label">Set</label></div>
                                                    <div class="col-md-1"><label class="form-label">Lbr.Cetak</label></div>
                                                    <div class="col-md-1"><label class="form-label">Up</label></div>
                                                    <div class="col-md-1"><label class="form-label">Warna</label></div>
                                                    <div class="col-md-1"><label class="form-label">Proses</label></div>
                                                    <div class="col-md-2"><label class="form-label">Keterangan</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. Imposisi</label></div>
                                                    <div class="col-md-2"><label class="form-label">Tgl. CTCP</label></div>
                                                </div><hr>

                                                <!-- PLAT 1 -->
                                                <div class="row" align="center">
                                                    <div class="col-md-1"><?= $row->isi3plat1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3set1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3lbrcetak1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3up1; ?></div>
                                                    <div class="col-md-1"><?= $row->isi3warna1; ?></div>
                                                    <div class="col-md-1"><?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?></div>
                                                    <div class="col-md-2"><?= $row->isi3keterangan1; ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi1)); ?></div>
                                                    <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglctcp1)); ?></div>
                                                </div><br>
                                                <!-- /.PLAT 1 -->

                                                <!-- PLAT 2 -->
                                                <?php if($row->isi3plat2 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi3plat2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3set2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3lbrcetak2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3up2; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3warna2; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi3keterangan2; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi2)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglctcp2)); ?></div>
                                                    </div><br>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->

                                                <!-- PLAT 3 -->
                                                <?php if($row->isi3plat3 != 0) { ?>
                                                    <div class="row" align="center">
                                                        <div class="col-md-1"><?= $row->isi3plat3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3set3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3lbrcetak3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3up3; ?></div>
                                                        <div class="col-md-1"><?= $row->isi3warna3; ?></div>
                                                        <div class="col-md-1"><?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?></div>
                                                        <div class="col-md-2"><?= $row->isi3keterangan3; ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglimposisi3)); ?></div>
                                                        <div class="col-md-2"><?= date('d-m-Y', strtotime( $row->isi3tglctcp3)); ?></div>
                                                    </div>
                                                <?php } ?>
                                                <!-- /.PLAT 2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- /.CTCP ISI 3 -->
                        </div>
                    <!-- /.BARIS 3 -->
                <?php } ?>
            </form>   
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