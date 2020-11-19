  
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Edite Data Makanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="<?php echo base_url() ?>back-end/c_barang/edit_data" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Makanan</label>
                    <input required type="text" value="<?php echo $barang->nama_barang ?>" class="form-control" name="nama_barang"  />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Kategori Makanan</label>
                    <select required class="form-control" name="id_kategori">
                      <option required disabled="disabled" selected="selected">-- Pilih Kategori--</option>
                    <?php foreach ($kategori as $r) {?>
                      <option required value="<?php echo $r->id_kategori ?>"><?php echo $r->nama_kategori ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Makanan</label>
                    <input required type="text"  value="<?php echo $barang->harga ?>" id="rupiah" class="form-control" name="harga" placeholder="Harga . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok Makanan</label>
                    <input type="number" value="<?php echo $barang->stok ?>" class="form-control" name="stok" placeholder="Stok . ." <?php echo form_error('nama') ? 'is-invalid':'' ?> />
                  </div>
                  <input type="hidden" value="<?php echo $barang->id_barang ?>" class="form-control" name="id_barang"/>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan Makanan</label>
                    <textarea name="keterangan"  id="ckeditor" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar Utama</label>
                    <br>
                    <input type="file" value="<?php echo $barang->gambar_utama ?>" class="file" name="gambar_utama" />
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

