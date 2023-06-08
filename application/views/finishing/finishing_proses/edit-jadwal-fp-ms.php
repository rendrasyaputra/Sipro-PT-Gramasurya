<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING PROSES</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Mesin (disesuaikan)</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row">
          <div class="col-md-4">
            <br>Nama Pemesan
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-4">
            <br>Nama Orderan
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-4">
            <br>Finishing
            <br><label class="form-label">dari db</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <br>Ukuran
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-4">
            <br>Laminasi
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-4">
            <br>Oplag
            <br><label class="form-label">dari db</label>
          </div>
        </div>
        <hr><br>

        <div class="row">
          <div class="col-md-6">
            Surat Order<br>
            <input type="text" class="form-control" name="so" required>
          </div>
          <div class="col-md-6">
            Status<br>
            <div class="form-check">
              <input type="text" name="finishingprosesisi" value="" hidden>
              <input class="form-check-input" type="checkbox" name="finishingprosesisi" value="Finishing Proses Isi">
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>
            </div>
          </div>  
        </div><br>
        <hr><br>
        <div class="row">
          <div class="col-md-6">
            Tanggal Pelaksanaan<br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan" required>
          </div>
        </div><br>
        <hr><br>

        <div class="row">
          <div class="col-md-3">
            <b>Lipat</b>
          </div>
          <div class="col-md-5">
            <b>Lembar</b>
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat1" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat1" value="lipat 1">
              <label class="form-check-label" for="flexCheckDefault">Lipat 1</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 1
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat1_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat2" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat2" value="lipat 2">
              <label class="form-check-label" for="flexCheckDefault">Lipat 2</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 2
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat2_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat3" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat3" value="lipat 3">
              <label class="form-check-label" for="flexCheckDefault">Lipat 3</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 3
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat3_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat4" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat4" value="lipat 4">
              <label class="form-check-label" for="flexCheckDefault">Lipat 4</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 4
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat4_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>
        <hr><br>

        <!-- UNTUK LIPAT 1 -->
        <div class="row">
          <div class="col">
            <h5>Lipat 1 : <b>dari db</b> Lembar</h5>
          </div>
        </div><br>
        <div class="row">
          <!-- BARIS UNTUK LEMBAR 1 - 10 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 1 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar1lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 2 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar2lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 3 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar3lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 4 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar4lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 5 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar5lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 6 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar6lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 7 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar7lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 8 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar8lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 9 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar9lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 10 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar10lipat1"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 11 - 20 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 11 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar11lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 12 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar12lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 13 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar13lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 14 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar14lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 15 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar15lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 16 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar16lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 17 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar17lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 18 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar18lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 19 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar19lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 20 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar20lipat1"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 21 - 30 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 21 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar21lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 22 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar22lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 23 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar23lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 24 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar24lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 25 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar25lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 26 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar26lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 27 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar27lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 28 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar28lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 29 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar29lipat1"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 30 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar30lipat1"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col">TOTAL :</div>
              <div class="col"> (disesuaikan)<!-- <input type="number" class="form-control" name="totallembarlipat1"> --></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br>
        <hr><br>

        <!-- UNTUK LIPAT 2 -->
        <div class="row">
          <div class="col">
            <h5>Lipat 2 : <b>dari db</b> Lembar</h5>
          </div>
        </div><br>
        <div class="row">
          <!-- BARIS UNTUK LEMBAR 1 - 10 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 1 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar1lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 2 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar2lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 3 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar3lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 4 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar4lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 5 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar5lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 6 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar6lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 7 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar7lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 8 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar8lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 9 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar9lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 10 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar10lipat2"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 11 - 20 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 11 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar11lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 12 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar12lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 13 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar13lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 14 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar14lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 15 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar15lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 16 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar16lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 17 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar17lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 18 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar18lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 19 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar19lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 20 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar20lipat2"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 21 - 30 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 21 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar21lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 22 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar22lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 23 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar23lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 24 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar24lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 25 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar25lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 26 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar26lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 27 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar27lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 28 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar28lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 29 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar29lipat2"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 30 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar30lipat2"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col">TOTAL :</div>
              <div class="col"> (disesuaikan)<!-- <input type="number" class="form-control" name="totallembarlipat1"> --></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br>
        <hr><br>

        <!-- UNTUK LIPAT 3 -->
        <div class="row">
          <div class="col">
            <h5>Lipat 3 : <b>dari db</b> Lembar</h5>
          </div>
        </div><br>
        <div class="row">
          <!-- BARIS UNTUK LEMBAR 1 - 10 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 1 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar1lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 2 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar2lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 3 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar3lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 4 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar4lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 5 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar5lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 6 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar6lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 7 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar7lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 8 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar8lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 9 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar9lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 10 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar10lipat3"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 11 - 20 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 11 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar11lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 12 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar12lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 13 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar13lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 14 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar14lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 15 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar15lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 16 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar16lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 17 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar17lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 18 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar18lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 19 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar19lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 20 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar20lipat3"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 21 - 30 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 21 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar21lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 22 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar22lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 23 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar23lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 24 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar24lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 25 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar25lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 26 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar26lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 27 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar27lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 28 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar28lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 29 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar29lipat3"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 30 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar30lipat3"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col">TOTAL :</div>
              <div class="col"> (disesuaikan)<!-- <input type="number" class="form-control" name="totallembarlipat1"> --></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br>
        <hr><br>

        <!-- UNTUK LIPAT 4 -->
        <div class="row">
          <div class="col">
            <h5>Lipat 4 : <b>dari db</b> Lembar</h5>
          </div>
        </div><br>
        <div class="row">
          <!-- BARIS UNTUK LEMBAR 1 - 10 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 1 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar1lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 2 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar2lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 3 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar3lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 4 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar4lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 5 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar5lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 6 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar6lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 7 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar7lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 8 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar8lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 9 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar9lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 10 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar10lipat4"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 11 - 20 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 11 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar11lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 12 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar12lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 13 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar13lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 14 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar14lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 15 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar15lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 16 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar16lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 17 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar17lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 18 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar18lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 19 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar19lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 20 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar20lipat4"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
          <!-- BARIS UNTUK LEMBAR 21 - 30 -->
          <div class="col-md-4">
            <div class="row">
              <div class="col" align="right">Lembar 21 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar21lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 22 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar22lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 23 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar23lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 24 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar24lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 25 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar25lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 26 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar26lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 27 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar27lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 28 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar28lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 29 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar29lipat4"></div>
              <div class="col">Lembar</div>
            </div><br>
            <div class="row">
              <div class="col" align="right">Lembar 30 :</div>
              <div class="col-md-4"><input type="number" class="form-control" name="lembar30lipat4"></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col">TOTAL :</div>
              <div class="col"> (disesuaikan)<!-- <input type="number" class="form-control" name="totallembarlipat1"> --></div>
              <div class="col">Lembar</div>
            </div>
          </div>
        </div><br>
        <hr><br>

        <div class="row">
          <div class="col-md-6">
            Nama Operator - 1<br>
            <input type="text" class="form-control" name="operator1_shoe">
          </div>
          <div class="col-md-6">
            Nama Operator - 2<br>
            <input type="text" class="form-control" name="operator2_shoe">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6">
            Tanggal Input - 1<br>
            <input type="date" class="form-control" name="tanggal_input1_shoe">
          </div>
          <div class="col-md-6">
            Tanggal Input - 2<br>
            <input type="date" class="form-control" name="tanggal_input2_shoe">
          </div>
        </div><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="simpan" class="btn btn-success">Jadwal</button>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->
   