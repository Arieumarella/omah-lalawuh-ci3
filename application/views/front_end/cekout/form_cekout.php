<section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>assets/frond_end/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Datail Pemesanan</h4>
                <form action="<?php echo base_url(); ?>front_end/c_cekout/proses_cekout"  method="POST">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">

                             <?php 
                                $id_user = $this->session->userdata('id_user');
                                $D_user = $this->M_cart->add_user($id_user);
                                $kode_transaksi = date('dmYY').strtoupper(random_string('alnum',5));
                                $startTime = date("d-m-Y H:i:s");
                                $cenvertedTime = date('d-m-Y',strtotime('+1 day',strtotime($startTime)));
                                $total_bayar = $this->cart->total();
                             { ?>

                            <input type="hidden" name="id_user" value="<?php echo $D_user->id_user ?>">
                            <input type="hidden" name="tanggal_transaksi" value="<?php echo date('d-m-Y'); ?>">
                            <input type="hidden" name="tanggal_batas_bayar" value="<?php echo $cenvertedTime; ?>">
                             <input type="hidden" name="total_bayar" value="<?php echo $total_bayar; ?>">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Kode Transaksi</p>
                                        <input readonly required type="text" name="kode_transaksi"  value="<?php echo $kode_transaksi; ?>">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Nama Pemesan<span>*</span></p>
                                        <input required type="text" name="nama_custemer" placeholder="Masukan Nama Pemesan." value="<?php echo $D_user->nama_user; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat Pengiriman<span>*</span></p>
                                <input required name="alamat_pengiriman" type="text" value="<?php echo $D_user->alamat; ?>" placeholder="Masukan Alamat Pengiriman.">
                            </div>
                            <div class="checkout__input">
                                <p>No Telfon / WA<span>*</span></p>
                                <input required type="number" name="no_telfon_custemer" value="<?php echo $D_user->no_telfon; ?>" placeholder="Masukan Nomer Telfon / WA" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Tanggal Pengiriman Pesanan<span>*</span></p>
                                <input required id="tanggal" name="tanggal_pengambilan" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input required name="email_custemer" placeholder="Masukan Email" value="<?php echo $D_user->email; ?>"  type="email">
                            </div>
                            <div class="checkout__input">
                                <p>notes Penjual<span>*</span></p>
                                <input type="text"
                                  required name="notes"  placeholder="Input Notes Untuk Penjual">
                            </div>
                        <?php } ?>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="checkout__order">
                                <h4 align="center">Detail Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <?php foreach ($this->cart->contents() as $items ) { ?>
                                     <?php $id_barang =  $items['id'];
                                     $k_barang = $this->M_cart->add_barang_cart($id_barang); { ?>

                                    <?php $subtotal1 = $k_barang->harga * $items['qty']; 

                                    ?>

                                    <li><?php echo $items['qty'] ?>x <?php echo $k_barang->nama_barang ?> <span><?php $subtotal1 = $k_barang->harga * $items['qty'];{ ?>
                                    Rp. <?php echo number_format( $subtotal1, 0,',','.') ?>
                                    <?php } ?></span></li>

                                    <?php } ?>
                                    <?php } ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp. <?php echo number_format($this->cart->total(), 0,',','.'); ?></span></div>
                                <div class="checkout__order__total">Total <span>Rp. <?php echo number_format($this->cart->total(), 0,',','.'); ?></span></div>
                                <div class="checkout__input__checkbox">
                                <p>Silahkan tekan order dan melakukan pembayaran maximal 1 (satu) hari setelah tanggal pemesanan. Jika ada pertanyaan silahkan hubungi admin dengan kontak whatsapp yang sudah tersedia.</p>
                                <button type="submit" class="site-btn"><i class="fa fa-cart-plus" aria-hidden="true"></i> PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>