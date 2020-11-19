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
              <h1 class="card-title">Data Tabel Mamber</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <ol class="card-header float-sm-right">

                <a href="<?php echo base_url(); ?>back-end/c_user/halaman_T">
                <button type="button" class="btn btn-primary"><li class="fa fa-plus"> </li>Tambah Data</button>
                </a>

              </ol>

              <div class="card-header float-sm-right ">
                  <form  role="form" action="<?php echo base_url(); ?>back-end/c_user/search" method="post">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn btn-primary" name="search_submit"  type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
              </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr align="center">
                  <th>No.</th>
                  <th>Nama Member</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nomer Telfon</th>
                  <th>Alamat Member</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($user as $r) 
                 {?>
                <tr align="center">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $r->nama_user ?></td>
                  <td><?php echo $r->username ?></td>
                  <td><?php echo $r->password ?></td>
                  <td><?php echo $r->no_telfon ?></td>
                  <td><?php echo $r->alamat ?></td>
                  <td width="200"><a href="<?php echo site_url('back-end/c_user/edit/'.$r->id_user) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('back-end/c_user/delete/'.$r->id_user) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                </tr>
                <?php }; ?>
                <tfoot>
                <tr align="center">
                  <th>No.</th>
                  <th>Nama Member</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nomer Telfon</th>
                  <th>Alamat Member</th>
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
