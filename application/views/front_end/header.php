<?php $keranjang = $this->cart->contents(); ?>
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
           <img src="<?php echo base_url() ;?>assets/upload/toko/3.png" alt="">
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="<?php echo base_url() ;?>front_end/c_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span><?php echo $this->cart->total_items(); ?></span></a></li>
            </ul>

        </div>
        <?php if ($this->session->userdata('nama')) { ?><div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user" ></i> <?php echo $this->session->userdata('nama'); ?> </a>

            </div><br>
            <div class="header__top__right__auth">
                
                 <a href="<?php echo base_url() ;?>front_end/login/logout"><i class="fa fa-sign-out" ></i> Log Out</a>
            </div>
        </div>
        <?php }else{ ?>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="<?php echo base_url() ;?>front_end/login"><i class="fa fa-user" ></i> Login Member</a>

            </div><br>
            <div class="header__top__right__auth">
                
                 <a href="<?php echo base_url() ;?>front_end/login"><i class="fa fa-user" ></i> Buat Akun</a>
            </div>
        </div>
        <?php } ?>
        <?php if ($this->session->userdata('nama')) { ?>
            <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <ul>
                    <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home">Home</a></li>
                    <li  <?= $this->uri->segment(3) == 'belanja' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home/belanja">Produk</a></li>
                    <li <?= $this->uri->segment(2) == 'c_cart' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/c_cart">Keranjang Belanja</a></li>
                    <li <?= $this->uri->segment(2) == 'C_kontak' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_kontak">Kontak</a></li>
                    <li <?= $this->uri->segment(2) == 'C_pesanan' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_pesanan/pesanan/<?php echo $this->session->userdata('id_user') ?>">Pesanan</a></li>
                </ul>
            </ul>
        </nav>
        <?php }else{ ?>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <ul>
                    <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home">Home</a></li>
                    <li <?= $this->uri->segment(3) == 'belanja' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home/belanja">Produk</a></li>
                    <li <?= $this->uri->segment(2) == 'c_cart' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/c_cart">Keranjang Belanja</a></li>
                    <li <?= $this->uri->segment(2) == 'C_kontak' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_kontak">Kontak</a></li>
                </ul>
            </ul>
        </nav>
        <?php } ?>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="<?php echo $data_toko->link_facebook?>"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $data_toko->link_instagram?>"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i><?php echo $data_toko->email; ?></li>

            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>

                                <li><i class="fa fa-envelope"></i> <?php echo $data_toko->email ?></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="<?php echo $data_toko->link_facebook?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $data_toko->link_instagram?>"><i class="fa fa-instagram"></i></a>

                            </div>
                            <?php if ($this->session->userdata('nama')) { ?>
                            <div class="header__top__right__social">
                               <a href="#"><i class="fa fa-user"></i><?php echo $this->session->userdata('nama'); ?></a>

                            </div>
                            <div class="header__top__right__auth">
                                <a href="<?php echo base_url() ;?>front_end/login/logout"><i class="fa fa-sign-out"></i>  Log Out</a>
                            </div>
                            <?php }else{ ?>
                                <div class="header__top__right__social">
                               <a href="<?php echo base_url() ;?>front_end/login/registrasi"><i class="fa fa-user"></i>  Buat Akun</a>

                            </div>
                            <div class="header__top__right__auth">
                                <a href="<?php echo base_url() ;?>front_end/login"><i class="fa fa-user"></i>  Login Member</a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <img width="400" height="80"
                                src="<?php echo base_url() ;?>assets/upload/toko/3.png" alt="">
                    </div>
                </div>
                <?php if ($this->session->userdata('nama')) { ?>
                    <div class="col-lg-7 text-center">
                    <nav class="header__menu">
                        <ul>
                            <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home">Home</a>
                            </li>
                            <li <?= $this->uri->segment(3) == 'belanja' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home/belanja">Produk</a></li>
                            <li <?= $this->uri->segment(2) == 'c_cart' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/c_cart">Keranjang
                                    Belanja</a></li>
                            <li <?= $this->uri->segment(2) == 'C_kontak' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_kontak">Kontak</a></li>
                            <li <?= $this->uri->segment(2) == 'C_pesanan' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_pesanan/pesanan/<?php echo $this->session->userdata('id_user') ?>">Pesanan</a></li>
                        </ul>
                    </nav>
                </div>
                <?php }else{ ?>
                <div class="col-lg-7 text-center">
                    <nav class="header__menu">
                        <ul>
                            <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home">Home</a>
                            </li>
                            <li  <?= $this->uri->segment(3) == 'belanja' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/home/belanja">Produk</a></li>
                            <li  <?= $this->uri->segment(2) == 'c_cart' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/c_cart">Keranjang
                                    Belanja</a></li>
                            <li  <?= $this->uri->segment(2) == 'C_kontak' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ;?>front_end/C_kontak">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            <?php } ?>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="<?php echo base_url() ;?>front_end/c_cart"><i
                                        class="fa fa-shopping-cart"></i>
                                    <span><?php echo $this->cart->total_items(); ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>