
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kategori Makanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" method="post" action="<?php echo base_url();?>back-end/c_kategori/add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori Makanan</label>
                    <input type="name" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori Makanan" <?php echo form_error('nama') ? 'is-invalid':'' ?> />
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
