    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pesanan; ?></h3>

                <p>Semua Pesanan</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="<?php echo base_url();?>back-end/c_pesanan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $produk; ?><sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Produk</p>
              </div>
              <div class="icon">
                <i class="fa fa-database"></i>
              </div>
              <a href="<?php echo base_url();?>pegination/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $custemer; ?></h3>

                <p>Jumlah Custemer</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url();?>back-end/c_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $kategori; ?></h3>

                <p>Jumlah Kategori Produk</p>
              </div>
              <div class="icon">
                <i class="fa fa-th-list"></i>
              </div>
              <a href="<?php echo base_url();?>back-end/c_kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>



       <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="text-center">
              <br>
              <h3>Data Pesanan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-md-12">
              <div class="table-responsive-lg">
              <table class="table table-hover">

                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th cope="col">Kode-Transaksi</th>
                    <th cope="col">Pemesan</th>
                    <th cope="col">Kontak</th>
                    <th cope="col">Alamat</th>
                    <th cope="col">Notes</th>
                    <th cope="col">Tgl-Pengantaran</th>
                    <th cope="col">Batas-Pembayaran</th>
                    <th cope="col">Aksi</th>
                    </tr>
                </thead>
                <?php 
                $no = 1;
                foreach ($pesanan_1 as $p ) { ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $p->kode_transaksi ?></td>
                    <td><?php echo $p->nama_custemer ?></td>
                    <td><?php echo $p->no_telfon_custemer ?></td>
                    <td><?php echo $p->alamat_pengiriman ?></td>
                    <td><?php echo $p->notes ?></td>
                    <td><?php echo $p->tanggal_pengambilan ?></td>
                    <td><?php echo $p->tanggal_batas_bayar ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>back-end/c_pesanan/detail/<?php echo $p->id_transaksi; ?>"><input class="btn btn-success btn-sm" type="submit" value="DETAIL"></a>

                    </td>
                  </tr>
                </tbody>
              <?php } ?>
              </div>
              </table>
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
