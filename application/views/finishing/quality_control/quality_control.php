<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">

    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>QUALITY CONTROL</h1>
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
            <h3 class="card-title">Data Quality Control</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
            <thead>
              <tr align="center">
                <td>No SO</td>
                <td>Tanggal Masuk</td>
                <td>Deadline</td>
                <td>Nama Pemesan</td>
                <td>Nama Order</td>
                <td>Ukuran</td>
                <td>Halaman</td>
                <td>Oplag</td>                
                <td>Status</td>
                <td>Keterangan</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
            <?php $nilai=0;?>            
            <?php $id_banding[-1]=null;?>

            <?php foreach($qc as $s => $row) {?> 
              <?php $id_banding[$nilai]=$row->id_order;?>

            <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>
              <tr>
                <td><?= $row->nomor_so;?></td>
                <td><?= $row->tanggal_masuk;?></td>
                <td><?= $row->deadline;?></td>
                <td><?= $row->nama_pemesan;?></td>
                <td><?= $row->nama_orderan;?></td>
                <td><?= $row->ukuran;?></td>
                <td><?= $row->halaman;?></td>
                <td><?= $row->oplag;?></td>                
                <td <?php echo $row->status == "ditolak" || $row->status == "diterima" ?  "style='color: red'" : "" ?>>                
                    <?php if($row->status == "-" or $row->status == "") {
                              echo "-";                 
                          }else echo $row->status;
                      ?>
                      
                
                </td>
                <td><?= $row->keterangan;?></td>
              
                <td align="center">
                <?php if($row->id_qc != null) {?>
                  <a href="<?=site_url('finishing/QualityControl/lihat_qc/').$row->id_order;?>">
                    <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                  </a>
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order?>">
                    <i class="fa fa-pencil" style="font-size:14px"></i> QC
                <?php } else { ?>
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order?>">
                    <i class="fa fa-plus" style="font-size:14px"></i> QC
                  </button>
                <?php } ?>
                </td>
              </tr>
              <?php $nilai++;} ?>
              <?php } ?>

            </tbody>
          </table>
          
          <?php $nilai = 0; ?>
          <?php $id_banding[-1]=null;?>

          <?php foreach ($qc as $s => $row){ ?>
            <?php $id_banding[$nilai]=$row->id_order;?>

            <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>

          <form action="<?=site_url('finishing/QualityControl/proses')?>" method="post">

          <input type="text" name="id_order" value="<?= $row->id_order;?>" hidden>
          <input type="text" name="so_status" value="<?= $row->so_status;?>" hidden>
          
          <div id="myModal<?= $row->id_order;?>" class="modal fade" role="dialog">
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
                    <h3><?= $row->nomor_so?></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="card-body">
                      <h4>DETAIL ORDERAN</h4><hr>
                      <div class="row">
                        <div class="col-md-4">
                          <br>Nama Pemesan
                          <br><label class="form-label"><?= $row->nama_pemesan;?></label>
                        </div>
                        <div class="col-md-4">
                          <br>Nama Orderan
                          <br><label class="form-label"><?= $row->nama_orderan;?></label>
                        </div>
                        <div class="col-md-4">
                          <br>Finishing
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
                          <br>Ukuran
                          <br><label class="form-label"><?= $row->ukuran;?></label>
                        </div>
                        <div class="col-md-4">
                          <br>Laminasi
                          <br><label class="form-label">
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
                          </label>
                        </div>
                        <div class="col-md-4">
                          <br>Oplag
                          <br><label class="form-label"><?= $row->oplag;?></label>
                        </div>
                      </div>
                      <hr>
                      <div class="row" align="center">
                        <div class="col-md-4">
                          <label>Hasil Binding</label><br>
                          <?= $total_binding[$nilai]; ?>
                        </div>
                        <div class="col-md-4">
                          <label>Hasil Jahit</label><br>
                          <?= $total_jahit[$nilai]; ?>
                        </div>
                        <div class="col-md-4">
                          <label>Hasil Hardcover</label><br>
                          <?= $total_hardcover[$nilai]; ?>
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          Status<br>

                          <?php if($row->id_qc == null) {?>
                            <select id="inputState" class="form-select form-control" name="status" >
                              <option value="-">-</option>
                              <option value="diterima">diterima</option>
                              <option value="ditolak">ditolak</option>
                            </select>
                          <?php }else{ ?>
                              <select id="inputState" class="form-select form-control" name="status" >
                                <option value="<?= $row->status; ?>"><?= $row->status; ?></option>
                                <option value="diterima">diterima</option>
                                <option value="ditolak">ditolak</option>
                                <option value="-">-</option>
                              </select>
                          <?php } ?>

                        </div>  
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-md-6">
                          Hasil QC<br>
                            <?php if($row->id_qc == null) {?>
                              <input type="number" class="form-control" name="hasil" placeholder="Masukan Jumlah Lembar" >
                            <?php }else{ ?>
                              <input type="number" class="form-control" name="hasil" placeholder="Masukan Jumlah Lembar" value="<?= $row->hasil; ?>">
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                          Rejek QC<br>
                            <?php if($row->id_qc == null) {?>
                              <input type="number" class="form-control" name="rejek" placeholder="Masukan Jumlah Lembar" >
                            <?php }else{ ?>
                              <input type="number" class="form-control" name="rejek" placeholder="Masukan Jumlah Lembar" value="<?= $row->rejek; ?>">
                            <?php } ?>
                        </div>
                      </div>
                      <hr>

                      <h4>Keterangan</h4>
                      <?php if($row->id_qc == null) {?>
                        <textarea name="keterangan" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                      <?php }else{ ?>
                        <textarea name="keterangan" class="form-control" placeholder="catatan" style="height: 240px;"><?= $row->keterangan; ?></textarea>
                      <?php } ?>
                    </div><br>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>

                    <?php if($row->id_qc == null) {?>
                          <button type="submit" name="add" class="btn btn-success" >Jadwal</button>  
                    <?php }else{ ?>                     
                          <button type="submit" name="edit" class="btn btn-success" >Jadwal</button>  
                    <?php } ?>
                  </div>
                <!-- /.card-body -->
                </div>
                </div>
                
              </div>
            </div>
            </form>
            <?php $nilai++;} ?>
            <?php } ?>

          </div>

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