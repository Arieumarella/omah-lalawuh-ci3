  <?php if ($pesanan) { ?>
   <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>assets/frond_end/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>List Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
<div class="container">

	 <div class="card-body">
              <div class="col-lg-12">
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
                        <a href="<?php echo base_url(); ?>front_end/c_pesanan/detail/<?php echo $p->id_transaksi; ?>"><input class="btn btn-success btn-sm" type="submit" value="DETAIL"></a>

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
</div>
<?php }else{ ?>
<section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>assets/frond_end/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>List Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
 	<div class="col-lg-12 text-center">';
        <h2>Anda Belum Melakukan Pemesanan</h2>';
        <br>
        <a href="<?php echo base_url(); ?>front_end/home/belanja" class="primary-btn cart-btn1"><span class="fa fa-plus"></span> Belanja Yuuk</a>
        </div>
        <br><br>
<?php } ?>