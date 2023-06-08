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
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_binding" class="btn btn-success">
                            BINDING
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_hardcover" class="btn btn-success">
                            HARDCOVER
                          </a>                          
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_jahit" class="btn btn-success">
                            JAHIT
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_potong" class="btn btn-success">
                            POTONG
                        </td>                      
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_sub"   class="btn btn-success">
                            SUB
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
                      
                    <?php if(($row->id_jadwal_binding == $id_jadwal_binding_max[$nilai_jadwal]  or $row->id_jadwal_binding == null ) and ($row->id_jadwal_hardcover == $id_jadwal_hardcover_max[$nilai_jadwal]  or $row->id_jadwal_hardcover == null ) and ($row->id_jadwal_jahit == $id_jadwal_jahit_max[$nilai_jadwal]  or $row->id_jadwal_jahit == null ) and ($row->id_jadwal_fa_potong == $id_jadwal_fa_potong_max[$nilai_jadwal]  or $row->id_jadwal_fa_potong == null ) and ($row->id_jadwal_sub == $id_jadwal_sub_max[$nilai_jadwal]  or $row->id_jadwal_sub == null) and $id_banding[$nilai] != $id_banding[$nilai-1]) 
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
                            <?php if($row->tanggal_pelaksanaan_binding != "0000-00-00") {?>
                        <td <?php echo $row->status_binding == "binding" ?  "style='color: red'" : "" ?>><?= $tanggal_binding[$nilai]; ?></td>
                            <?php } else {?> <td></td> <?php } ?>
                            
                            <?php if($row->tanggal_pelaksanaan_hardcover != "0000-00-00") {?>
                        <td <?php echo $row->status_hardcover == "hardcover" ?  "style='color: red'" : "" ?>><?= $tanggal_hardcover[$nilai]; ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_pelaksanaan_jahit != "0000-00-00") {?>
                        <td <?php echo $row->status_jahit == "jahit" ?  "style='color: red'" : "" ?>><?= $tanggal_jahit[$nilai]; ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_pelaksanaan_fa_potong != "0000-00-00") {?>
                        <td <?php echo $row->status_fa_potong == "fa potong" ?  "style='color: red'" : "" ?>><?= $tanggal_fa_potong[$nilai]; ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_pelaksanaan_sub != "0000-00-00") {?>
                        <td <?php echo $row->status_sub == "sub" ?  "style='color: red'" : "" ?>><?= $tanggal_sub[$nilai]; ?></td>
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
                  <form action="<?=site_url('finishing/FinishingAkhir/proses_fa')?>" method="post">
                  <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>

                  <input type="text" name="id_binding"  value="<?php echo $row->id_binding; ?>" hidden>
                  <input type="text" name="id_hardcover"  value="<?php echo $row->id_hardcover; ?>" hidden>
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
                            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#binding<?= $row->id_order; ?>" data-toggle="tab">BINDING</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#hardcover<?= $row->id_order; ?>" data-toggle="tab">HARDCOVER</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#jahit<?= $row->id_order; ?>" data-toggle="tab">JAHIT</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#fa_potong<?= $row->id_order; ?>" data-toggle="tab">POTONG</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#sub<?= $row->id_order; ?>" data-toggle="tab">SUB</a></li>
                          </ul>
                          <!-- <h3>SO dari db</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="card-body">
                            <div class="tab-content">
                            <div class="tab-pane" id="jahit<?= $row->id_order; ?>">
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
                                    <?php if($row->id_jahit == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_jahit"  id="tgll_jahit<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_jahit"  id="tgll_jahit<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_jahit == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_jahit<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_jahit<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin jahit</b>
                                  </div>                                                                                                    
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_jahit == null) {?>                                     
                                    <textarea name="keterangan_jadwal_jahit" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_jahit" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_jahit == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="hardcover<?= $row->id_order; ?>">
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
                                    <?php if($row->id_hardcover == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_hardcover"  id="tgll_hardcover<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_hardcover"  id="tgll_hardcover<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_hardcover == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_hardcover<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_hardcover<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin hardcover</b>
                                  </div>                                                                   
                                  
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_hardcover == null) {?>                                     
                                    <textarea name="keterangan_jadwal_hardcover" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_hardcover" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_hardcover == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="sub<?= $row->id_order; ?>">
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
                                    <b>Tanggal SUB</b><br>         
                                    <?php if($row->id_sub == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_sub"  id="tgll_sub<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_sub"  id="tgll_sub<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_sub == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_sub<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_sub<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-12">
                                    Jenis SUB<br>
                                    <div class="card-body">

                                    <?php if($row->id_sub == null) {?>     
                                      <div class="row">
                                        <div class="col-md-2">                                      
                                        <input type="text" name="jenis_sub_binding" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_binding" value="binding" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">binding</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_hardcover" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_hardcover" value="hardcover" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">hardcover</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_jahit" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_jahit" value="jahit" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">jahit</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_fa_potong" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_fa_potong" value="fa potong" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">potong</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_spiral" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_spiral" value="spiral" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">spiral</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_klemseng" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_klemseng" value="klemseng" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">klemseng</label>
                                        </div>                                                                               
                                        
                                      </div>
                                    <?php }else{?>     
                                      <div class="row">
                                        <div class="col-md-2">                                      
                                        <input type="text" name="jenis_sub_binding" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_binding" value="binding" id="flexCheckDefault" <?php echo $row->jenis_sub_binding == "binding" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">binding</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_hardcover" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_hardcover" value="hardcover" id="flexCheckDefault" <?php echo $row->jenis_sub_hardcover == "hardcover" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">hardcover</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_jahit" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_jahit" value="jahit" id="flexCheckDefault" <?php echo $row->jenis_sub_jahit == "jahit" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">jahit</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_fa_potong" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_fa_potong" value="fa potong" id="flexCheckDefault" <?php echo $row->jenis_sub_fa_potong == "fa potong" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">potong</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_spiral" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_spiral" value="spiral" id="flexCheckDefault" <?php echo $row->jenis_sub_spiral == "spiral" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">spiral</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input type="text" name="jenis_sub_klemseng" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_klemseng" value="klemseng" id="flexCheckDefault" <?php echo $row->jenis_sub_klemseng == "klemseng" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">klemseng</label>
                                        </div>                                                                               
                                        
                                      </div>
                                    <?php }?>     
                                      
                                      
                                    </div>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <?php if($row->id_sub == null) {?>                                     
                                    <textarea name="keterangan_jadwal_sub" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_sub" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_sub == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane active" id="binding<?= $row->id_order; ?>">
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
                                    <?php if($row->id_binding == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_binding"  id="tgll_binding<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_binding"  id="tgll_binding<?= $row->id_order.$row->id_order; ?>">
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_binding == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_binding<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_binding<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin binding</b>
                                  </div>                                                                   
                                  
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_binding == null) {?>                                     
                                    <textarea name="keterangan_jadwal_binding" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_binding" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_binding == null) {?>  
                                      <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                    <?php }else{ ?>
                                      <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="fa_potong<?= $row->id_order; ?>">
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
                                    <?php if($row->id_fa_potong == null) {?>                           
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_fa_potong"  id="tgll_fa_potong<?= $row->id_order; ?>" > 
                                    <?php }else{ ?>                                                                       
                                      <input type="date" class="form-control"  name="tanggal_pelaksanaan_fa_potong"  id="tgll_fa_potong<?= $row->id_order.$row->id_order; ?>" >
                                      <?php } ?>
                                  </div>  
                                  <div class="col-md-6"><br>       
                                    <?php if($row->id_fa_potong == null) {?>                                                           
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_fa_potong<?= $row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php }else{ ?>   
                                      <a  class="btn btn-default" onclick="document.getElementById('tgll_fa_potong<?= $row->id_order.$row->id_order; ?>').value='';">Hapus tanggal</a>
                                    <?php } ?>
                                  </div>  
                                </div><br><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin potong</b>
                                  </div>                                                                                                     
                                </div><hr><br>

                                <h4>Keterangan</h4>
                                <?php if($row->id_fa_potong == null) {?>                                     
                                    <textarea name="keterangan_jadwal_fa_potong" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php }else{ ?>                                  
                                    <textarea name="keterangan_jadwal_fa_potong" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>
                                <?php } ?>
                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <?php if($row->id_fa_potong == null) {?>  
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