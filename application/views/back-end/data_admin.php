


   <section class="content">
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('success'); ?>"></div>

      <?php if ($this->session->flashdata('success')): ?>

        
        <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="card-title">Data Tabel Admin</h1>
            </div>
              <div class="card-body">
              <ol class="card-header float-sm-right">
                <a href="<?php echo base_url(); ?>back-end/c_admin/halaman_T">
                <button type="button" class="btn btn-primary"><li class="fa fa-plus"> </li>Tambah Data</button>
                </a>
              </ol>
            
              <div class="card-header float-sm-right ">
                  <form  role="form" action="<?php echo base_url(); ?>pegination/search" method="post">
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
              
            <!-- /.card-header -->
            <div class="card-body">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                 <?php $no=1; foreach ($data->result() as $row) :?>


                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->nama_admin ?></td>
                  <td><?php echo $row->username ?></td>
                  <td><?php echo $row->password ?></td>
                  <td width="200">
                    <a href="<?php echo site_url('back-end/c_admin/edit/'.$row->id_admin) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

                      <a onclick="return deleteConfirm('<?php echo base_url('back-end/c_admin/delete/'.$row->id_admin) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                </tr>
                <?php endforeach; ?>
                     
          
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Password</th>
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

</script>
