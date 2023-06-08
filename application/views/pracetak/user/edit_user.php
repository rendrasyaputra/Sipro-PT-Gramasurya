<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?=site_url('pracetak/User/index')?>"  class="btn btn-success btn-lg">
                  <i class="fa fa-undo"></i> KEMBALI
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
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_user" value="<?=$row->id_user?>">
                    <input type="text" name="nama" value="<?=$this->input->post('nama') ? $this->input->post('nama') : $row->nama ?>" class="form-control">
                    <?=form_error('nama')?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?=$this->input->post('email') ? $this->input->post('email') : $row->email ?>" class="form-control">
                    <?=form_error('email')?>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" value="<?=set_value('level')?>" class="form-control">
                        <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                        <option value="1" <?=$level ==1 ? 'selected' : null?>>Pracetak</option>
                        <option value="2" <?=$level ==2 ? 'selected' : null?>>Cetak</option>
                        <option value="3" <?=$level ==3 ? 'selected' : null?>>Finishing</option>
                    </select>
                    <?=form_error('level')?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?=$this->input->post('username') ? $this->input->post('username') : $row->username ?>" class="form-control">
                    <?=form_error('username')?>
                </div>
                <div class="form-group">
                    <label>Password</label><small> (Biarkan kosong jika tidak diganti)</small>
                    <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
                    <?=form_error('password')?>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
                    <?=form_error('passconf')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">Save</button>
                </div>
            </form>
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