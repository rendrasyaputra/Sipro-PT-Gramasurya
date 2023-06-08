<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CETAK</h1><br>
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#mesin1" data-toggle="tab">MESIN 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#mesin2" data-toggle="tab">MESIN 2</a></li>
            </ul>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Jadwal Umum</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="active tab-pane" id="mesin1">
              <table id="table1" class="table table-bordered table-hover" style="font-size: 12px;">
                <thead>
                  <tr align="center">
                    <td rowspan="2" style="padding-top: 20px;">Nomor SO</td>
                    <td rowspan="2" style="padding-top: 20px;">Tanggal Masuk</td>
                    <td rowspan="2" style="padding-top: 20px;">Deadline</td>
                    <td rowspan="2" style="padding-top: 20px;">Nama Pemesan</td>
                    <td rowspan="2" style="padding-top: 20px;">Nama Order</td>
                    <td rowspan="2" style="padding-top: 20px;">Ukuran</td>
                    <td rowspan="2" style="padding-top: 20px;">Oplag</td>
                    <td rowspan="2" style="padding-top: 20px;">Jumlah Kertas</td>
                    <td colspan="2">Mesin 72</td>
                    <td colspan="2">Mesin 74a</td>
                    <td colspan="2">Mesin 74b</td>
                    <td rowspan="2" style="padding-top: 30px;">Status</td>
                    <td rowspan="2" style="padding-top: 30px;">Actions</td>
                  </tr>
                  <tr>
                    <td>cover</td>
                    <td>isi</td>
                    <td>cover</td>
                    <td>isi</td>
                    <td>cover</td>
                    <td>isi</td>
                  </tr>
                </thead>
                
                  <?php $nilai=0;?>                    
                  <?php $id_banding[-1]=null;?>

                  <?php foreach($ju as $s => $row) {?>
                  <?php $id_banding[$nilai]=$row->id_order;?>   

                  <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>
               
                <tr>
                  <td align="center"><?= $row->nomor_so; ?></td>
                  <td><?= $row->tanggal_masuk; ?></td>
                  <td style="color: red"><?= $row->deadline; ?></td>
                  <td><?= $row->nama_pemesan; ?></td>
                  <td><?= $row->nama_orderan; ?></td>
                  <td><?= $row->ukuran; ?></td>
                  <td><?= $row->oplag; ?></td>
                  <td><?= $row->total_kertas; ?></td>
                  <!-- <td> </td>
                  <td></td>
                  <td></td>
                  <td></td> -->

                  <!-- /////////////////////////////////////////////////////////////////////////////////////////////// eksekusi hehe -->
                      
                  <td><?= $tgl_cover_72[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_72[$nilai]; ?></td>

                  <td><?= $tgl_cover_74a[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_74a[$nilai]; ?></td>

                  <td><?= $tgl_cover_74b[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_74b[$nilai]; ?></td>

                  <td><?php 
                    if($row->status_cetak ==null) 
                      echo $row->so_status;
                    else if($row->status_cetak !=null)
                      echo $row->status_cetak;   
                    ?></td>
                  <td align="center">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order ?>">
                      <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                    </button>
                  </td>              
                </tr>
                <?php $nilai++;} ?>
                <?php } ?>
              </table>
            </div>
            <div class="tab-pane" id="mesin2">
              <table id="table2" class="table table-bordered table-hover" style="font-size: 12px;">
                <thead>
                  <tr align="center">
                    <td rowspan="2" style="padding-top: 20px;">Nomor SO</td>
                    <td rowspan="2" style="padding-top: 20px;">Tanggal Masuk</td>
                    <td rowspan="2" style="padding-top: 20px;">Deadline</td>
                    <td rowspan="2" style="padding-top: 20px;">Nama Pemesan</td>
                    <td rowspan="2" style="padding-top: 20px;">Nama Order</td>
                    <td rowspan="2" style="padding-top: 20px;">Ukuran</td>
                    <td rowspan="2" style="padding-top: 20px;">Oplag</td>
                    <td rowspan="2" style="padding-top: 20px;">Jumlah Kertas</td>
                    <td colspan="2">Mesin 102a</td>
                    <td colspan="2">Mesin 102b</td>
                    <td colspan="2">Mesin Tokko</td>
                    <td rowspan="2" style="padding-top: 30px;">Status</td>
                    <td rowspan="2" style="padding-top: 30px;">Actions</td>
                  </tr>
                  <tr>
                    <td>cover</td>
                    <td>isi</td>
                    <td>cover</td>
                    <td>isi</td>
                    <td>cover</td>
                    <td>isi</td>
                  </tr>
                </thead>

                  <?php $nilai=0;?>                    
                  <?php $id_banding[-1]=null;?>

                  <?php foreach($ju as $s => $row) {?>
                  <?php $id_banding[$nilai]=$row->id_order;?>   

                  <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>
               
                <tr>
                  <td align="center"><?= $row->nomor_so; ?></td>
                  <td><?= $row->tanggal_masuk; ?></td>
                  <td style="color: red"><?= $row->deadline; ?></td>
                  <td><?= $row->nama_pemesan; ?></td>
                  <td><?= $row->nama_orderan; ?></td>
                  <td><?= $row->ukuran; ?></td>
                  <td><?= $row->oplag; ?></td>
                  <td><?= $row->total_kertas; ?></td>
                  <!-- <td> </td>
                  <td></td>
                  <td></td>
                  <td></td> -->

                  <!-- /////////////////////////////////////////////////////////////////////////////////////////////// eksekusi hehe -->
                      
                  
                  <td><?= $tgl_cover_102a[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_102a[$nilai]; ?></td>

                  <td><?= $tgl_cover_102b[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_102b[$nilai]; ?></td>

                  <td><?= $tgl_cover_tokko[$nilai]; ?></td>                                   
                  <td><?= $tgl_isi_tokko[$nilai]; ?></td>
                                           

                  <td><?php 
                    if($row->status_cetak ==null) 
                      echo $row->so_status;
                    else if($row->status_cetak !=null)
                      echo $row->status_cetak;   
                    ?></td>
                  <td align="center">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order ?>">
                      <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                    </button>
                  </td>              
                </tr>
                <?php $nilai++;} ?>
                <?php } ?>
              </table>
            </div>
          </div>
          
          <?php foreach($ju as $s => $row) {?>  
          <form action="<?=site_url('cetak/Jadwalumum/proses')?>" method="post">

          <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
          <input type="text" name="id_mesin_72"  value="<?php echo $row->id_mesin_72; ?>" hidden>
          <input type="text" name="id_mesin_74a"  value="<?php echo $row->id_mesin_74a; ?>" hidden>
    
          <div id="myModal<?= $row->id_order ?>" class="modal fade" role="dialog">
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
                      <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#mesin72<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 72</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin74a<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 74A</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin74b<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 74B</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin102a<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 102A</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin102b<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 102B</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesintokko<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin Tokko</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="mesin72<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= date('d F Y', strtotime($row->tanggal_masuk)); ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= date('d F Y', strtotime($row->deadline)); ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_72"  value="mesin72" hidden>
                          <input type="number" name="kertas_72"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 72</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_72" placeholder="Tanggal Pelaksanaan Cover" id="tgl_72<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_72" id="tgl_72<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_72 == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_72" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_72" >
                                    <option value="<?php  echo $row->operator != "-" ?   $row->operator  : '-' ?>"><?php  echo $row->operator != "-" ?   $row->operator  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_72 == null) {?>                                     
                                <input type="number" class="form-control" name="target_72" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_72" value="<?= $row->target; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_72"  placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_72 == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_72" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_72" >
                                  <option value="<?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>"><?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                  <input type="number" class="form-control" name="set_72" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_72" value="<?= $row->set?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_72 == null) {?>
                              <input type="number" class="form-control" name="druk_72" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_72" hidden>
                              <label><?= $row->druk?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="add72">Jadwal</button>                            
                          </div>
                        </div>
                      </div>






          <!--/////////////////////////////////////////////////////Mesin 74a  -->
                      <div class="tab-pane" id="mesin74a<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_74a"  value="mesin74a" hidden>
                          <input type="number" name="kertas_74a"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 74 - A</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74a" placeholder="Tanggal Pelaksanaan Cover" id="tgl_72<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74a" id="tgl_72<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_74a; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_72 == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_74a" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_74a" >
                                    <option value="<?php  echo $row->operator_74a != "-" ?   $row->operator_74a  : '-' ?>"><?php  echo $row->operator_74a != "-" ?   $row->operator_74a  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_72 == null) {?>                                     
                                <input type="number" class="form-control" name="target_74a" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_74a" value="<?= $row->target_74a; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_74a" placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_72 == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74a" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74a" >
                                  <option value="<?php  echo $row->jenis_cetakan_74a != "-" ?   $row->jenis_cetakan_74a  : '-' ?>"><?php  echo $row->jenis_cetakan_74a != "-" ?   $row->jenis_cetakan_74a  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                  <input type="number" class="form-control" name="set_74a" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_74a" value="<?= $row->set_74a?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_72 == null) {?>
                              <input type="number" class="form-control" name="druk_74a" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_74a" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="add74a">Jadwal</button>
                          </div>
                        </div>
                      </div>
                      <!-- akhir Mesin 74a -->

                      <!-- mulai mesin 74B -->
                      <div class="tab-pane" id="mesin74b<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_74b"  value="mesin74b" hidden>
                          <input type="number" name="kertas_74b"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 74 - B</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_74b == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74b" placeholder="Tanggal Pelaksanaan Cover" id="tgl_74b<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74b" id="tgl_74b<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_74b; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_74b == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_74b" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_74b" >
                                    <option value="<?php  echo $row->operator_74b != "-" ?   $row->operator_74b  : '-' ?>"><?php  echo $row->operator_74b != "-" ?   $row->operator_74b  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_74b == null) {?>                                     
                                <input type="number" class="form-control" name="target_74b" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_74b" value="<?= $row->target_74b; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_74b" placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_74b == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74b" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74b" >
                                  <option value="<?php  echo $row->jenis_cetakan_74b != "-" ?   $row->jenis_cetakan_74b  : '-' ?>"><?php  echo $row->jenis_cetakan_74b != "-" ?   $row->jenis_cetakan_74b  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_74b == null) {?>                                     
                                  <input type="number" class="form-control" name="set_74b" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_74b" value="<?= $row->set_74b?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_74b == null) {?>
                              <input type="number" class="form-control" name="druk_74b" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_74b" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="add74b">Jadwal</button>
                          </div>
                        </div>
                      </div>
                      <!-- akhir mesin 74b -->

                      <!-- mulai mesin 102A -->

                      <div class="tab-pane" id="mesin102a<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_102a"  value="mesin102a" hidden>
                          <input type="number" name="kertas_102a"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 102 - A</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_102a == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_102a" placeholder="Tanggal Pelaksanaan Cover" id="tgl_102a<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_102a" id="tgl_102a<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_102a; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_102a == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_102a" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_102a" >
                                    <option value="<?php  echo $row->operator_102a != "-" ?   $row->operator_102a  : '-' ?>"><?php  echo $row->operator_102a != "-" ?   $row->operator_102a  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_102a == null) {?>                                     
                                <input type="number" class="form-control" name="target_102a" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_102a" value="<?= $row->target_102a; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_102a" value="<?= $row->kru_operator_102a; ?>" placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_102a == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_102a" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_102a" >
                                  <option value="<?php  echo $row->jenis_cetakan_102a != "-" ?   $row->jenis_cetakan_102a  : '-' ?>"><?php  echo $row->jenis_cetakan_102a != "-" ?   $row->jenis_cetakan_102a  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_102a == null) {?>                                     
                                  <input type="number" class="form-control" name="set_102a" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_102a" value="<?= $row->set_102a?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_102a == null) {?>
                              <input type="number" class="form-control" name="druk_102a" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_102a" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="add102a">Jadwal</button>
                          </div>
                        </div>
                      </div>          

                      <!-- mulai mesin 102A -->

                      <!-- mulai mesin 102B -->

                      <div class="tab-pane" id="mesin102b<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_102b"  value="mesin102b" hidden>
                          <input type="number" name="kertas_102b"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 102 - B</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_102b == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_102b" placeholder="Tanggal Pelaksanaan Cover" id="tgl_102b<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_102b" id="tgl_102b<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_102b; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_102b == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_102b" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_102b" >
                                    <option value="<?php  echo $row->operator_102b != "-" ?   $row->operator_102b  : '-' ?>"><?php  echo $row->operator_102b != "-" ?   $row->operator_102b  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_102b == null) {?>                                     
                                <input type="number" class="form-control" name="target_102b" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_102b" value="<?= $row->target_102b; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_102b" placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_102b == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_102b" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_102b" >
                                  <option value="<?php  echo $row->jenis_cetakan_102b != "-" ?   $row->jenis_cetakan_102b  : '-' ?>"><?php  echo $row->jenis_cetakan_102b != "-" ?   $row->jenis_cetakan_102b  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_102b == null) {?>                                     
                                  <input type="number" class="form-control" name="set_102b" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_102b" value="<?= $row->set_102b?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_102b == null) {?>
                              <input type="number" class="form-control" name="druk_102b" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_102b" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="add102b">Jadwal</button>
                          </div>
                        </div>
                      </div>

                      <!-- akhir mesin 102B -->


                      <!-- mulai mesin TOKKO -->

                      <div class="tab-pane" id="mesintokko<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
                            <label class="form-label">
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
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_tokko"  value="mesintokko" hidden>
                          <input type="number" name="kertas_tokko"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin TOKKO</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_tokko == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_tokko" placeholder="Tanggal Pelaksanaan Cover" id="tgl_tokko<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_tokko" id="tgl_tokko<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_tokko; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_tokko == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_tokko" >
                                    <option value="-">-</option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_tokko" >
                                    <option value="<?php  echo $row->operator_tokko != "-" ?   $row->operator_tokko  : '-' ?>"><?php  echo $row->operator_tokko != "-" ?   $row->operator_tokko  : '-' ?></option>
                                    <option value="Maryono">Maryono</option>
                                    <option value="Ferri">Ferri</option>
                                    <option value="Agus">Agus</option>
                                    <option value="Ngatiman">Ngatiman</option>
                                    <option value="Heru">Heru</option>
                                    <option value="Ariyanto">Ariyanto</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="Nasikin">Nasikin</option>
                                    <option value="Buchori">Buchori</option>
                                    <option value="Irfan">Irfan</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="-">-</option>
                                  </select>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_tokko == null) {?>                                     
                                <input type="number" class="form-control" name="target_tokko" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_tokko" value="<?= $row->target_tokko; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Kru<br>
                            <input type="text" name="kru_operator_tokko" placeholder="Nama Kru" class="form-control">
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_tokko == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_tokko" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_tokko" >
                                  <option value="<?php  echo $row->jenis_cetakan_tokko != "-" ?   $row->jenis_cetakan_tokko  : '-' ?>"><?php  echo $row->jenis_cetakan_tokko != "-" ?   $row->jenis_cetakan_tokko  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_tokko == null) {?>                                     
                                  <input type="number" class="form-control" name="set_tokko" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_tokko" value="<?= $row->set_tokko?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_tokko == null) {?>
                              <input type="number" class="form-control" name="druk_tokko" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_tokko" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-success" name="addtokko">Jadwal</button>
                          </div>
                        </div>
                      </div>

                      <!-- akhir mesin TOKKO -->
                      
                    </div><br>
                  </div><!-- /.card-body -->
                </div>
                </div>
                </div>
                </div>
                <!-- footer modal -->
                <!-- <div class="modal-footer">
                </div> -->
                </form>
              <?php } ?>  
              </div>
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