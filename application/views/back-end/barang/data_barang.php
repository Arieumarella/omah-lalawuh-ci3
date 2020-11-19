      <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>


      <section class="content">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h1 class="card-title">Data Tabel Makanan</h1>
                      </div>
                      <div class="card-body">
                          <ol class="card-header float-sm-right">
                              <a href="<?php echo base_url(); ?>back-end/c_barang/halaman_T">
                                  <button type="button" class="btn btn-primary">
                                      <li class="fa fa-plus"> </li>Tambah Data
                                  </button>
                              </a>
                          </ol>
                          <div class="card-header float-sm-right ">
                              <form role="form" action="<?php echo base_url(); ?>pegination/cari_barang" method="post">
                                  <div class="input-group input-group-sm">
                                      <input class="form-control form-control-navbar" name="keyword" type="search"
                                          placeholder="Search" aria-label="Search">
                                      <div class="input-group-append">
                                          <button class="btn btn btn-primary" name="search_submit" type="submit">
                                              <i class="fas fa-search"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover table-responsive">
                                  <thead>
                                      <tr align="center">
                                          <th>No.</th>
                                          <th>Gambar</th>
                                          <th>Nama Makanan</th>
                                          <th>Kategori Makanan</th>
                                          <th>Harga</th>
                                          <th>Stok</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                      $no = 1;
                      foreach ($barang as $r) { ?>
                                      <tr align="center">
                                          <td><?php echo $no++ ?></td>
                                          <td>
                                              <img width="150" height="150"
                                                  src="<?php echo base_url(); ?>assets/upload/gambar_utama/<?php echo $r->gambar_utama  ?>">
                                          </td>
                                          <td><?php echo $r->nama_barang ?></td>
                                          <td><?php echo $r->nama_kategori ?></td>
                                          <td><?php echo $r->harga ?></td>
                                          <td><?php echo $r->stok ?></td>
                                          <td align="canter">
                                              <a href="<?php echo site_url('back-end/c_foto/foto/' . $r->id_barang) ?>"
                                                  class="btn btn-small text-success"><i class="fas fa-image"></i>
                                                  Gallery</a>
                                              <a href="<?php echo site_url('back-end/c_barang/edit/' . $r->id_barang) ?>"
                                                  class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                               <a href="<?php echo site_url('back-end/c_barang/edit/' . $r->id_barang) ?>"
                                                  class="btn btn-small"><i class="fas fa-edit"></i> Hapus</a></td>
                                      </tr>
                                      <?php }; ?>
                                  <tfoot>
                                      <tr align="center">
                                          <th>No.</th>
                                          <th>Gambar</th>
                                          <th>Nama Makanan</th>
                                          <th>Kategori Makanan</th>
                                          <th>Harga</th>
                                          <th>Stok</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </tfoot>
                              </table>
                              <br>
                              <div class="row">
                                  <div class="col">
                                      <!--Tampilkan pagination-->
                                      <?php echo $pagination; ?>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                      <!-- /.card -->
                  </div>
                  <!-- /.col -->
              </div>

              <!-- /.row -->
      </section>