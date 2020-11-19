    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                           <img
                                    src="<?php echo base_url() ;?>assets/upload/toko/2.png" alt="">
                        </div>
                        <ul>
                            <li class="fa fa-map-marker"> <?php echo $data_toko->alamat ?></li><br>
                            <li class="fa fa-whatsapp">     <?php echo $data_toko->no_wa ?></li><br>
                            <li class="fa fa-envelope">     <?php echo $data_toko->email ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-2">
                    <br><br>
                    <div class="footer__widget">
                        <h5><b>Jam Oprasional</b></h5>
                        <br>
                        <h5 ><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $data_toko->jam_buka?></h5>
                        <br>
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <br><br>
                    
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <h5><b>Sosial Media</b></h5>
                            <br>
                            <a href="<?php echo $data_toko->link_facebook?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $data_toko->link_instagram?>"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                    aria-hidden="true"></i> by <a
                                    href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </footer>