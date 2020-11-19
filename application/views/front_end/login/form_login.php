<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Member</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frond_end/login/css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frond_end/login/fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frond_end/login/css/style.css"/>
</head>
<body class="form-v5">
    <div class="page-content">
        <div class="form-v5-content">
            <form class="form-detail" action="<?php echo base_url();?>front_end/login/login" method="post">
                <h2>Login Custemer</h2>
                <h5 align="center" ><font color="red"><?php echo $error; ?><?php echo $this->session->flashdata('data'); ?></font></h5>
                 <h5 align="center" ><font color="green"><?php echo $this->session->flashdata('success'); ?></font></h5>
                 <div class="form-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="alamat" class="input-text" placeholder="Username Custemer" required>
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pass" class="input-text" placeholder="Input Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="submit" class="register" value="Login">
                </div>
                 <div class="text-center">
                 <h4 align="center">Belum Mempunyai akun ?  <a href="<?php echo base_url();?>front_end/login/registrasi">Buat Akun.</a> </h4>
             </div>
            </form>
            
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>