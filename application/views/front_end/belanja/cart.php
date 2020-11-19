<section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url(); ?>assets/frond_end/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Keranjang Belanja</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <?php if ($this->cart->contents()) { ?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            

                            <?php foreach ($this->cart->contents() as $items ) { ?>
                                

                            <form action="<?php echo base_url();?>front_end/c_cart/update_cart/<?php echo $items['rowid'];?>" method="post">

                            <?php 
                                
                                $id_barang =  $items['id'];
                                $k_barang = $this->M_cart->add_barang_cart($id_barang);
                                {
                            
                            ?>

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img width="100" height="100" src="<?php echo base_url() ; ?>assets/upload/gambar_utama/<?php echo $k_barang->gambar_utama  ?> " alt="">
                                        <h5><?php echo $k_barang->nama_barang ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo number_format($k_barang->harga, 0,',','.') ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="qty" value="<?php echo $items['qty'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php $subtotal1 = $k_barang->harga * $items['qty'];{ ?>
                                    <?php echo number_format( $subtotal1, 0,',','.') ?>
                                    <?php } ?>
                                    </td>
                                    <td class="shoping__cart__item__close1">
                                    
                                    <button style="background-color:#ffffff; border: none;" type="submit"><span class="fa fa-refresh"></span></button>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <a class="tombol-hapus" href="<?php echo base_url();?>front_end/c_cart/delete/<?php echo $items['rowid']; ?>">
                                        <span class="fa fa-times"></span>
                                    </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </form>
                            
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo base_url();?>front_end/home/belanja" class="primary-btn cart-btn1"><span class="fa fa-plus"></span> Tambah Produk</a>
                        <a href="<?php echo base_url();?>front_end/c_cart/delete_all_cahart" class="primary-btn cart-btn cart-btn-right tombol-hapus"><span class="fa fa-trash"></span> Hapus Keranjang</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Total Harga</h5>
                        <ul>
                            <li>Total <span>Rp. <?php echo number_format($this->cart->total(), 0,',','.'); ?></span></li>
                        </ul>
                        <a href="<?php echo base_url();?>front_end/c_cekout" class="primary-btn">CHECKOUT</a>
                    </div>
                </div>
                <?php }else{
                            echo ' <div class="col-lg-12 text-center">';
                            echo '<h2>Keranjang Belanja Kosong</h2>';
                            echo '<br>';
                            echo '<a href="home/belanja" class="primary-btn cart-btn1"><span class="fa fa-plus"></span> Tambah Produk</a>';
                            echo '</div>';
                        } ?>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->