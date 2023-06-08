<!-- Content Header (Page header) --> 
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>pracetak/Suratorder" class="btn btn-warning btn-lg">
            <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
            </a>
          </li>
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
      <h3 class="card-title">Penambahan Surat Order</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button> -->
      </div>
    </div>
    <div class="card-body">
      <div class="card-body">
        <form action="<?=site_url('pracetak/Suratorder/proses')?>" method="POST">
        <?php  $so->id_order+=1; ?>        
        <input type="text" name="id_order"  value="<?php echo $so->id_order; ?>" hidden>
          <div class="row">
            <div class="col-md-2" align="right">
              <br><label class="form-label">Nomor SO</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="nomor_so" placeholder="Masukan Nomor SO" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Nama Pemesan</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="nama_pemesan" placeholder="Masukan Nama Pemesan" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Halaman</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="halaman" placeholder="Masukan Hal" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2" align="right">
              <br><label class="form-label">Tanggal Masuk</label>
            </div>
            <div class="col-md-2">
              <br><input type="date" class="form-control" name="tanggal_masuk" placeholder="Tanggal Masuk" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Nama Order</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="nama_orderan" placeholder="Masukan Orderan" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Oplag</label>
            </div>
            <div class="col-md-2">
              <br><input type="number" class="form-control" name="oplag" placeholder="Masukan Oplag" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2" align="right">
              <br><label class="form-label">Deadline</label>
            </div>
            <div class="col-md-2">
              <br><input type="date" class="form-control" name="deadline" placeholder="Deadline" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Ukuran</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="ukuran" placeholder="Masukan Ukuran" required>
            </div>
            <div class="col-md-2" align="right">
              <br><label class="form-label">Status</label>
            </div>
            <div class="col-md-2">
              <br><input type="text" class="form-control" name="so_status" value="marketing" hidden>
              <input type="text" class="form-control" value="marketing" disabled>
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#ctcp" data-toggle="tab">CTCP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kertas" data-toggle="tab">KERTAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#potong" data-toggle="tab">POTONG</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cetak" data-toggle="tab">CETAK</a></li>
                    <li class="nav-item"><a class="nav-link" href="#finish" data-toggle="tab">FINISHING</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="ctcp">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              COVER
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              ISI
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_cover_1" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_isi_1" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_cover_1" placeholder="Masukan Plat Cover" name="plat_cover_1">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_isi_1" placeholder="Masukan Plat Isi">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_cover_2" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_isi_2" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_cover_2" placeholder="Masukan Plat Cover">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_isi_2" placeholder="Masukan Plat Isi">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_cover_3" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">CTCP ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ctcp_isi_3" >
                          <option value="-">-</option>
                            <option value="Plat 58">Plat 58</option>
                            <option value="Plat 72">Plat 72</option>
                            <option value="Plat 74">Plat 74</option>
                            <option value="Plat 102">Plat 102</option>
                            <option value="Plat paperplate">Plat paperplate</option>
                            <option value="Plat 72.4 x 59.2">Plat 72.4 x 59.2</option>
                            <option value="Plat 74.2 x 60.5">Plat 74.2 x 60.5</option>
                            <option value="Plat 770 x 1030">Plat 770 x 1030</option>
                            <option value="Paperplate 25.5 x 39.5">Paperplate 25.5 x 39.5</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_cover_3" placeholder="Masukan Plat Cover">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">PLAT ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-control" name="plat_isi_3" placeholder="Masukan Plat Isi">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="kertas">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              KERTAS COVER
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              KERTAS ISI
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_cover_1" >
                            <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_isi_1" >
                          <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_cover_1" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_isi_1" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_cover_1">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_isi_1">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_cover_2" >
                          <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_isi_2" >
                          <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_cover_2" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_isi_2" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_cover_2" value="Masukan Jumlah Kertas Cover">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_isi_2" value="Masukan Jumlah Kertas Isi">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_cover_3" >
                          <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">KERTAS ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="jenis_kertas_isi_3" >
                          <option value="-">-</option>
                            <option value="AC/Ivory 2Muka 190 gr">AC/Ivory 2Muka 190 gr</option>
                            <option value="AC/Ivory 2Muka 210 gr">AC/Ivory 2Muka 210 gr</option>
                            <option value="AC/Ivory 2Muka 230 gr">AC/Ivory 2Muka 230 gr</option>
                            <option value="AC/Ivory 2Muka 260 gr">AC/Ivory 2Muka 260 gr</option>
                            <option value="AC/Ivory 2Muka 310 gr">AC/Ivory 2Muka 310 gr</option>
                            <option value="ACCO(isi50)">ACCO(isi50)</option>
                            <option value="Acquarello white 118">Acquarello white 118</option>
                            <option value="Amplop coklat jadi">Amplop coklat jadi</option>
                            <option value="Amplop paperline">Amplop paperline</option>
                            <option value="AP 85 gr">AP 85 gr</option>
                            <option value="AP 90 gr">AP 90 gr</option>
                            <option value="AP 100 gr">AP 100 gr</option>
                            <option value="AP 120 gr">AP 120 gr</option>
                            <option value="AP 150 gr">AP 150 gr</option>
                            <option value="Aster">Aster</option>
                            <option value="BC biru muda">BC biru muda</option>
                            <option value="BC hijau">BC hijau</option>
                            <option value="BC kuning">BC kuning</option>
                            <option value="BC pink">BC pink</option>
                            <option value="BC_I_putih">BC_I_putih</option>
                            <option value="BC_I_warna muda">BC_I_warna muda</option>
                            <option value="BC_I_warna tua">BC_I_warna tua</option>
                            <option value="BP 52 gr">BP 52 gr</option>
                            <option value="BP 57.5 gr">BP 57.5 gr</option>
                            <option value="Buffalo biru">Buffalo biru</option>
                            <option value="Bufallo W.tua">Bufallo W.tua</option>
                            <option value="CD buram 50 gr">CD buram 50 gr</option>
                            <option value="COG 176">COG 176 gr</option>
                            <option value="COG 216">COG 216 gr</option>
                            <option value="COG 270">COG 270 gr</option>
                            <option value="Corcodre tebal">Corcodre tebal</option>
                            <option value="Corcodre tipis">Corcodre tipis</option>
                            <option value="Hammer tebal">Hammer tebal</option>
                            <option value="HVS 60 gr">HVS 60 gr</option>
                            <option value="HVS 64 gr">HVS 64 gr</option>
                            <option value="HVS 70 gr">HVS 70 gr</option>
                            <option value="HVS 80 gr">HVS 80 gr</option>
                            <option value="HVS 100 gr">HVS 100 gr</option>
                            <option value="HVS biru">HVS biru</option>
                            <option value="HVS hijau">HVS hijau</option>
                            <option value="HVS kuning">HVS kuning</option>
                            <option value="HVS pink">HVS pink</option>
                            <option value="Ivory 210 gr">Ivory 210 gr</option>
                            <option value="Ivory 230 gr">Ivory 230 gr</option>
                            <option value="Ivory 250 gr">Ivory 250 gr</option>
                            <option value="Jasmin_Putih tebal">Jasmin_Putih tebal</option>
                            <option value="Jasmin_Putih tipis">Jasmin_Putih tipis</option>
                            <option value="Karton tebal 30">Karton tebal 30</option>
                            <option value="Khusus SM 57.5 gr">Khusus SM 57.5 gr</option>
                            <option value="Khusus SM 85 gr">Khusus SM 85 gr</option>
                            <option value="Krungut">Krungut</option>
                            <option value="Linen tebal">Linen tebal</option>
                            <option value="LWC">LWC</option>
                            <option value="Marga/Duplek 250 gr">Marga/Duplek 250 gr</option>
                            <option value="Marga/Duplek 310 gr">Marga/Duplek 310 gr</option>
                            <option value="Marga/Duplek 350 gr">Marga/Duplek 350 gr</option>
                            <option value="MP 85 gr">MP 85 gr</option>
                            <option value="MP 100 gr">MP 100 gr</option>
                            <option value="MP 120 gr">MP 120 gr</option>
                            <option value="MP 150 gr">MP 150 gr</option>
                            <option value="NCR biru">NCR biru</option>
                            <option value="NCR hijau">NCR hijau</option>
                            <option value="NCR kuning">NCR kuning</option>
                            <option value="NCR pink">NCR pink</option>
                            <option value="NCR putih">NCR putih</option>
                            <option value="QP 50 gr">QP 50 gr</option>
                            <option value="Samson tipis">Samson tipis</option>
                            <option value="Sticker chromo">Sticker chromo</option>
                            <option value="Spendorgel ivory 100">Spendorgel ivory 100</option>
                            <option value="Sticker kertas">Sticker kertas</option>
                            <option value="Sticker transparan">Sticker transparan</option>
                            <option value="Vinil biru">Vinil biru</option>
                            <option value="Vinil hijau">Vinil hijau</option>
                            <option value="Vinil hitam">Vinil hitam</option>
                            <option value="Vinil htm/br/hj">Vinil htm/br/hj</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_cover_3" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">UKURAN PLANO ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="ukuran_plano_isi_3" >
                          <option value="-">-</option>
                            <option value="21.50 x 33">21.5 x 33</option>
                            <option value="54 x 70">54 x 70</option>
                            <option value="58 x 84">58 x 84</option>
                            <option value="61 x 84">61 x 84</option>
                            <option value="61 x 86">61 x 86</option>
                            <option value="61 x 88">61 x 88</option>
                            <option value="61 x 92">61 x 92</option>
                            <option value="64 x 88">64 x 88</option>
                            <option value="65 x 77">65 x 77</option>
                            <option value="65 x 90">65 x 90</option>
                            <option value="65 x 100">65 x 100</option>
                            <option value="66 x 101.1">66 x 101.1</option>
                            <option value="72 x 100">72 x 100</option>
                            <option value="79 x 109">79 x 109</option>
                            <option value="90 x 120">90 x 120</option>
                            <option value="120 x 16">120 x 16</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_cover_3">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">JUMLAH KERTAS ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="jumlah_kertas_isi_3">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="potong">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              POTONG COVER
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              POTONG ISI
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG COVER 1 </label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_cover_1">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG ISI 1</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_isi_1">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG COVER 2</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_cover_2">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG ISI 2</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_isi_2">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG COVER 3</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_cover_3">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG ISI 3</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_isi_3">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                          <br><label class="form-label">POTONG ISI 4</label>
                          <i class="fa fa-crop" style="font-size:18px"></i>
                        </div>
                        <div class="col-md-3">
                          <br><input type="number" class="form-select form-control" name="potong_isi_4">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="cetak">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              CETAK COVER
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              CETAK ISI
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN COVER 1</label>
                         </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_cover_1" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_isi_1" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_cover_1" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_isi_1" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT COVER 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_cover_1">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT ISI 1</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_isi_1">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_cover_2" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_isi_2" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_cover_2" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_isi_2" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT COVER 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_cover_2">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT ISI 2</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_isi_2">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_cover_3" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">MESIN ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="mesin_isi_3" >
                          <option value="-">-</option>
                            <option value="Oliver 58 2w">Oliver 58 2w</option>
                            <option value="Oliver 72 1w">Oliver 72 1w</option>
                            <option value="SM 74 4W - A">SM 74 4W - A</option>
                            <option value="SM 74 4W - B">SM 74 4W - B</option>
                            <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                            <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Tokko">Tokko</option>
                            <option value="Print banner">Print banner</option>
                            <option value="Print digital">Print digital</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_cover_3" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">WARNA ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><select id="inputState" class="form-select form-control" name="warna_isi_3" >
                          <option value="-">-</option>
                            <option value="1/0">1/0</option>
                            <option value="1/1">1/1</option>
                            <option value="2/0">2/0</option>
                            <option value="2/1">2/1</option>
                            <option value="2/2">2/2</option>
                            <option value="3/0">3/0</option>
                            <option value="4/0">4/0</option>
                            <option value="4/1">4/1</option>
                            <option value="4/2">4/2</option>
                            <option value="4/4">4/4</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT COVER 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_cover_3">
                        </div>
                        <div class="col-md-3">
                          <br><label class="form-label">INSIT ISI 3</label>
                        </div>
                        <div class="col-md-3">
                          <br><input type="text" class="form-select form-control" name="insit_isi_3">
                        </div>
                      </div>
                      <br><hr>
                      <div class="row">
                        <div class="col-md-6">
                          <br><label class="form-label">KETERANGAN CETAK COVER</label>
                          <textarea class="form-control" placeholder="keterangan" name="keterangan_cetak_cover"></textarea>
                        </div>
                        <div class="col-md-6">
                          <br><label class="form-label">KETERANGAN CETAK ISI</label>
                          <textarea class="form-control" placeholder="keterangan" name="keterangan_cetak_isi"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="finish">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              FINISHING COVER
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              FINISHING ISI
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card border border-success">
                            <div class="card-header text-center">
                              FINISHING AKHIR
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_doff" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_cover_doff" value="doff" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Doff
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_emboss" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_cover_emboss" value="emboss" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Emboss
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_glossy" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_cover_glossy" value="glossy" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Glossy
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_hotprint" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_cover_hotprint" value="hotprint" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Hotprint
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_spot_uvi" value="" hidden>
                            <input class="form-check-input" name="finishing_cover_spot_uvi" type="checkbox" value="spot_uvi" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Spot Uvi
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_cover_uvi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_cover_uvi" value="uvi" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Uvi
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_isi_lipat" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_isi_lipat" value="lipat" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Lipat
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_isi_susun" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_isi_susun" value="susun" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Susun
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_bending" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_bending" value="bending" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Bending
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_hard_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_hard_cover" value="hard_cover" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Hard Cover
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_jahit_benang" value="" hidden>
                            <input class="form-check-input" name="finishing_akhir_jahit_benang" type="checkbox" value="jahit_benang" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Jahit Benang
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_jahit_kawat" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_jahit_kawat" value="jahit_kawat" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Jahit Kawat
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_klem" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_klem" value="klem" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Klem
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_pond" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_pond" value="pond" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Pond
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="text" name="finishing_akhir_spiral" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="finishing_akhir_spiral" value="spiral" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Spiral
                            </label>
                          </div>
                        </div>
                      <!-- </div><br>
                      <div class="row">
                        <div class="col-md-4">
                          <label class="form-label">KETERANGAN FINISHING COVER</label>
                          <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_cover"></textarea>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label">KETERANGAN FINISHING ISI</label>
                          <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_isi"></textarea>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label">KETERANGAN FINISHING AKHIR</label>
                          <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_akhir"></textarea>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" name="add" class="btn btn-success float-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->