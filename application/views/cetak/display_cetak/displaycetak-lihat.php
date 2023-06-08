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
            <form action="<?=site_url('cetak/diplaycetak/lihat_dc')?>" method="post">        
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
                        <br><label class="form-label"><?= date('d F Y', strtotime( $row->tanggal_masuk )); ?></label>
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

                </div><br>
                <div class="row">
                    <div class="col-md-2" align="right"><label>Status</label></div>
                    
                    <div class="col-md-2" style="margin-left:20px ">
                        <input class="form-check-input" type="checkbox" name="status_cetak_cover" value="Cetak Cover" <?php echo $row->status_cetak_cover !=null ?  "checked" : "" ?> disabled>
                        <label class="form-check-label" for="flexCheckDefault">Cetak Cover</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-check-input" type="checkbox" name="status_cetak_isi" value="Cetak Isi" <?php echo $row->status_cetak_isi !=null ?  "checked" : "" ?> disabled>
                        <label class="form-check-label" for="flexCheckDefault">Cetak Isi</label>
                    </div>
                    <div class="col-md-2">
                        <input class="form-check-input" type="checkbox" name="status_cetak" value="Cetak" <?php echo $row->status_cetak !=null ?  "checked" : "" ?> disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_cover1" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_cover1)); ?>" disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 1</label><br>
                                                <?= $row->jenis_kertas_cover_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover1" value="<?= date('d F Y', strtotime( $row->tanggal_out_cetak_cover1)); ?>" disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 1</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_1" value="<?= $row->jumlah_kertas_cover_1; ?>" placeholder="Masukan Jumlah Kertas Cover 1" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 1</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover1" value="<?= $row->hasil_kertas_cover1; ?>" placeholder="Masukan Hasil Kertas Cover 1" disabled>
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
                                                <input type="number" class="form-control" name="potong_cover_1" value="<?= $row->potong_cover_1; ?>" placeholder="Masukan Ukuran Potong Cover 1" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover1" value="<?= $row->suborder_in_cetak_cover1; ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 1</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover1" value="<?= $row->suborder_out_cetak_cover1; ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cover2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Cover 2</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_cover_2" disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_cover2" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_cover2)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 2</label><br>
                                                <?= $row->jenis_kertas_cover_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover2" value="<?= date('d-m-Y', strtotime( $row->tanggal_out_cetak_cover2)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 2</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_2" value="<?= $row->jumlah_kertas_cover_2; ?>" placeholder="Masukan Jumlah Kertas Cover 2"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 2</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover2" value="<?= $row->hasil_kertas_cover2; ?>" placeholder="Masukan Hasil Kertas Cover 2"  disabled>
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
                                                <input type="number" class="form-control" name="potong_cover_2" value="<?= $row->potong_cover_2; ?>" placeholder="Masukan Ukuran Potong Cover 2"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover2" value="<?= $row->suborder_in_cetak_cover2; ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 2</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover2" value="<?= $row->suborder_out_cetak_cover2; ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cover3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Cover 3</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_cover_3" disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_cover3" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_cover3)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Cover 3</label><br>
                                                <?= $row->jenis_kertas_cover_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_cover3" value="<?= date('d F Y', strtotime( $row->tanggal_out_cetak_cover3)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Cover 3</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_cover_3" value="<?= $row->jumlah_kertas_cover_3; ?>" placeholder="Masukan Jumlah Kertas Cover 3"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Cover 3</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_cover3" value="<?= $row->hasil_kertas_cover3; ?>" placeholder="Masukan Hasil Kertas Cover 3"  disabled>
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
                                                <input type="number" class="form-control" name="potong_cover_3" value="<?= $row->potong_cover_3; ?>" placeholder="Masukan Ukuran Potong Cover 3"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_cover3" value="<?= $row->suborder_in_cetak_cover3; ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Cover 3</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_cover3" value="<?= $row->suborder_out_cetak_cover3; ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 1</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_1" disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_isi1" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_isi1)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 1</label><br>
                                                <?= $row->jenis_kertas_isi_1; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi1" value="<?= date('d-m-Y', strtotime( $row->tanggal_out_cetak_isi1)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 1</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_1" value="<?= $row->jumlah_kertas_isi_1; ?>" placeholder="Masukan Jumlah Kertas Isi 1"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 1</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi1" value="<?= $row->hasil_kertas_isi1; ?>" placeholder="Masukan Hasil Kertas Isi 1"  disabled>
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
                                                <input type="number" class="form-control" name="potong_isi_1" value="<?= $row->potong_isi_1; ?>" placeholder="Masukan Ukuran Potong Isi 1"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi1" value="<?= $row->suborder_in_cetak_isi1; ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 1</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi1" value="<?= $row->suborder_out_cetak_isi1; ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 2</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_2" disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_isi2" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_isi2)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 2</label><br>
                                                <?= $row->jenis_kertas_isi_2; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi2" value="<?= date('d F Y', strtotime( $row->tanggal_out_cetak_isi2)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 2</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_2" value="<?= $row->jumlah_kertas_isi_2; ?>" placeholder="Masukan Jumlah Kertas Isi 2"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 2</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi2" value="<?= $row->hasil_kertas_isi2; ?>" placeholder="Masukan Hasil Kertas Isi 2"  disabled>
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
                                                <input type="number" class="form-control" name="potong_isi_2" value="<?= $row->potong_isi_2; ?>" placeholder="Masukan Ukuran Potong Isi 2"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi2" value="<?= $row->suborder_in_cetak_isi2; ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 2</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi2" value="<?= $row->suborder_out_cetak_isi2; ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="isi3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Mesin Isi 3</label>
                                                <select id="inputState" class="form-select form-control" name="mesin_isi_3" disabled>
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
                                                <input type="date" class="form-control" name="tanggal_cetak_isi3" value="<?= date('d F Y', strtotime( $row->tanggal_cetak_isi3)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Kertas Isi 3</label><br>
                                                <?= $row->jenis_kertas_isi_3; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Out Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="tanggal_out_cetak_isi3" value="<?= date('d-m-Y', strtotime( $row->tanggal_out_cetak_isi3)); ?>"  disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Jumlah Kertas Isi 3</label><br>
                                                <input type="text" class="form-control" name="jumlah_kertas_isi_3" value="<?= $row->jumlah_kertas_isi_3; ?>" placeholder="Masukan Jumlah Kertas Isi 3"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hasil Kertas Isi 3</label><br>
                                                <input type="text" class="form-control" name="hasil_kertas_isi3" value="<?= $row->hasil_kertas_isi3; ?>" placeholder="Masukan Hasil Kertas Isi 3"  disabled>
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
                                                <input type="number" class="form-control" name="potong_isi_3" value="<?= $row->potong_isi_3; ?>" placeholder="Masukan Ukuran Potong Isi 3"  disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder In Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="suborder_in_cetak_isi3"  value="<?= $row->suborder_in_cetak_isi3; ?>" disabled>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <label class="form-label">Suborder Out Cetak Isi 3</label>
                                                <input type="date" class="form-control" name="suborder_out_cetak_isi3"  value="<?= $row->suborder_out_cetak_isi3; ?>" disabled>
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
                        <button type="button" class="btn btn-default"><a href="<?=site_url()?>cetak/Displaycetak">Kembali</a></button>
                    </div>
                </div>                 
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