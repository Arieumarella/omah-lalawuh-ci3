    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Semua Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php foreach ($kategori as $r) { ?>
                            <li data-filter=".b<?php echo $r->id_kategori ?>"><?php echo $r->nama_kategori ?></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row featured__filter">



                        <?php foreach ($barang as $r) { ?>


                        <div class="col-lg-3 col-md-4 col-6 mix b<?php echo $r->id_kategori ?>">



                            <div class="mb-4 ml-2">
                                <a href="<?php echo base_url();?>front_end/home/detail_barang/<?php echo $r->slug_barang?>">
                                    <div class="card rounded">
                                        <img src="<?php echo base_url() ; ?>assets/upload/gambar_utama/<?php echo $r->gambar_utama  ?> "
                                            class="card-img-top" width="100" height="200" alt="...">
                                        <div class="card-body bg-light">
                                            <h6 class="card-title text-center"><b><?php echo $r->nama_barang ?></b></h6>
                                            <p class="card-text"><?php echo character_limiter($r->keterangan, 15); ?></p>
                                            <h6 class="card-title text-danger">Rp.
                                                <?php echo  number_format($r->harga,0,',','.');  ?></h6>
                                            <p class="card-title">Stok : <?php echo $r->stok ?></p>

                                            <a href="<?php echo base_url();?>front_end/c_cart/add_cart/<?php echo $r->id_barang;?>" class="btn btn-danger btn-block">add to chart</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>


                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->