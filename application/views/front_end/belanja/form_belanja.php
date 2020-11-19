    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>assets/frond_end/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>happy shopping</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <ul>
                            <?php foreach ($kategori as $r) { ?>

                            <li><a
                            href="<?php echo base_url(); ?>front_end/home/getbyid/<?php echo $r->slug_kategori?>"><?php echo $r->nama_kategori ?></a>
                            </li>

                            <?php } ?>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title text-center product__discount__title">
                        
                            <h2><?php echo $nama_k->nama_kategori ?></h2>
                  
                        </div>
                    </div>
                    <div class="row">

                        <?php foreach ($barang as $r) { ?>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="product__item">
                                <a href="<?php echo base_url()?>front_end/home/detail_barang/<?php echo $r->slug_barang?>">
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
    <!-- Product Section End -->