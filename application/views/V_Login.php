<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/reset_stylesheet.css')?>">
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/login_stylesheet.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div class = 'main-container'>
            <div class  = 'header'>
                <div class = 'title'>
                    <h1>SIMPENMABA</h1>
                    <h2>Bobi University</h2>
                </div>
            </div>
            <div class = 'content'>
                <!-- <div class = 'title'>
                    <h1>SIMPENMABA</h1>
                    <h2>Bobi University</h2>
                </div> -->
                <div class = 'login'>
                    <div class = 'login-container'>
                        <form method = "post" action = "<?php echo base_url('C_Login/login'); ?>">
                            <?php if ($warning == '1'):?>
                                <span class = 'error'>Email dan password tidak boleh kosong</span>
                            <?php elseif ($warning == '2'):?>
                                <span class = 'error'>Email tidak boleh kosong</span>
                            <?php elseif ($warning == '3'):?>
                                <span class = 'error'>Password tidak boleh kosong</span>
                            <?php elseif ($warning == '4'):?>
                                <span class = 'error'>Password tidak sesuai dengan email</span>
                            <?php elseif ($warning == '5'):?>
                                <span class = 'error'>Email tidak terdaftar</span>
                            <?php endif; ?>
                            <div class = 'email-container'>
                                <p>Email</p>
                                <input type="text" name="email"><br>
                            </div>
                            <div class = 'pass-container'>
                                <p>Password</p>
                                <div class = 'password'>
                                    <input type="password" name="password"><br>
                                    <!-- <i id="toggle-password" class="fa fa-fw fa-eye field-icon toggle-password" aria-hidden="true" onClick="viewPassword()"></i>  -->
                                </div>
                            </div>
                            <div class = 'login-button'>
                                <div class = 'secondary-button'>
                                    <p class = 'secondary-button-login' ><a href = '<?php echo site_url('create')?>'>Buat Akun</a></p>
                                </div>
                                <input class = 'primary-button-login' type="submit" value="Masuk">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- <div class = 'footer'>
                <div class = 'copyright'>
                    <p>Sistem Penerimaan Mahasiswa Baru. 2019 Sistem Informasi, Bobi University</p>
                </div>
            </div> -->
    </body>

    <script>
        $( document ).ready(function() {
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>
</html>