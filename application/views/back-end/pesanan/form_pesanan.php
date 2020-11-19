

   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1 class="card-title">Data Tabel Pesanan</h1>
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
                foreach ($pesanan as $p ) { ?>
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
