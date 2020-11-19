
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Member</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" method="post" action="<?php echo base_url();?>back-end/c_user/add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Member</label>
                    <input type="name" class="form-control" name="nama_user" placeholder="Nama Member . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="name" class="form-control" name="username" placeholder="Username . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="name" class="form-control" name="password" placeholder="Password . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telfon</label>
                    <input type="number" class="form-control" name="no_telfon" placeholder="Nomer Telfon . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">alamat</label>
                    <input type="name" class="form-control" name="alamat" placeholder="alamat . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
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
