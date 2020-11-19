
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" method="post" action="<?php echo base_url();?>back-end/c_admin/add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Admin</label>
                    <input type="name" class="form-control" name="nama_admin" placeholder="Masukan Nama" <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
                  </div>
                  <input type="hidden" class="form-control" value="" name="id_admin"  <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="username" class="form-control" <?php echo form_error('username') ? 'is-invalid':'' ?> name="username"  placeholder="Masukan Username" />
                <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" <?php echo form_error('username') ? 'is-invalid':'' ?> name="password"  placeholder="Password" />
                    <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success float-sm-right" name="btn" value="simpan">Simpan</button>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
          </section>
