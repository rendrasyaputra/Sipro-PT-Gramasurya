<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>CETAK</h1>
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
        <h3 class="card-title">Cetak, Edit SO [2021.2.426]</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
    <?php foreach($dc as $s => $row) {?> 
        <div class="card-body">
        <form action="<?=site_url('cetak/Displaycetak/proses')?>" method="post">
        <input type="text" name="id_order"  value="<?= $row->id_order; ?>" hidden>
        <!-- <input type="text" name="total_kertas" hidden>             -->
            
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nomor SO</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->nomor_so; ?>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nama Pemesan</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->nama_pemesan; ?>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Halaman</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->halaman; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Tanggal Masuk</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= date('d F Y', strtotime( $row->tanggal_masuk)); ?>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nama Orderan</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->nama_orderan; ?>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Oplag</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->oplag; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Deadline</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= date('d F Y', strtotime($row->deadline)); ?>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Ukuran</label>
                    </div>
                    <div class="col-md-2">
                        <br><?= $row->ukuran; ?>
                    </div>
                </div><br>
                
                <div class="row">
                    <div class="col-md-2" align="right"><label>Status</label></div>
                    
                    <div class="col-md-2" style="margin-left:20px ">
                        <input type="text" name="status_cetak_cover" value="" hidden>
                        <input class="form-check-input" type="checkbox" name="status_cetak_cover" value="Cetak Cover">
                        <label class="form-check-label" for="flexCheckDefault">Cetak Cover</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="status_cetak_isi" value="" hidden>
                        <input class="form-check-input" type="checkbox" name="status_cetak_isi" value="Cetak Isi">
                        <label class="form-check-label" for="flexCheckDefault">Cetak Isi</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="status_cetak" value="" hidden>
                        <input class="form-check-input" type="checkbox" name="status_cetak" value="Cetak">
                        <label class="form-check-label" for="flexCheckDefault">Cetak</label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header p-2 bg-info">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#cover1" data-toggle="tab">COVER 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#cover2" data-toggle="tab">COVER 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#cover3" data-toggle="tab">COVER 3</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#isi1" data-toggle="tab">ISI 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#isi2" data-toggle="tab">ISI 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#isi3" data-toggle="tab">ISI 3</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="cover1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Cover 1</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_cover_1" value="<?= $row->mesin_cover_1; ?>" disabled>
                                                    <option value="<?php  echo $row->mesin_cover_1 != "-" ?   $row->mesin_cover_1  : '-' ?>"><?php  echo $row->mesin_cover_1 != "-" ?   $row->mesin_cover_1  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_cover1"  >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 1</label><br>
                                                <?= $row->jenis_kertas_cover_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 1</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_1" value="<?= $row->jumlah_kertas_cover_1; ?>"  disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 1</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover1"  placeholder="Masukan Hasil Kertas Cover 1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Cover 1</label><br>
                                                <?= $row->warna_cover_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Cover 1</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Cover 1</label><br>
                                                <input type="number" class="form-control" name="potong_cover_1" value="<?= $row->potong_cover_1; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover1"  >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover1"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cover2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Cover 2</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_cover_2" value="<?= $row->mesin_cover_2; ?>"  disabled>
                                                    <option value="<?php  echo $row->mesin_cover_2 != "-" ?   $row->mesin_cover_2  : '-' ?>"><?php  echo $row->mesin_cover_2 != "-" ?   $row->mesin_cover_2  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_cover2"  >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 2</label><br>
                                                <?= $row->jenis_kertas_cover_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover2"  >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 2</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_2" value="<?= $row->jumlah_kertas_cover_2; ?>"  disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 2</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover2"  placeholder="Masukan Hasil Kertas Cover 2" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Cover 2</label><br>
                                                <?= $row->warna_cover_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Cover 2</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Cover 2</label><br>
                                                <input type="number" class="form-control" name="potong_cover_2" value="<?= $row->potong_cover_2; ?>"  disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover2"  >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover2"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cover3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Cover 3</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_cover_3" value="<?= $row->mesin_cover_3; ?>" disabled>
                                                    <option value="<?php  echo $row->mesin_cover_3 != "-" ?   $row->mesin_cover_3  : '-' ?>"><?php  echo $row->mesin_cover_3 != "-" ?   $row->mesin_cover_3  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_cover3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 3</label><br>
                                                <?= $row->jenis_kertas_cover_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 3</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_3" value="<?= $row->jumlah_kertas_cover_3; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 3</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover3" placeholder="Masukan Hasil Kertas Cover 3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Cover 3</label><br>
                                                <?= $row->warna_cover_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Cover 3</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Cover 3</label><br>
                                                <input type="number" class="form-control" name="potong_cover_3" value="<?= $row->potong_cover_3; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover3" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 1</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_1" value="<?= $row->mesin_isi_1; ?>" disabled>
                                                    <option value="<?php  echo $row->mesin_isi_1 != "-" ?   $row->mesin_isi_1  : '-' ?>"><?php  echo $row->mesin_isi_1 != "-" ?   $row->mesin_isi_1  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_isi1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 1</label><br>
                                                <?= $row->jenis_kertas_isi_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 1</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_1" value="<?= $row->jumlah_kertas_isi_1; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 1</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi1" placeholder="Masukan Hasil Kertas Isi 1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Isi 1</label><br>
                                                <?= $row->warna_isi_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Isi 1</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Isi 1</label><br>
                                                <input type="number" class="form-control" name="potong_isi_1" value="<?= $row->potong_isi_1; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi1" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi1" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 2</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_2" value="<?= $row->mesin_isi_2; ?>" disabled>
                                                    <option value="<?php  echo $row->mesin_isi_2 != "-" ?   $row->mesin_isi_2  : '-' ?>"><?php  echo $row->mesin_isi_2 != "-" ?   $row->mesin_isi_2  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_isi2" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 2</label><br>
                                                <?= $row->jenis_kertas_isi_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi2" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 2</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_2" value="<?= $row->jumlah_kertas_isi_2; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 2</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi2" placeholder="Masukan Hasil Kertas Isi 2" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Isi 2</label><br>
                                                <?= $row->warna_isi_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Isi 2</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Isi 2</label><br>
                                                <input type="number" class="form-control" name="potong_isi_2" value="<?= $row->potong_isi_2; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi2" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi2" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 3</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_3" value="<?= $row->mesin_isi_3; ?>" disabled>
                                                    <option value="<?php  echo $row->mesin_isi_3 != "-" ?   $row->mesin_isi_3  : '-' ?>"><?php  echo $row->mesin_isi_3 != "-" ?   $row->mesin_isi_3  : '-' ?>   </option>
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
                                                    <option value="-">-</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="tanggal_cetak_isi3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 3</label><br>
                                                <?= $row->jenis_kertas_isi_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 3</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_3" value="<?= $row->jumlah_kertas_isi_3; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 3</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi3" placeholder="Masukan Hasil Kertas Isi 3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Warna Isi 3</label><br>
                                                <?= $row->warna_isi_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Cetak Isi 3</label><br>
                                                
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Ukuran Potong Isi 3</label><br>
                                                <input type="number" class="form-control" name="potong_isi_3" value="<?= $row->potong_isi_3; ?>" disabled >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi3" >
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi3" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" align="right">
                        <button type="submit" name="add" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-default"><a href="<?=site_url()?>cetak/Displaycetak">Kembali</a></button>
                    </div>
                </div>                 
            </form>
        </div>
        <?php } ?>
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