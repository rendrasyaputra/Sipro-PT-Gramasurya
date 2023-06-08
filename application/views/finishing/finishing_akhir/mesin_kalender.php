<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING AKHIR</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jadwal Finishing Akhir</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
                    <thead>
                      <tr align="center">
                        <td>Nomor SO</td>
                        <td>Tanggal Masuk</td>
                        <td>Deadline</td>
                        <td>Nama Pemesan</td>
                        <td>Nama Order</td>
                        <td>Ukuran Plano</td>
                        <td>Oplag</td>
                        <td>Halaman</td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_klemseng" class="btn btn-success">
                            klemseng
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_spiral" class="btn btn-success">
                            spiral
                          </a>                          
                          </a>
                        </td>                        
                        <td>Status</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <?php $nilai=0;?>
                    <?php $nilai_jadwal=0;?>
                    <?php $id_banding[-1]=null;?>

                    <?php foreach($fa as $s => $row) {?>                     
                      <?php $id_banding[$nilai]=$row->id_order;?>                      

                    <?php if(($row->id_jadwal_klemseng == $id_jadwal_klemseng_max[$nilai_jadwal]  or $row->id_jadwal_klemseng == null ) and 
                    ($row->id_jadwal_spiral == $id_jadwal_spiral_max[$nilai_jadwal]  or $row->id_jadwal_spiral == null )  and
                     $id_banding[$nilai] != $id_banding[$nilai-1]) 
                    { ?>
                      <tr>
                      <td align="center"><?= $row->nomor_so; ?></td>
                        <td><?= date('d-m-Y', strtotime($row->tanggal_masuk)); ?></td>
                        <td style="color: red"><?= date('d-m-Y', strtotime($row->deadline)); ?></td>
                        <td><?= $row->nama_pemesan; ?></td>
                        <td><?= $row->nama_orderan; ?></td>
                        <td><?= $row->ukuran; ?></td>
                        <td><?= $row->oplag; ?></td>
                        <td><?= $row->halaman; ?></td>
                            <?php if($row->tanggal_pelaksanaan_klemseng != "0000-00-00") {?>
                        <td <?php echo $row->status_klemseng == "klemseng" ?  "style='color: red'" : "" ?>><?= $tanggal_klemseng[$nilai]; ?></td>
                            <?php } else {?> <td></td> <?php } ?>
                            
                            <?php if($row->tanggal_pelaksanaan_spiral != "0000-00-00") {?>
                        <td <?php echo $row->status_spiral == "spiral" ?  "style='color: red'" : "" ?>><?= $tanggal_spiral[$nilai] ?></td>
                            <?php } else {?> <td></td> <?php } ?>
                      
                        <td>
                             <?php if( $row->so_status == "finishing akhir" || $row->so_status == "quality control"){ ?>
                                      <label style="color:red;"> Finishing Akhir</label>
                                    <?php } else {echo $row->so_status;}?>                                            
                        </td>                        
                        <td align="center">
                          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order; ?>">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </button>
                          <!-- <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa" class="btn btn-success">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </a> -->
                        </td>
                      </tr>

                       <?php $nilai++;} ?>   
                         
                      <?php $nilai_jadwal++;} ?>                      
                    </tbody>
            
                </table>

                <?php foreach($fa as $s => $row) {?> 
                  <form action="<?=site_url('finishing/FinishingAkhir/proses_fa_kalender')?>" method="post">
                  <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>

                  <input type="text" name="id_klemseng"  value="<?php echo $row->id_klemseng; ?>" hidden>
                  <input type="text" name="id_spiral"  value="<?php echo $row->id_spiral; ?>" hidden>
                  <input type="text" name="id_jahit"  value="<?php echo $row->id_jahit; ?>" hidden>
                  <input type="text" name="id_fa_potong"  value="<?php echo $row->id_fa_potong; ?>" hidden>
                  <input type="text" name="id_sub"  value="<?php echo $row->id_sub; ?>" hidden>

                <div id="myModal<?= $row->id_order; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                      </div>
                      <!-- body modal -->
                      <div class="card">
                        <div class="card-header" align="center">
                          <ul class="nav nav-pills row">
                            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#klemseng<?= $row->id_order; ?>" data-toggle="tab">klemseng</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#spiral<?= $row->id_order; ?>" data-toggle="tab">spiral</a></li>                           
                          </ul>
                          <!-- <h3>SO dari db</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="card-body">
                            <div class="tab-content">                           

                              <div class="tab-pane" id="spiral<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-4">
                                    Laminasi<br>
                                    <b>
                                      <?php 
                                          $lam = "";
                                          if($row->doff != null){
                                            $lam .= "doff, ";
                                          }
                                          if($row->glossy != null){
                                            $lam .= 'glossy, ';
                                          }   
                                          if($row->uvi != null){
                                            $lam .= 'uvi, ';
                                          } 
                                          
                                          $lam = rtrim($lam, ", ");
                                          echo $lam;
                                        ?>
                                    </b>
                                  </div>
                                </div>
                                <hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    <b>Tanggal Pelaksanaan</b><br>         
                                    <?php if($row->id_spiral == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_spiral"  id="tgll_spiral<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_spiral"  id="tgll_spiral<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_spiral == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_spiral<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_spiral<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin spiral</b>
                                  </div>                                                                                                     
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_spiral == null) {?>                                     
                                    <textarea name="keterangan_jadwal_spiral" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_spiral" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_spiral == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              

                              <div class="tab-pane active" id="klemseng<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-4">
                                    Laminasi<br>
                                    <b>
                                      <?php 
                                          $lam = "";
                                          if($row->doff != null){
                                            $lam .= "doff, ";
                                          }
                                          if($row->glossy != null){
                                            $lam .= 'glossy, ';
                                          }   
                                          if($row->uvi != null){
                                            $lam .= 'uvi, ';
                                          } 
                                          
                                          $lam = rtrim($lam, ", ");
                                          echo $lam;
                                        ?>
                                    </b>
                                  </div>
                                </div>
                                <hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    <b>Tanggal Pelaksanaan</b><br>         
                                    <?php if($row->id_klemseng == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_klemseng"  id="tgll_klemseng<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_klemseng"  id="tgll_klemseng<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_klemseng == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_klemseng<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_klemseng<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin klemseng</b>
                                  </div>                                                                                                     
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_klemseng == null) {?>                                     
                                    <textarea name="keterangan_jadwal_klemseng" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_klemseng" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_klemseng == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div><br>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>

                  </form>
                <?php } ?>

                </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  
  <!-- /.row -->
</section>
<!-- /.content -->