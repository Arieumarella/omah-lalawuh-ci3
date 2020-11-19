

   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1 class="card-title">Data Tabel Detail Pesanan</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-md-12">
              <h4>Kode Transaksi <span class="badge badge-success"><?php echo $pesanan->kode_transaksi; ?></span></h4>
              <br>
              <div class="table-responsive-lg">
              <table class="table table-hover">

                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th cope="col">Nama Barang</th>
                    <th cope="col">Jumlah Pembelian</th>
                    <th cope="col">Harga Satuan</th>
                    <th cope="col">Total Harga</th>
                    </tr>
                </thead>
                <?php 
                $no = 1;
                foreach ($dt_pesanan as $p ) { ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->jumlah_pembelian ?></td>
                    <td>Rp. <?php echo number_format($p->harga_satuan, 0,',','.'); ?></td>
                    <td>Rp. <?php echo number_format($p->total_harga, 0,',','.'); ?></td>
            
                  </tr>
                </tbody>
              <?php } ?>
              <tbody>
                <tr>
                  <td colspan="3"></td>
                  <td><b>Total Harga</b></td>
                  <td><b>Rp. <?php echo number_format($pesanan->total_bayar, 0,',','.'); ?></b></td>
                </tr>
              </tbody>
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
