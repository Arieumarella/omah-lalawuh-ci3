<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrasi Akun</title>
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
            <form class="form-detail" action="<?php echo base_url();?>front_end/login/creat_akun" method="post">
                <h2>Buat Akun Baru</h2>
                <div class="form-row">
                    <label for="full-name">Nama</label>
                    <input type="text" name="nama_user" id="full-name" class="input-text" placeholder="Nama Custemer" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-row">
                    <label for="full-name">Email</label>
                    <input type="email" name="email" id="full-name" class="input-text" placeholder="Input Email" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-row">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="input-text" placeholder="Alamat Custemer" required>
                    <i class="fas fa-envelope"></i>
                </div>
                 <div class="form-row">
                    <label for="telefon">No Telfon / WA</label>
                    <input type="number" name="no_telfon" id="alamat" class="input-text" placeholder="Input No Telfon / WA" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                    <i class="fa fa-phone"></i>
                </div>
                 <div class="form-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="alamat" class="input-text" placeholder="Username Custemer" required >
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pw1" class="input-text" placeholder="Input Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                 <div class="form-row">
                    <label for="password">Ulangi Password</label>
                    <input type="password" required id="pw2" class="input-text" placeholder="Ulangi Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="submit" class="register" value="Submit">
                    <h4 align="center">Sudah Memiliki Akun Silahkan  <a href="<?php echo base_url();?>front_end/login">LOGIN</a> </h4>
                </div>
            </form>
             <script type="text/javascript">
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Silahkan isi password yang sama");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script>
        </div>
    </div>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>