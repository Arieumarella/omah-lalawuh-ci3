<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/frond_end/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frond_end/datepicker/css/datepicker.css" type="text/css">

    
 
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php $this->load->view('front_end/header');?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <?php $this->load->view($contents);?>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->

    <!-- Blog Section End -->
    <br><br>
    <!-- Footer Section Begin -->
    <?php $this->load->view('front_end/footer');?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url() ;?>assets/frond_end/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/mixitup.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/frond_end/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/frond_end/datepicker/js/bootstrap-datepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/sweet/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sweet/myscript.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd-MM-yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
</script>



</body>

</html>