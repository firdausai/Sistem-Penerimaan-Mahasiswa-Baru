<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/reset_stylesheet.css')?>">
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/login_stylesheet.css')?>">
    </head>
    <body>
        <div class = 'content'>
            <div class = 'title'>
                <h1>SIMPENMABA</h1>
                <h2>Bobi University</h2>
            </div>
            <div class = 'login'>
                <form action="/action_page.php">
                    <p>Username</p>
                    <input type="text" name="username"><br>
                    <p>Password</p>
                    <input type="text" name="password"><br>
                    <div class = 'login-button'>
                        <input class = 'secondary-button-login' type="submit" value="Buat Akun">
                        <input class = 'primary-button-login' type="submit" value="Masuk">
                    </div>
                </form> 
            </div>
        </div>
            <div class = footer>
                <p>Sistem Penerimaan Mahasiswa Baru (SIMPENMABA) 2019 Sistem Informasi, Bobi University</p>
            </div>
    </body>
</html>