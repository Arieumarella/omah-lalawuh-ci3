    <!-- Breadcrumb Section Begin -->
   
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url()?>assets/frond_end/img/breadcrumb.jpg">

        <div class="container">
        <form method="post" action="<?php echo base_url(); ?>front_end/home/add_cart_detail" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $barang->nama_barang; ?></h2>
                        <input type="hidden" name="nama_barang" value="<?php echo $barang->nama_barang; ?>">
                        <input type="hidden" name="harga" value="<?php echo $barang->harga; ?>">
                        <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                          
                                src="<?php echo base_url()?>assets/upload/gambar_utama/<?php echo $barang->gambar_utama?>" alt="">
                            
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                    <?php foreach ($foto as $g ) { ?>
                            <img data-imgbigurl="<?php echo base_url()?>assets/upload/<?php echo $g->gambar?>"
                                src="<?php echo base_url()?>assets/upload/<?php echo $g->gambar?>" alt="">
                    <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $barang->nama_barang ?></h3>
                        <div class="product__details__price">Rp. <?php echo number_format($barang->harga,0,',','.'); ?></div>
                        <p><?php echo $barang->keterangan ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="quantity" value="1">
                                </div>
                            </div>
                        </div>

                        <input class="primary-btn" type="submit" value="ADD TO CARD">
                        <ul>
                            <li><b>Stock Produk</b> <span><?php echo $barang->stok ?> pcs</span></li>
                            <li><b>Pengiriman</b> <span>1 hari Setelah Pemesanan <samp>Free pickup today</samp></span></li>
                        </ul>
                    </div>
                </div>
            </div>
               </form>
        </div>
     
    </section>

    <!-- Product Details Section End -->