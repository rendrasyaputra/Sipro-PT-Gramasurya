<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>cetak/Jadwalmesin/jadwal_102a" class="btn btn-warning btn-lg">
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
        <?php foreach($jm as $s => $row) {?> 
          <h3 class="card-title coba">Pembuatan SPK</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
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
                <br><label class="form-label"><?= date('d F Y', strtotime($row->tanggal_masuk)); ?></label>
              </div>
              <div class="col-md-4">
                <br>Nama Order
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
                <br><label class="form-label"><?= date('d F Y', strtotime($row->deadline)); ?></label>
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
              
              <!-- VER 1.1 START --><br>
<div class="card" style="background: #A9A9A9">
              <div class="row">
                <div class="col"></div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>COVER</b>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>ISI</b>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>AKHIR</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-2">
                <div class="card" style="background: #A9A9A9">
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>CTCP</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                       <b>KERTAS</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>POTONG</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>CETAK</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>FINISHING</b>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->ctcp_cover_1!=null && $row->ctcp_cover_1!='-'? "cover 1 : ".$row->ctcp_cover_1."<br>": "" ?>
                    <?php echo $row->plat_cover_1!=null && $row->plat_cover_1!='-'? "plat cover 1 : ".$row->plat_cover_1."<br>": "" ?>
                    <?php echo $row->ctcp_cover_2!=null && $row->ctcp_cover_2!='-'? "cover 2 : ".$row->ctcp_cover_2."<br>": "" ?>
                    <?php echo $row->plat_cover_2!=null && $row->plat_cover_2!='-'? "plat cover 2 : ".$row->plat_cover_2."<br>": "" ?>
                    <?php echo $row->ctcp_cover_3!=null && $row->ctcp_cover_3!='-'? "cover 3 : ".$row->ctcp_cover_3."<br>": "" ?>
                    <?php echo $row->plat_cover_3!=null && $row->plat_cover_3!='-'? "plat cover 3 : ".$row->plat_cover_3."<br>": "" ?>
                  </div>
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->ctcp_isi_1!=null && $row->ctcp_isi_1!='-'? "isi 1 : ".$row->ctcp_isi_1."<br>": "" ?>
                    <?php echo $row->plat_isi_1!=null && $row->plat_isi_1!='-'? "plat isi 1 : ".$row->plat_isi_1."<br>": "" ?>
                    <?php echo $row->ctcp_isi_2!=null && $row->ctcp_isi_2!='-'? "isi 2 : ".$row->ctcp_isi_2."<br>": "" ?>
                    <?php echo $row->plat_isi_2!=null && $row->plat_isi_2!='-'? "plat isi 2 : ".$row->plat_isi_2."<br>": "" ?>
                    <?php echo $row->ctcp_isi_3!=null && $row->ctcp_isi_3!='-'? "isi 3 : ".$row->ctcp_isi_3."<br>": "" ?>
                    <?php echo $row->plat_isi_3!=null && $row->plat_isi_3!='-'? "plat isi 3 : ".$row->plat_isi_3."<br>": "" ?>
                  </div>
                  <div class="col-md-4">
                    <h1>-</h1>
                  </div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->jenis_kertas_cover_1!=null && $row->jenis_kertas_cover_1!='-'? "kertas 1 : ".$row->jenis_kertas_cover_1."<br>": "" ?>
                    <?php echo $row->ukuran_plano_cover_1!=null && $row->ukuran_plano_cover_1!='-'? "ukuran 1 : ".$row->ukuran_plano_cover_1."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_1!=null && $row->jumlah_kertas_cover_1!='-'? "jumlah 1 : ".$row->jumlah_kertas_cover_1."<br>": "" ?>
                    <?php echo $row->jenis_kertas_cover_2!=null && $row->jenis_kertas_cover_2!='-'? "kertas 2 : ".$row->jenis_kertas_cover_2."<br>": "" ?>
                    <?php echo $row->ukuran_plano_cover_2!=null && $row->ukuran_plano_cover_2!='-'? "ukuran 2 : ".$row->ukuran_plano_cover_2."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_2!=null && $row->jumlah_kertas_cover_2!='-'? "jumlah 2 : ".$row->jumlah_kertas_cover_2."<br>": "" ?>
                    <?php echo $row->jenis_kertas_cover_3!=null && $row->jenis_kertas_cover_3!='-'? "kertas 3 : ".$row->jenis_kertas_cover_3."<br>": "" ?>
                    <?php echo $row->ukuran_plano_cover_3!=null && $row->ukuran_plano_cover_3!='-'? "ukuran 3 : ".$row->ukuran_plano_cover_3."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_3!=null && $row->jumlah_kertas_cover_3!='-'? "jumlah 3 : ".$row->jumlah_kertas_cover_3."<br>": "" ?>
                  </div>
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->jenis_kertas_isi_1!=null && $row->jenis_kertas_isi_1!='-'? "kertas 1 : ".$row->jenis_kertas_isi_1."<br>": "" ?>
                    <?php echo $row->ukuran_plano_isi_1!=null && $row->ukuran_plano_isi_1!='-'? "ukuran 1 : ".$row->ukuran_plano_isi_1."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_isi_1!=null && $row->jumlah_kertas_isi_1!='-'? "jumlah 1 : ".$row->jumlah_kertas_isi_1."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_2!=null && $row->jenis_kertas_isi_2!='-'? "kertas 2 : ".$row->jenis_kertas_isi_2."<br>": "" ?>
                    <?php echo $row->ukuran_plano_isi_2!=null && $row->ukuran_plano_isi_2!='-'? "ukuran 2 : ".$row->ukuran_plano_isi_2."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_isi_2!=null && $row->jumlah_kertas_isi_2!='-'? "jumlah 2 : ".$row->jumlah_kertas_isi_2."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_3!=null && $row->jenis_kertas_isi_3!='-'? "kertas 3 : ".$row->jenis_kertas_isi_3."<br>": "" ?>
                    <?php echo $row->ukuran_plano_isi_3!=null && $row->ukuran_plano_isi_3!='-'? "ukuran 3 : ".$row->ukuran_plano_isi_3."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_isi_3!=null && $row->jumlah_kertas_isi_3!='-'? "jumlah 3 : ".$row->jumlah_kertas_isi_3."<br>": "" ?>
                  </div>
                  <div class="col-md-4 text-center">
                    <h1>-</h1>
                  </div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->potong_cover_1!=null? "potong 1 : ".$row->potong_cover_1."<br>": "" ?>
                    <?php echo $row->potong_cover_2!=null? "potong 2 : ".$row->potong_cover_2."<br>": "" ?>
                    <?php echo $row->potong_cover_3!=null? "potong 3 : ".$row->potong_cover_3."<br>": "" ?>
                  </div>
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->potong_isi_1!=null? "potong 1 : ".$row->potong_isi_1."<br>": "" ?>
                    <?php echo $row->potong_isi_2!=null? "potong 2 : ".$row->potong_isi_2."<br>": "" ?>
                    <?php echo $row->potong_isi_3!=null? "potong 3 : ".$row->potong_isi_3."<br>": "" ?>
                    <?php echo $row->potong_isi_4!=null? "potong 4 : ".$row->potong_isi_4."<br>": "" ?>
                  </div>
                  <div class="col-md-4 text-center">
                    <h1>-</h1>
                  </div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->mesin_cover_1!=null && $row->mesin_cover_1!='-'? "Mesin 1 : ".$row->mesin_cover_1."<br>": "" ?>
                    <?php echo $row->warna_cover_1!=null && $row->warna_cover_1!='-'? "Warna 1 : ".$row->warna_cover_1."<br>": "" ?>
                    <?php echo $row->insit_cover_1!=null? "Insit 1 : ".$row->insit_cover_1."<br>": "" ?>
                    <?php echo $row->mesin_cover_2!=null && $row->mesin_cover_2!='-'? "Mesin 2 : ".$row->mesin_cover_2."<br>": "" ?>
                    <?php echo $row->warna_cover_2!=null && $row->warna_cover_2!='-'? "Warna 2 : ".$row->warna_cover_2."<br>": "" ?>
                    <?php echo $row->insit_cover_2!=null? "Insit 2 : ".$row->insit_cover_2."<br>": "" ?>
                    <?php echo $row->mesin_cover_3!=null && $row->mesin_cover_3!='-'? "Mesin 3 : ".$row->mesin_cover_3."<br>": "" ?>
                    <?php echo $row->warna_cover_3!=null && $row->warna_cover_3!='-'? "Warna 3 : ".$row->warna_cover_3."<br>": "" ?>
                    <?php echo $row->insit_cover_3!=null? "Insit 3 : ".$row->insit_cover_3."<br>": "" ?>
                    <?php echo $row->keterangan_cetak_cover!=null? "keterangan : ".$row->keterangan_cetak_cover."<br>": "" ?>
                  </div>
                  <div class="col-md-4" align="left" style="padding-left: 70px;">
                    <?php echo $row->mesin_isi_1!=null && $row->mesin_isi_1!='-'? "Mesin 1 : ".$row->mesin_isi_1."<br>": "" ?>
                    <?php echo $row->warna_isi_1!=null && $row->warna_isi_1!='-'? "Warna 1 : ".$row->warna_isi_1."<br>": "" ?>
                    <?php echo $row->insit_isi_1!=null? "Insit 1 : ".$row->insit_isi_1."<br>": "" ?>
                    <?php echo $row->mesin_isi_2!=null && $row->mesin_isi_2!='-'? "Mesin 2 : ".$row->mesin_isi_2."<br>": "" ?>
                    <?php echo $row->warna_isi_2!=null && $row->warna_isi_2!='-'? "Warna 2 : ".$row->warna_isi_2."<br>": "" ?>
                    <?php echo $row->insit_isi_2!=null? "Insit 2 : ".$row->insit_isi_2."<br>": "" ?>
                    <?php echo $row->mesin_isi_3!=null && $row->mesin_isi_3!='-'? "Mesin 3 : ".$row->mesin_isi_3."<br>": "" ?>
                    <?php echo $row->warna_isi_3!=null && $row->warna_isi_3!='-'? "Warna 3 : ".$row->warna_isi_3."<br>": "" ?>
                    <?php echo $row->insit_isi_3!=null? "Insit 3 : ".$row->insit_isi_3."<br>": "" ?>
                    <?php echo $row->keterangan_cetak_isi!=null? "keterangan : ".$row->keterangan_cetak_isi."<br>": "" ?>
                  </div>
                  <div class="col-md-4 text-center">
                    <h1>-</h1>
                  </div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                    <div class="col-md-4" align="left" style="padding-left: 70px;">
                      <?php 
                        $finishing = "";
                        if($row->doff != null){
                            $finishing .= "doff, ";
                        }
                        if($row->emboss != null){
                            $finishing .= 'emboss, ';
                        }   
                        if($row->glossy != null){
                            $finishing .= 'Glossy, ';
                        } 
                        if($row->hotprint != null){
                            $finishing .= 'hotprint, ';
                        }    
                        if($row->spot_uvi != null){
                            $finishing .= 'spot uvi, ';
                        }   
                        if($row->uvi != null){
                            $finishing .= 'uvi, ';
                        } 
                        
                        $finishing = rtrim($finishing, ", ");
                        echo $finishing;
                      ?>
                    </div>
                    <div class="col-md-4" align="left" style="padding-left: 70px;">
                      <?php 
                        $finishing = "";                                   
                        if($row->lipat != null){
                            $finishing .= 'lipat, ';
                        }   
                        if($row->susun != null){
                            $finishing .= 'susun, ';
                        } 
                        
                        $finishing = rtrim($finishing, ", ");
                        echo $finishing;
                      ?>
                    </div>
                    <div class="col-md-4" align="left" style="padding-left: 70px;">
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
                    </div>
                    </div>
                    </div>
                    </div>
            <!-- <div class="card" style="background: #A9A9A9">
              <div class="row">
                <div class="col"></div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>COVER</b>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>ISI</b>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card-header text-center">
                    <b>AKHIR</b>
                  </div>
                </div>
              </div>
            </div>

            <div class="row text-center">
              <div class="col-md-2">
                <div class="card" style="background: #A9A9A9">
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>CTCP</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>KERTAS</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>POTONG</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>CETAK</b>
                    </div>
                  </div><hr>
                  <div class="row" style="min-height: 300px;padding-top: 120px;">
                    <div class="col-md-12">
                      <b>FINISHING</b>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                </div><hr>
                <div class="row" style="min-height: 300px;padding-top: 20px;">
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                  <div class="col-md-4 text-center">-</div>
                </div>
              </div>
            </div> -->
            <br><hr><br>
            <h3 class="text-center">Form Pembuatan SPK</h3>
            <div class="card-body">
            <form action="<?=site_url('cetak/jadwalmesin/proses')?>" method="POST">
            <input type="text" name="id_mesin_102a"  value="<?php echo $row->id_mesin_102a; ?>" hidden>
            <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
              <div class="row">
                <div class="col-md-4">
                  <br>Nomor SO
                  <br><label class="form-label"><?= $row->nomor_so; ?> </label>
                </div>
                <div class="col-md-4">
                  <br>Nama Pemesan
                  <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                </div>
                <div class="col-md-4">
                  <br>Nama Order
                  <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <br>Tanggal Masuk
                  <br><label class="form-label"><?= date('d F Y', strtotime($row->tanggal_masuk)); ?></label>
                </div>
                <div class="col-md-4">
                  <br>Deadline
                  <br><label class="form-label"><?= date('d F Y', strtotime($row->deadline)); ?></label>
                </div>
                <div class="col-md-4"></div>
              </div><br>
              <div class="row">
                <div class="col">
                  <h5>Ukuran Plano <label><?= $row->ukuran; ?></label></h5>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Tanggal Buat SPK
                </div>
                <div class="col-md-4">
                  <input type="date" class="form-control" name="tanggal_buat_spk" placeholder="Tanggal Buat SPK" required>
                </div>
                <div class="col-sm-2" align="right">
                  Jenis Kertas
                </div>
                <div class="col-md-4">
                  <label>
                  <?php if($row->jenis_cetakan == "Cover"){ ?>
                  <?php echo $row->jenis_kertas_cover_1!=null && $row->jenis_kertas_cover_1!='-'? "".$row->jenis_kertas_cover_1."<br>": "" ?>
                  <?php echo $row->jenis_kertas_cover_2!=null && $row->jenis_kertas_cover_2!='-'? "".$row->jenis_kertas_cover_2."<br>": "" ?>
                  <?php echo $row->jenis_kertas_cover_3!=null && $row->jenis_kertas_cover_3!='-'? "".$row->jenis_kertas_cover_3."<br>": "" ?>
                  <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?php echo $row->jenis_kertas_isi_1!=null && $row->jenis_kertas_isi_1!='-'? "".$row->jenis_kertas_isi_1."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_2!=null && $row->jenis_kertas_isi_2!='-'? "".$row->jenis_kertas_isi_2."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_3!=null && $row->jenis_kertas_isi_3!='-'? "".$row->jenis_kertas_isi_3."<br>": "" ?>
                  <?php } ?>
                  </label>
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Ukuran Potong
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="ukuran_potong" placeholder="Ukuran Potong" required>
                </div>
                <div class="col-sm-2" align="right">
                  Model Potongan
                </div>
                <div class="col-md-4">
                  <label><?php if($row->jenis_cetakan == "Cover"){?> 
                    <?php echo $row->potong_cover_1!=null? "potong 1 : ".$row->potong_cover_1."<br>": "" ?>
                    <?php echo $row->potong_cover_2!=null? "potong 2 : ".$row->potong_cover_2."<br>": "" ?>
                    <?php echo $row->potong_cover_3!=null? "potong 3 : ".$row->potong_cover_3."<br>": "" ?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?php echo $row->potong_isi_1!=null? "potong 1 : ".$row->potong_isi_1."<br>": "" ?>
                    <?php echo $row->potong_isi_2!=null? "potong 2 : ".$row->potong_isi_2."<br>": "" ?>
                    <?php echo $row->potong_isi_3!=null? "potong 3 : ".$row->potong_isi_3."<br>": "" ?>
                    <?php echo $row->potong_isi_4!=null? "potong 4 : ".$row->potong_isi_4."<br>": "" ?>
                    <?php } ?>
                  </label>
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Jumlah Plat
                </div>
                <div class="col-md-4">
                   <label><?php if($row->jenis_cetakan == "Cover"){?> 
                    <?=$row->total_plat_cover;?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?= $row->total_plat_isi;?>
                    <?php } ?>
                  </label>
                </div>
                <div class="col-sm-2" align="right">
                  Jumlah Kertas
                </div>
                <div class="col-md-4">
                  <label>
                  <?php if($row->jenis_cetakan == "Cover"){?> 
                    <?php echo $row->jumlah_kertas_cover_1!=null && $row->jumlah_kertas_cover_1!='-'? " ".$row->jumlah_kertas_cover_1."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_2!=null && $row->jumlah_kertas_cover_2!='-'? " ".$row->jumlah_kertas_cover_2."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_3!=null && $row->jumlah_kertas_cover_3!='-'? " ".$row->jumlah_kertas_cover_3."<br>": "" ?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                      <?php echo $row->jumlah_kertas_isi_1!=null && $row->jumlah_kertas_isi_1!='-'? " ".$row->jumlah_kertas_isi_1."<br>": "" ?>
                      <?php echo $row->jumlah_kertas_isi_2!=null && $row->jumlah_kertas_isi_2!='-'? " ".$row->jumlah_kertas_isi_2."<br>": "" ?>
                      <?php echo $row->jumlah_kertas_isi_3!=null && $row->jumlah_kertas_isi_3!='-'? " ".$row->jumlah_kertas_isi_3."<br>": "" ?>
                    <?php } ?>
                  </label>
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Mesin Cetak
                </div>
                <div class="col-md-4">
                  <label><?= $row->nama_mesin?></label>
                </div>
                <div class="col-sm-2" align="right">
                  Jumlah Cetak
                </div>
                <div class="col-md-4">
                  <input type="number" class="form-control" name="jumlah_cetak" placeholder="Jumlah Cetak" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Jenis Cetakan
                </div>
                <div class="col-md-4">
                  <label><?= $row->jenis_cetakan?></label>
                </div>
                <div class="col-sm-2" align="right">
                  Warna Cetak
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                  <input type="text" name="muka1_fc_bw_warna" value="" hidden>
                  <input class="form-check-input" type="checkbox" name="muka1_fc_bw_warna" value="1 Muka : FC / BW / WARNA">
                  <label class="form-check-label" for="flexCheckDefault">1 Muka : FC / BW / WARNA</label><br>

                  <input type="text" name="muka2_fc_fc" value="" hidden>
                  <input class="form-check-input" type="checkbox" name="muka2_fc_fc" value="2 Muka : FC / FC-BW / BW-BW">
                  <label class="form-check-label" for="flexCheckDefault">2 Muka : FC / FC-BW / BW-BW</label><br>

                  <input type="text" name="muka2_blk" value="" hidden>
                  <input class="form-check-input" type="checkbox" name="muka2_blk" value="2 Muka BLK (Balik Kertas)">
                  <label class="form-check-label" for="flexCheckDefault">2 Muka BLK (Balik Kertas)</label><br>

                  <input type="text" name="muka2_blg" value="" hidden>
                  <input class="form-check-input" type="checkbox" name="muka2_blg" value="2 Muka BLG (Balik Graper)">
                  <label class="form-check-label" for="flexCheckDefault">2 Muka BLG (Balik Graper)</label>
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-2" align="right">
                  Insit
                </div>
                <div class="col-md-4">
                  <label><?php if($row->jenis_cetakan == "Cover"){ ?>
                        <?php echo $row->insit_cover_1!=null && $row->insit_cover_1!='-'? "".$row->insit_cover_1."<br>": "" ?>
                        <?php echo $row->insit_cover_2!=null && $row->insit_cover_2!='-'? "".$row->insit_cover_2."<br>": "" ?>
                        <?php echo $row->insit_cover_3!=null && $row->insit_cover_3!='-'? "".$row->insit_cover_3."<br>": "" ?>
                      <?php } else if ($row->jenis_cetakan == "Isi"){?>
                        <?php echo $row->insit_isi_1!=null && $row->insit_isi_1!='-'? "".$row->insit_isi_1."<br>": "" ?>
                        <?php echo $row->insit_isi_2!=null && $row->insit_isi_2!='-'? "".$row->insit_isi_2."<br>": "" ?>
                        <?php echo $row->insit_isi_3!=null && $row->insit_isi_3!='-'? "".$row->insit_isi_3."<br>": "" ?>
                      <?php } ?></label>
                </div>
              </div><br>
              <div class="row">
                <div class="col">
                  <textarea class="form-control" name="keterangan_spk" placeholder="Keterangan" style="min-height: 250px;"></textarea>
                </div>
              </div><br>
              <div class="row">
                <div class="col" align="right">
                  <button type="submit" name="addspk102a" class="btn btn-success">Simpan</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
        <?php } ?>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->