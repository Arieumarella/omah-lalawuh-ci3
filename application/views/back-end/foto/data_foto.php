      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

   <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <?php echo form_open_multipart('back-end/c_foto/upload_image'); ?>               
                  <div class="form-group form-group-lgt">
                    <label class="col-md-8 control-label">Unggah Gambar <?php echo $barang->nama_barang ?></label>
                    <div class="col-md-6">

                     <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">
                      <input type="file" name="gambar" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>

                     <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang; ?>">
                </div>
                 <div class="form-group form-group-lgt">
                <div align="right" class="col-md-6">
                    <button class="btn btn-success btn-sm  " name="submit" type="submit">
                        <i class="fa fa-save"></i> Save
                      </button>
                  </div>
                </div>
                

 <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </section>




   <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="card-title">Data Tabel Gambar <?php echo $barang->nama_barang; ?></h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr align="center">
                  <th>No.</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($gambar as $r) 
                 {?>
                <tr align="center">
                  <td><?php echo $no++ ?></td>
                  <td><img width="200" height="200" src="<?php echo base_url(); ?>/assets/upload/<?php echo $r['gambar']; ?>"></td>
                   </td>
                   <td>
                      <a onclick="deleteConfirm('<?php echo site_url('back-end/c_foto/delete/'.$r['id_gambar']) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                   </td>
                </tr>
                <?php }; ?>
                <tfoot>
                <tr align="center">
                  <th>No.</th>
                  <th>Gambar</th>
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

    <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
