
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Edit Data kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama kategori</label>
                    <input type="name" class="form-control" value="<?php echo $kategori->nama_kategori ?>" name="nama_kategori" placeholder="Masukan Nama" <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
                  </div>
                  <input type="hidden" class="form-control" value="<?php echo $kategori->id_kategori ?>" name="id_kategori"  <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
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
