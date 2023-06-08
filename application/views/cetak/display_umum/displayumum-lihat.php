<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
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
            <?php foreach($so as $s => $row) {?> 
            <h3 class="card-title"><label><?= $row->nomor_so; ?></label></h3>
            

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button> -->
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
              </div>
              
                <!-- VER 1.0 START -->
                <!-- <br><div class="card" style="background: #A9A9A9">
                    <div class="row">
                        <div class="col-md-3"></div>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3" style="padding: 5% 5%;min-height: 100px;">
                                    <b>CTCP</b>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Cover1 Plat 74</a><br>
                                    <a>Jum Ctcp Cover1 4</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Isi1 Plat 72</a><br>
                                    <a>Jum Ctcp Isi1 8</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <b>FINISHING AKHIR</b><br>
                                    <a>Finishing Akhir Jahit Kawat</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 5% 5%;min-height: 100px;">
                                    <b>CTCP</b>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Cover1 Plat 74</a><br>
                                    <a>Jum Ctcp Cover1 4</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Isi1 Plat 72</a><br>
                                    <a>Jum Ctcp Isi1 8</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <b>FINISHING AKHIR</b><br>
                                    <a>Finishing Akhir Jahit Kawat</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 5% 5%;min-height: 100px;">
                                    <b>CTCP</b>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Cover1 Plat 74</a><br>
                                    <a>Jum Ctcp Cover1 4</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Isi1 Plat 72</a><br>
                                    <a>Jum Ctcp Isi1 8</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <b>FINISHING AKHIR</b><br>
                                    <a>Finishing Akhir Jahit Kawat</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 5% 5%;min-height: 100px;">
                                    <b>CTCP</b>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Cover1 Plat 74</a><br>
                                    <a>Jum Ctcp Cover1 4</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <a>Ctcp Isi1 Plat 72</a><br>
                                    <a>Jum Ctcp Isi1 8</a>
                                </div>
                                <div class="col-md-3"><br>
                                    <b>FINISHING AKHIR</b><br>
                                    <a>Finishing Akhir Jahit Kawat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- VER 1.0 END -->
                
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

                <!-- VER 1.1 START -->
                <!-- <br><div class="card" style="background: #A9A9A9">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="card-header text-center">
                                <b>COVER</b>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card-header text-center">
                                <b>AKHIR</b>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="card-header text-center">
                                <b>AKHIR</b>
                            </div>
                        </div> -->
                    </div>
                <!-- </div>
                <div class="row text-center">
                    <div class="col-md-2">
                        <div class="card" style="background: #A9A9A9">
                            <div class="row" style="min-height: 150px;padding-top: 50px;">
                                <div class="col-md-12">
                                    <b>CTCP</b>
                                </div>
                            </div><hr>
                            <div class="row" style="min-height: 150px;padding-top: 50px;">
                                <div class="col-md-12">
                                    <b>KERTAS</b>
                                </div>
                            </div><hr>
                            <div class="row" style="min-height: 150px;padding-top: 50px;">
                                <div class="col-md-12">
                                    <b>CETAK</b>
                                </div>
                            </div><hr>
                            <div class="row" style="min-height: 150px;padding-top: 50px;">
                                <div class="col-md-12">
                                    <b>FINISHING</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row" style="min-height: 150px;padding-top: 20px;">
                            <div class="col-md-6">
                                Ctcp Cover1 Plat 74<br>
                                Jum Ctcp Cover1 4
                            </div>
                            <div class="col-md-6">
                                Ctcp Isi1 Plat 72<br>
                                Jum Ctcp Isi1 8
                            </div>
                            <!-- <div class="col-md-4">
                                <b>FINISHING AKHIR</b><br>
                                Finishing Akhir Jahit Kawat
                            </div> -->
                        <!-- </div><hr>
                        <div class="row" style="min-height: 150px;padding-top: 20px;">
                            <div class="col-md-6 text-center">
                                Kertas Cov1 AC/Ivory_2Muka 230gr<br>
                                Ukuran Kertas Cov1 79 x 109<br>
                                Jum Kertas Cov1 530
                            </div>
                            <div class="col-md-6 text-center">
                                Kertas Isi1 HVS 60gr<br>
                                Ukuran Kertas Isi1 65 x 100<br>
                                Jum Kertas Isi1 8300
                            </div>
                             <div class="col-md-4 text-center">
                                <b>PRAPACKING</b>
                            </div> -->
                        <!-- </div><hr>
                        <div class="row" style="min-height: 150px;padding-top: 20px;">
                            <div class="col-md-6 text-center">
                                Mesin Cov1 SM 74 4w - A<br>
                                Warna Cov1 4/0<br>
                                Insit Cover1 50<br>
                                Ket Cov1 1 SET 2UP
                            </div>
                            <div class="col-md-6 text-center">
                                Mesin Isi1 Oliver 72 1w<br>
                                Warna Isi1 1/1<br>
                                Insit Isi1 50<br>
                                Ket Isi1 1/1 WARNA WARNI 8 PLAT GANTI
                            </div>  -->
                            <!-- <div class="col-md-4 text-center">
                                <b>KIRIM</b><br>
                                Kirim Langsung
                            </div> -->
                        <!-- </div><hr>
                        <div class="row" style="min-height: 150px;padding-top: 20px;">
                            <div class="col-md-6 text-center">
                                Finishing Cover1 Uvi
                            </div>
                            <div class="col-md-6 text-center">
                                Finishing Isi 1Lipat,Susun
                            </div>  -->
                            <!-- <div class="col-md-4 text-center">
                                <b>ALAMAT KIRIM</b>
                            </div> -->
                        </div>
                    </div>
                </div> 
                <!-- VER 1.1 END -->

                <!-- <div class="row text-center">
                    <div class="col-md-4">
                        <b>Job Preparation</b>
                    </div>
                    <div class="col-md-4">
                        <b>Pra Cetak</b>
                    </div>
                    <div class="col-md-4">
                        <b>Mengetahui/Memeriksa</b>
                    </div>
                </div>
                <div class="row text-center" style="margin-top: 100px">
                    <div class="col-md-4">
                        <b>( Sulis )</b>
                    </div>
                    <div class="col-md-4">
                        <b>( Iwan Setiyawan )</b>
                    </div>
                    <div class="col-md-4">
                        <b>( A. Latif B )</b>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="<?=site_url()?>cetak/DisplayUmum" class="btn btn-default float-right">Kembali</a>
        </div>
        <!-- /.card-footer-->
        <?php } ?>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content