
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Admin</label>
                    <input type="name" class="form-control" value="<?php echo $admin->nama_admin ?>" name="nama_admin" placeholder="Masukan Nama" <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
                  </div>
                  <input type="hidden" class="form-control" value="<?php echo $admin->id_admin ?>" name="id_admin"  <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="username" class="form-control" value="<?php echo $admin->username ?>" <?php echo form_error('username') ? 'is-invalid':'' ?> name="username"  placeholder="Masukan Username" />
                <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" value="<?php echo $admin->password ?>" class="form-control" <?php echo form_error('username') ? 'is-invalid':'' ?> name="password"  placeholder="Password" />
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
