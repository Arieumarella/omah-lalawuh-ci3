  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-gray">
                      <div class="card-header">
                          <h3 class="card-title">Edite Data Toko</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->

                      <form action="<?php echo base_url() ?>back-end/c_toko/edit_data" enctype="multipart/form-data"
                          method="post">
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Link Facebook</label>
                                  <input required type="text" value="<?php echo $toko->link_facebook ?>"
                                      class="form-control" name="facebook" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Link Insatgram</label>
                                  <input required type="text" value="<?php echo $toko->link_instagram ?>"
                                      class="form-control" name="instagram" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Rekening</label>
                                  <input required type="text" value="<?php echo $toko->rekening ?>" class="form-control"
                                      name="rekening" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Alamat</label>
                                  <input required type="text" value="<?php echo $toko->alamat ?>" class="form-control"
                                      name="alamat" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">No Telfon</label>
                                  <input required type="number" value="<?php echo $toko->no_telfon ?>"
                                      class="form-control" name="no_telfon" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">No Whatsapp</label>
                                  <input required type="number" value="<?php echo $toko->no_wa ?>" class="form-control"
                                      name="no_wa" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">email</label>
                                  <input required type="email" value="<?php echo $toko->email ?>" class="form-control"
                                      name="email" />
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Jam Buka & Tutup</label>
                                  <input required type="text" value="<?php echo $toko->jam_buka ?>" class="form-control"
                                      name="jambuka" />
                              </div>
                              <input type="hidden" value="<?php echo $toko->id_toko ?>" class="form-control"
                                  name="id_toko" />
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Gambar Header</label>
                                  <br>
                                  <input type="file" value="<?php echo $toko->banner_header ?>" class="file"
                                      name="banner_header" />
                              </div>
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer ">
                              <button type="submit" class="btn btn-success float-sm-right" name="btn"
                                  value="simpan">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>