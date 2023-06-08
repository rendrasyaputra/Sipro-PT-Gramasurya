<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?=site_url('pracetak/User/tambah_user')?>"  class="btn btn-success btn-lg">
                  <i class="fa fa-plus"></i> TAMBAH USER
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
          <h3 class="card-title coba">Data User</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body text-center">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <td>Nomor</td>
              <td>Nama</td>
              <td>Email</td>
              <td>Username</td>
              <td>Level</td>
              <td>Actions</td>
            </tr>
            </thead>
           <?php $no=1;
           foreach($row->result() as $key => $data){ ?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$data->nama?></td>
              <td><?=$data->email?></td>
              <td><?=$data->username?></td>
              <td><?=$data->level?></td>
              <td>
                <div class="btn-group me-2" role="group" aria-label="First group">
                <form action="<?=site_url('pracetak/User/hapus_user')?>" method="post">
                  <a class="btn btn-primary" href="<?=site_url('pracetak/User/edit_user/'.$data->id_user)?>">
                    <i class="fa fa-pencil" style="font-size:24px"></i>
                  </a>
                  <input type="hidden" name="id_user" value="<?=$data->id_user?>">
                  <button onclick="return confirm('Apakah anda yakin ?')" class="btn btn-primary">
                  <i class="fa fa-trash" style="font-size:24px"></i>
                  </button>
                </form>
                </div>
              </td>
            </tr>
            <?php
            } ?>
          </table>
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