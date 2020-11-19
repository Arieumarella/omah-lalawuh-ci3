    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
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
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="<?php echo base_url(); ?>front_end/home/cari" method="POST">
                                <div class="hero__search__categories">
                                    Cari Produk
                                </div>
                                <input type="text" name="cari" placeholder="Masukan Nama Produk Atau Kategori">
                                <button type="submit" class="site-btn"><i style="font-size: 20px" class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5><?php echo $data_toko->no_wa ?></h5>
                                <span><?php echo $data_toko->jam_buka ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg"
                        data-setbg="<?php echo base_url(); ?>assets/upload/toko/<?php echo $data_toko->banner_header;?>">
                    </div>
                </div>
            </div>
        </div>
    </section>