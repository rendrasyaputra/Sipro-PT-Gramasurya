<?php 
    error_reporting(0);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak/Imposisi" class="btn btn-warning btn-lg">
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
        <h3 class="card-title">Data Imposisi</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
                            
            <?php foreach($imposisi as $s => $row) {?>  
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
                        <br>anggal Masuk
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->tanggal_masuk)); ?></label>
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
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->deadline)); ?></label>
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
                            if($row->klem != null){
                                $finishing .= 'klem, ';
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
            <?php foreach($imposisi as $s => $row) {?>  
            <form action="<?=site_url('pracetak/imposisi/proses')?>" method="post">            
            <input type="text" name="id_order"  value="<?= $row->id_order; ?>" hidden>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">                      
                        <input type="text" class="form-control" name="namaoperator1" value="<?= $row->namaoperator1; ?>"  >
                    </div>
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="namaoperator2" value="<?= $row->namaoperator2; ?>"  >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Cover</label>
                    </div>
                    <div class="col-md-1">
                        <?=$row->total_plat_cover;?>

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN-->
                        <!-- <input type="number" class="form-control" name="total_plat_cover" value="<?= $row->total_plat_cover; ?>"  > -->

                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_cover" value="imposisi cover" <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Isi</label>
                    </div>
                    <div class="col-md-1">
                        <?= $row->total_plat_isi; ?>

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN-->
                        <!-- <input type="number" class="form-control" name="total_plat_isi" value="<?= $row->total_plat_isi; ?>"  > -->

                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_isi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_isi" value="imposisi isi" <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi isi</label><br>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                IMPOSISI COVER 1
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            IMPOSISI ISI 1
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover1mesin1" value="<?= $row->cover1mesin1; ?>" class="form-select form-control">
                                    <option value="<?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?>"><?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?>   </option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <?= $row->jumlahplatecover1; ?>

                                    <!-- VARIABEL INPUTAN PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI RINCIAN IMPOSISI COVER DAN ISI, TETAP DI TAMPILKAN -->
                                    <!-- <input type="number" class="form-control" name="jumlahplatecover1" value="<?= $row->jumlahplatecover1; ?>"> -->

                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="cover1plat1" value="<?= $row->cover1plat1; ?>"><br>
                                            <input type="number" class="form-control" name="cover1plat2" value="<?= $row->cover1plat2; ?>"><br>
                                            <input type="number" class="form-control" name="cover1plat3" value="<?= $row->cover1plat3; ?>">
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col" hidden>
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="cover1set1" value="<?= $row->cover1set1; ?>" ><br>
                                            <input class="form-control" name="cover1set2" value="<?= $row->cover1set2; ?>" ><br>
                                            <input class="form-control" name="cover1set3" value="<?= $row->cover1set3; ?>" >
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input type="text" class="form-control" name="cover1lbrcetak1" value="<?= $row->cover1lbrcetak1; ?>" ><br>
                                            <input type="text" class="form-control" name="cover1lbrcetak2" value="<?= $row->cover1lbrcetak2; ?>" ><br>
                                            <input type="text" class="form-control" name="cover1lbrcetak3" value="<?= $row->cover1lbrcetak3; ?>" >
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="cover1up1" value="<?= $row->cover1up1; ?>"><br>
                                            <input type="number" class="form-control" name="cover1up2" value="<?= $row->cover1up2; ?>"><br>
                                            <input type="number" class="form-control" name="cover1up3" value="<?= $row->cover1up3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="cover1warna1" value="<?= $row->cover1warna1; ?>"><br>
                                            <input type="number" class="form-control" name="cover1warna2" value="<?= $row->cover1warna2; ?>"><br>
                                            <input type="number" class="form-control" name="cover1warna3" value="<?= $row->cover1warna3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="cover1status1" value="<?= $row->cover1status1; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?>"><?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="cover1status2" value="<?= $row->cover1status2; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?>"><?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="cover1status3" value="<?= $row->cover1status3; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover1status3 != "-" ?   $row->cover1status3  : '-' ?>"><?php  echo $row->cover1status3 != "-" ?   $row->cover1status3  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="cover1keterangan1" value="<?= $row->cover1keterangan1; ?>"><br>
                                            <input type="text" class="form-control" name="cover1keterangan2" value="<?= $row->cover1keterangan2; ?>"><br>
                                            <input type="text" class="form-control" name="cover1keterangan3" value="<?= $row->cover1keterangan3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label>
                                            <input type="date" class="form-control" name="cover1tglimposisi1" value="<?= $row->cover1tglimposisi1; ?>"><br>
                                            <input type="date" class="form-control" name="cover1tglimposisi2" value="<?= $row->cover1tglimposisi2; ?>"><br>
                                            <input type="date" class="form-control" name="cover1tglimposisi3" value="<?= $row->cover1tglimposisi3; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="isi1mesin1" value="<?= $row->isi1mesin1; ?>" class="form-select form-control">
                                    <option value="<?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?>"><?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?>   </option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <?= $row->jumlahplateisi1; ?>

                                    <!-- VARIABEL INPUTAN PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI RINCIAN IMPOSISI COVER DAN ISI, TETAP DI TAMPILKAN -->
                                    <!-- <input type="number" class="form-control" name="jumlahplateisi1" value="<?= $row->jumlahplateisi1; ?>"> -->

                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi1plat1" value="<?= $row->isi1plat1; ?>"><br>
                                            <input type="number" class="form-control" name="isi1plat2" value="<?= $row->isi1plat2; ?>"><br>
                                            <input type="number" class="form-control" name="isi1plat3" value="<?= $row->isi1plat3; ?>">
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col" hidden>
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi1set1" value="<?= $row->isi1set1; ?>" ><br>
                                            <input class="form-control" name="isi1set2" value="<?= $row->isi1set2; ?>" ><br>
                                            <input class="form-control" name="isi1set3" value="<?= $row->isi1set3; ?>" >
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input type="number" class="form-control" name="isi1lbrcetak1" value="<?= $row->isi1lbrcetak1; ?>" ><br>
                                            <input type="number" class="form-control" name="isi1lbrcetak2" value="<?= $row->isi1lbrcetak2; ?>" ><br>
                                            <input type="number" class="form-control" name="isi1lbrcetak3" value="<?= $row->isi1lbrcetak3; ?>" >
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="isi1up1" value="<?= $row->isi1up1; ?>"><br>
                                            <input type="number" class="form-control" name="isi1up2" value="<?= $row->isi1up2; ?>"><br>
                                            <input type="number" class="form-control" name="isi1up3" value="<?= $row->isi1up3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="isi1warna1" value="<?= $row->isi1warna1; ?>"><br>
                                            <input type="number" class="form-control" name="isi1warna2" value="<?= $row->isi1warna2; ?>"><br>
                                            <input type="number" class="form-control" name="isi1warna3" value="<?= $row->isi1warna3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="isi1status1" value="<?= $row->isi1status1; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?>"><?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="isi1status2" value="<?= $row->isi1status2; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?>"><?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="isi1status3" value="<?= $row->isi1status3; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?>"><?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="isi1keterangan1" value="<?= $row->isi1keterangan1; ?>"><br>
                                            <input type="text" class="form-control" name="isi1keterangan2" value="<?= $row->isi1keterangan2; ?>"><br>
                                            <input type="text" class="form-control" name="isi1keterangan3" value="<?= $row->isi1keterangan3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label>
                                            <input type="date" class="form-control" name="isi1tglimposisi1" value="<?= $row->isi1tglimposisi1; ?>"><br>
                                            <input type="date" class="form-control" name="isi1tglimposisi2" value="<?= $row->isi1tglimposisi2; ?>"><br>
                                            <input type="date" class="form-control" name="isi1tglimposisi3" value="<?= $row->isi1tglimposisi3; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                IMPOSISI COVER 2
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            IMPOSISI ISI 2
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover2mesin1" value="<?= $row->cover2mesin1; ?>" class="form-select form-control">
                                    <option value="<?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?>"><?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?>   </option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <?= $row->jumlahplatecover2; ?>

                                    <!-- VARIABEL INPUTAN PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI RINCIAN IMPOSISI COVER DAN ISI, TETAP DI TAMPILKAN -->
                                    <!-- <input type="number" class="form-control" name="jumlahplatecover2" value="<?= $row->jumlahplatecover2; ?>"> -->

                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="cover2plat1" value="<?= $row->cover2plat1; ?>" ><br>
                                            <input type="number" class="form-control" name="cover2plat2" value="<?= $row->cover2plat2; ?>"><br>
                                            <input type="number" class="form-control" name="cover2plat3" value="<?= $row->cover2plat3; ?>">
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col" hidden>
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="cover2set1" value="<?= $row->cover2set1; ?>" ><br>
                                            <input class="form-control" name="cover2set2" value="<?= $row->cover2set2; ?>"><br>
                                            <input class="form-control" name="cover2set3"  value="<?= $row->cover2set3; ?>">
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input type="number" class="form-control" name="cover2lbrcetak1" value="<?= $row->cover2lbrcetak1; ?>" ><br>
                                            <input type="number" class="form-control" name="cover2lbrcetak2" value="<?= $row->cover2lbrcetak2; ?>" ><br>
                                            <input type="number" class="form-control" name="cover2lbrcetak3" value="<?= $row->cover2lbrcetak3; ?>" >
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="cover2up1" value="<?= $row->cover2up1; ?>"><br>
                                            <input type="number" class="form-control" name="cover2up2" value="<?= $row->cover2up2; ?>"><br>
                                            <input type="number" class="form-control" name="cover2up3" value="<?= $row->cover2up3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="cover2warna1" value="<?= $row->cover2warna1; ?>"><br>
                                            <input type="number" class="form-control" name="cover2warna2" value="<?= $row->cover2warna2; ?>"><br>
                                            <input type="number" class="form-control" name="cover2warna3" value="<?= $row->cover2warna3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="cover2status1" value="<?= $row->cover2status1; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?>"><?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="cover2status2" value="<?= $row->cover2status2; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?>"><?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="cover2status3" value="<?= $row->cover2status3; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->cover2status3 != "-" ?   $row->cover2status3  : '-' ?>"><?php  echo $row->cover2status3 != "-" ?   $row->cover2status3  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="cover2keterangan1" value="<?= $row->cover2keterangan1; ?>"><br>
                                            <input type="text" class="form-control" name="cover2keterangan2" value="<?= $row->cover2keterangan2; ?>"><br>
                                            <input type="text" class="form-control" name="cover2keterangan3" value="<?= $row->cover2keterangan3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label>
                                            <input type="date" class="form-control" name="cover2tglimposisi1" value="<?= $row->cover2tglimposisi1; ?>"><br>
                                            <input type="date" class="form-control" name="cover2tglimposisi2" value="<?= $row->cover2tglimposisi2; ?>"><br>
                                            <input type="date" class="form-control" name="cover2tglimposisi3" value="<?= $row->cover2tglimposisi3; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="isi2mesin1" value="<?= $row->isi2mesin1; ?>" class="form-select form-control">
                                    <option value="<?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?>"><?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?>   </option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <?= $row->jumlahplateisi2; ?>

                                    <!-- VARIABEL INPUTAN PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI RINCIAN IMPOSISI COVER DAN ISI, TETAP DI TAMPILKAN -->
                                    <!-- <input type="number" class="form-control" name="jumlahplateisi2" value="<?= $row->jumlahplateisi2; ?>"> -->

                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi2plat1" value="<?= $row->isi2plat1; ?>"><br>
                                            <input type="number" class="form-control" name="isi2plat2" value="<?= $row->isi2plat2; ?>"><br>
                                            <input type="number" class="form-control" name="isi2plat3" value="<?= $row->isi2plat3; ?>">
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col" hidden>
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi2set1" value="<?= $row->isi2set1; ?>" ><br>
                                            <input class="form-control" name="isi2set2" value="<?= $row->isi2set2; ?>" ><br>
                                            <input class="form-control" name="isi2set3" value="<?= $row->isi2set3; ?>" >
                                        </div>

                                        <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input type="number" class="form-control" name="isi2lbrcetak1" value="<?= $row->isi2lbrcetak1; ?>" ><br>
                                            <input type="number" class="form-control" name="isi2lbrcetak2" value="<?= $row->isi2lbrcetak2; ?>" ><br>
                                            <input type="number" class="form-control" name="isi2lbrcetak3" value="<?= $row->isi2lbrcetak3; ?>" >
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="isi2up1" value="<?= $row->isi2up1; ?>"><br>
                                            <input type="number" class="form-control" name="isi2up2" value="<?= $row->isi2up2; ?>"><br>
                                            <input type="number" class="form-control" name="isi2up3" value="<?= $row->isi2up3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="isi2warna1" value="<?= $row->isi2warna1; ?>"><br>
                                            <input type="number" class="form-control" name="isi2warna2" value="<?= $row->isi2warna2; ?>"><br>
                                            <input type="number" class="form-control" name="isi2warna3" value="<?= $row->isi2warna3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="isi2status1" value="<?= $row->isi2status1; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?>"><?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="isi2status2" value="<?= $row->isi2status2; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?>"><?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select><br>
                                            <select name="isi2status3" value="<?= $row->isi2status3; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?>"><?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?>   </option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="isi2keterangan1" value="<?= $row->isi2keterangan1; ?>"><br>
                                            <input type="text" class="form-control" name="isi2keterangan2" value="<?= $row->isi2keterangan2; ?>"><br>
                                            <input type="text" class="form-control" name="isi2keterangan3" value="<?= $row->isi2keterangan3; ?>">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label>
                                            <input type="date" class="form-control" name="isi2tglimposisi1" value="<?= $row->isi2tglimposisi1; ?>"><br>
                                            <input type="date" class="form-control" name="isi2tglimposisi2" value="<?= $row->isi2tglimposisi2; ?>"><br>
                                            <input type="date" class="form-control" name="isi2tglimposisi3" value="<?= $row->isi2tglimposisi3; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <br><br><div class="row">
                                        <div class="col-md-12">
                                            <br><textarea class="form-control" placeholder="catatan" name="catatan_imposisi" value="<?= $row->catatan_imposisi; ?>" style="height: 150px;"><?= $row->catatan_imposisi; ?></textarea>
                                        </div>
                                    </div><br><br>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6" align="left">
                                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                            </div>
                            <div class="col-md-6" align="right">
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card border bg-info">
                                    <div class="card-header text-center">
                                        IMPOSISI ISI 3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <div class="row">
                                        <div class="col-md-3" align="center">
                                            <label class="form-label">Mesin</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="isi3mesin1" value="<?= $row->isi3mesin1; ?>" class="form-select form-control">
                                            <option value="<?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?>"><?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?>   </option>
                                                <option value="102">102</option>
                                                <option value="74">74</option>
                                                <option value="72">72</option>
                                                <option value="Tokko">Tokko</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" align="center">
                                            <label class="form-label">Plate</label>
                                        </div>
                                        <div class="col-md-3">
                                            <?= $row->jumlahplateisi3; ?>

                                            <!-- VARIABEL INPUTAN PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI RINCIAN IMPOSISI COVER DAN ISI, TETAP DI TAMPILKAN -->
                                            <!-- <input type="number" class="form-control" name="jumlahplateisi3" value="<?= $row->jumlahplateisi3; ?>"> -->

                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label">Rincian Imposisi</label>
                                                </div>
                                            </div>
                                            <div class="row" align="center">
                                                <div class="col">
                                                    <label class="form-label">Plate</label>
                                                    <input type="number" class="form-control" name="isi3plat1" value="<?= $row->isi3plat1; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3plat2" value="<?= $row->isi3plat2; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3plat3" value="<?= $row->isi3plat3; ?>">
                                                </div>

                                                <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                                <div class="col" hidden>
                                                    <label class="form-label">Set</label>
                                                    <input class="form-control" name="isi3set1" value="<?= $row->isi3set1; ?>" ><br>
                                                    <input class="form-control" name="isi3set2" value="<?= $row->isi3set2; ?>" ><br>
                                                    <input class="form-control" name="isi3set3" value="<?= $row->isi3set3; ?>" >
                                                </div>

                                                <!-- BAGIAN SET DAN LBR.CETAK BUKAN INPUT MANUAL, MELAINKAN INPUT DARI HASIL PERHITUNGAN !! -->
                                                <div class="col">
                                                    <label class="form-label">Lbr.Cetak</label>
                                                    <input type="number" class="form-control" name="isi3lbrcetak1" value="<?= $row->isi3lbrcetak1; ?>" ><br>
                                                    <input type="number" class="form-control" name="isi3lbrcetak2" value="<?= $row->isi3lbrcetak2; ?>" ><br>
                                                    <input type="number" class="form-control" name="isi3lbrcetak3" value="<?= $row->isi3lbrcetak3; ?>" >
                                                </div>

                                                <div class="col">
                                                    <label class="form-label">Up</label>
                                                    <input type="number" class="form-control" name="isi3up1" value="<?= $row->isi3up1; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3up2" value="<?= $row->isi3up2; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3up3" value="<?= $row->isi3up3; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Warna</label>
                                                    <input type="number" class="form-control" name="isi3warna1" value="<?= $row->isi3warna1; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3warna2" value="<?= $row->isi3warna2; ?>"><br>
                                                    <input type="number" class="form-control" name="isi3warna3" value="<?= $row->isi3warna3; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Status</label>
                                                    <select name="isi3status1" value="<?= $row->isi3status1; ?>" class="form-select form-control">
                                                    <option value="<?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?>"><?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?>   </option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                        <option value="-">-</option>
                                                    </select><br>
                                                    <select name="isi3status2" value="<?= $row->isi3status2; ?>" class="form-select form-control">
                                                    <option value="<?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?>"><?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?>   </option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                        <option value="-">-</option>
                                                    </select><br>
                                                    <select name="isi3status3" value="<?= $row->isi3status3; ?>" class="form-select form-control">
                                                    <option value="<?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?>"><?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?>   </option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                        <option value="-">-</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="isi3keterangan1" value="<?= $row->isi3keterangan1; ?>"><br>
                                                    <input type="text" class="form-control" name="isi3keterangan2" value="<?= $row->isi3keterangan2; ?>"><br>
                                                    <input type="text" class="form-control" name="isi3keterangan3" value="<?= $row->isi3keterangan3; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tgl. Imposisi</label>
                                                    <input type="date" class="form-control" name="isi3tglimposisi1" value="<?= $row->isi3tglimposisi1; ?>"><br>
                                                    <input type="date" class="form-control" name="isi3tglimposisi2" value="<?= $row->isi3tglimposisi2; ?>"><br>
                                                    <input type="date" class="form-control" name="isi3tglimposisi3"value="<?= $row->isi3tglimposisi3; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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