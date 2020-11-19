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
              <h1 class="card-title">Data Tabel Kategori Makanan</h1>
              <ol class="card-header float-sm-right">
                <a href="<?php echo base_url(); ?>back-end/c_kategori/halaman_T">
                <button type="button" class="btn btn-primary"><li class="fa fa-plus"> </li>Tambah Data</button>
                </a>
              </ol>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr align="center">
                  <th>No.</th>
                  <th>Nama Kategori Makanan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($kategori as $r) 
                 {?>
                <tr align="center">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $r->nama_kategori ?></td>
                  <td width="200"><a href="<?php echo site_url('back-end/c_kategori/edit/'.$r->id_kategori) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('back-end/c_kategori/delete/'.$r->id_kategori) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                </tr>
                <?php }; ?>
                <tfoot>
                <tr align="center">
                  <th>No.</th>
                  <th>Nama Kategori Makanan</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
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
