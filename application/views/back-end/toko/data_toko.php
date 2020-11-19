      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>


   <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="card-title">Data Tabel Toko Online</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover table-responsive">
                <thead>
                <tr align="center">
                  <th>No.</th>
                  <th>alamat</th>
                  <th>No Telfon</th>
                  <th>No Whatsapp</th>
                  <th>No Rekening</th>
                  <th>Email</th>
                  <th>Jam Buka Dan Tutup</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($toko as $r) 
                 {?>
                <tr align="center">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $r->alamat ?></td>
                  <td><?php echo $r->no_telfon ?></td>
                  <td><?php echo $r->no_wa ?></td>
                  <td><?php echo $r->rekening ?></td>
                  <td><?php echo $r->email ?></td>
                  <td><?php echo $r->jam_buka ?></td>
                  <td>
                    <a href="<?php echo site_url('back-end/c_toko/edit/'.$r->id_toko) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                  </td>
                <?php }; ?>
                <tfoot>
              </table>
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
