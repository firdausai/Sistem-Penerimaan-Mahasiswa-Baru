<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/reset_stylesheet.css')?>">
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/newaccount_stylesheet.css')?>">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <div class = 'create-account-container'>
            <div class = 'questions'>
                <?php echo validation_errors('<div class = "error">', '</div>'); ?>
                <form id = 'form-new-account' action = "<?php echo base_url('C_NewAccount/authentification'); ?>" method = 'post' enctype = 'multipart/form-data'>
                    <div class = 'info-identity'>
                        <h1>Identitas</h1>
                        <div class = 'name'>
                            <p>Nama Lengkap</p>
                            <input type="text" name="fullname" value = '<?php echo set_value('fullname'); ?>'><br>
                        </div>
                        <div class = 'email'>
                            <p>Email</p>
                            <input type="text" name="email" value = '<?php echo set_value('email'); ?>'><br>
                        </div>
                        <div class = 'password'>
                            <p>Password</p>
                            <input type="password" name="password" value = '<?php echo set_value('password'); ?>'><br>
                        </div>
                    </div>
                    <div class = 'info-origin'>
                        <h1>Asal Tempat Tinggal</h1>
                        <div class = 'address'>
                            <p>Alamat Tinggal</p>
                            <input type="text" name="address" value = '<?php echo set_value('address'); ?>'><br>
                        </div>
                        <div class = 'province'>
                            <p>Provinsi Asal</p>
                            <input type="text" name="province" value = '<?php echo set_value('province'); ?>'><br>
                        </div>
                        <div class = 'city'>
                            <p>Kota Asal</p>
                            <input type="text" name="city" value = '<?php echo set_value('city'); ?>'><br>
                        </div>
                        <div class = 'date'>
                            <p>Tanggal Lahir</p>
                            <input id = 'datepicker' type="text" name="birthday" value = '<?php echo set_value('birthday'); ?>'><br>
                        </div>
                    </div>
                    <div class = 'info-personal'>
                        <h1>Agama</h1>
                        <div class="radio-toolbar">
                            <div id = 'islam'>
                                <input type="radio" id="radioIslam" name="radioFruit" value="Islam" >
                                <label for="radioIslam">Islam</label>
                            </div>
                            <div id = 'protestan'>
                                <input type="radio" id="radioProtestan" name="radioFruit" value="Protestan">
                                <label for="radioProtestan">Kristen Protestan</label>
                            </div>
                            <div id = 'katolik'>
                                <input type="radio" id="radioKatolik" name="radioFruit" value="Katolik">
                                <label for="radioKatolik">Katolik</label> 
                            </div>
                            <div id = 'hindu'>
                                <input type="radio" id="radioHindu" name="radioFruit" value="Hindu">
                                <label for="radioHindu">Hindu</label> 
                            </div>
                            <div id = 'buddha'>
                                <input type="radio" id="radioBuddha" name="radioFruit" value="Buddha">
                                <label for="radioBuddha">Buddha</label> 
                            </div>
                            <div id = 'kong'>
                                <input type="radio" id="radioKong" name="radioFruit" value="Kong Hu Cu">
                                <label for="radioKong">Kong Hu Cu</label> 
                            </div>
                        </div>
                    </div>
                    <div class = 'info-documents hide'>
                        <div class = 'ijazah-container'>
                            <h1>Ijazah</h1>
                            <span>File bertipe .png dan maximum berukuran 2mb</span>
                            <!-- <input class = 'ijazah' type="file" name="ijazah" id="ijazah-file" accept=".png"> -->
                            <input class = 'ijazah' type="file" name="ijazah" id="ijazah-file">
                        </div>
                        <div class = 'skhun-container'>
                            <h1>SKHUN</h1>
                            <span>File bertipe .png dan maximum berukuran 2mb</span>
                            <!-- <input class = 'skhun' type="file" name="skhun" id="skhun-file" accept=".png"> -->
                            <input class = 'skhun' type="file" name="skhun" id="skhun-file">
                        </div>
                    </div>
                    <div class = 'info-choice hide'>
                        <div class = 'choice-item'>
                            <h1>Pilihan 1</h1>
                            <div>
                                <p>Fakultas</p>
                                <select id = 'pil-1' name="fakultas1">
                                    <option value="Teknik">Fakultas Teknik</option>
                                    <option value="Ekonomi">Fakultas Ekonomi</option>
                                    <option value="Pertanian">Fakultas Pertanian</option>
                                </select>
                            </div>
                            <div>
                                <p>Jurusan</p>
                                <select id = 'pil-jurusan-1' name="jurusan1">
                                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                </select>
                            </div>
                        </div>
                        <div class = 'choice-item-2'>
                            <h1>Pilihan 2</h1>
                            <div>
                                <p>Fakultas</p>
                                <select id = 'pil-2' name="fakultas2">
                                    <option value="Teknik">Fakultas Teknik</option>
                                    <option value="Ekonomi">Fakultas Ekonomi</option>
                                    <option value="Pertanian">Fakultas Pertanian</option>
                                </select>
                            </div>
                            <div>
                                <p>Jurusan</p>
                                <select id = 'pil-jurusan-2' name="jurusan2">
                                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class = 'buttons'>
                    <button id = 'back' class = 'primary-button-login back hide'>Kembali</button>
                    <button id = 'next' class = 'primary-button-login next'>Selanjutnya</button>
                    <button id = 'submit' class = 'primary-button-login submit hide'>Kirim</button>
                </div>
            </div>
        </div>
    </body>
    <script>
        var i = 1;

        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });

        $(document).ready(function() {

            $('#pil-1').on('change', function(){
                $('#pil-jurusan-1').html('');
                if($('#pil-1').val() == 'Teknik') {
                    $('#pil-jurusan-1').append('<option value="S1 Teknik Mesin">S1 Teknik Mesin</option>')
                    $('#pil-jurusan-1').append('<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>')
                } else if ($('#pil-1').val() == 'Ekonomi') {
                    $('#pil-jurusan-1').append('<option value="S1 Manajemen">S1 Manajemen</option>')
                    $('#pil-jurusan-1').append('<option value="S1 Akuntansi">S1 Akuntansi</option>')
                } else {
                    $('#pil-jurusan-1').append('<option value="S1 Agribisnis">S1 Agribisnis</option>')
                    $('#pil-jurusan-1').append('<option value="S1 Agroteknologi">S1 Agroteknologi</option>')
                }
            });

            $('#pil-2').on('change', function(){
                $('#pil-jurusan-2').html('');
                if($('#pil-2').val() == 'Teknik') {
                    $('#pil-jurusan-2').append('<option value="S1 Teknik Mesin">S1 Teknik Mesin</option>')
                    $('#pil-jurusan-2').append('<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>')
                } else if ($('#pil-2').val() == 'Ekonomi') {
                    $('#pil-jurusan-2').append('<option value="S1 Manajemen">S1 Manajemen</option>')
                    $('#pil-jurusan-2').append('<option value="S1 Akuntansi">S1 Akuntansi</option>')
                } else {
                    $('#pil-jurusan-2').append('<option value="S1 Agribisnis">S1 Agribisnis</option>')
                    $('#pil-jurusan-2').append('<option value="S1 Agroteknologi">S1 Agroteknologi</option>')
                }
            });

            $('#submit').click(function() {
                $('#form-new-account').submit();
            })

            $('#islam').click(function() {
                $("#radioIslam").prop("checked", true);

                $('#islam').addClass('selected');
                $('#protestan').removeClass('selected');
                $('#katolik').removeClass('selected');
                $('#hindu').removeClass('selected');
                $('#buddha').removeClass('selected');
                $('#kong').removeClass('selected');
            })

            $('#protestan').click(function() {
                $("#radioProtestan").prop("checked", true);

                $('#islam').removeClass('selected');
                $('#protestan').addClass('selected');
                $('#katolik').removeClass('selected');
                $('#hindu').removeClass('selected');
                $('#buddha').removeClass('selected');
                $('#kong').removeClass('selected');
            })

            $('#katolik').click(function() {
                $("#radioKatolik").prop("checked", true);

                $('#islam').removeClass('selected');
                $('#protestan').removeClass('selected');
                $('#katolik').addClass('selected');
                $('#hindu').removeClass('selected');
                $('#buddha').removeClass('selected');
                $('#kong').removeClass('selected');
            })

            $('#hindu').click(function() {
                $("#radioHindu").prop("checked", true);

                $('#islam').removeClass('selected');
                $('#protestan').removeClass('selected');
                $('#katolik').removeClass('selected');
                $('#hindu').addClass('selected');
                $('#buddha').removeClass('selected');
                $('#kong').removeClass('selected');
            })

            $('#buddha').click(function() {
                $("#radioBuddha").prop("checked", true);

                $('#islam').removeClass('selected');
                $('#protestan').removeClass('selected');
                $('#katolik').removeClass('selected');
                $('#hindu').removeClass('selected');
                $('#buddha').addClass('selected');
                $('#kong').removeClass('selected');
            })

            $('#kong').click(function() {
                $("#radioKong").prop("checked", true);

                $('#islam').removeClass('selected');
                $('#protestan').removeClass('selected');
                $('#katolik').removeClass('selected');
                $('#hindu').removeClass('selected');
                $('#buddha').removeClass('selected');
                $('#kong').addClass('selected');
            })

            $('#next').click(function() {
                if (i < 3) {
                    i++
                    testing(i)
                }
            });

            $('#back').click(function() {
                if (i > 1) {
                    i--
                    testing(i)
                }
            });

            function testing(i) {
                if (i === 1) {
                    $('.info-identity').removeClass('hide');
                    $('.info-origin').removeClass('hide');
                    $('.info-personal').removeClass('hide');
                    $('.info-choice').addClass('hide');
                    $('.info-documents').addClass('hide');

                    $('#back').addClass('hide');
                } else if (i === 2) {
                    $('.info-identity').addClass('hide');
                    $('.info-origin').addClass('hide');
                    $('.info-personal').addClass('hide');
                    $('.info-choice').addClass('hide');
                    $('.info-documents').removeClass('hide');

                    $('#back').removeClass('hide');
                    $('#submit').addClass('hide');
                    $('#next').removeClass('hide');
                } else if (i === 3) {
                    $('.info-identity').addClass('hide');
                    $('.info-origin').addClass('hide');
                    $('.info-personal').addClass('hide');
                    $('.info-choice').removeClass('hide');
                    $('.info-documents').addClass('hide');

                    $('#next').addClass('hide');
                    $('#submit').removeClass('hide');
                }
            }

            

        });
        
    
    </script>

</html>

                        <!-- <div class = 'choice-item'>
                            <h1>Pilihan 1</h1>
                            <div>
                                <p>Fakultas</p>
                                <select name="fakultas1">
                                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                                    <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                                    <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                </select>
                            </div>
                            <div>
                                <p>Jurusan</p>
                                <select name="jurusan1">
                                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                    <option value="S1 Manajemen">S1 Manajemen</option>
                                    <option value="S1 Akuntansi">S1 Akuntansi</option>
                                    <option value="S1 Agribisnis">S1 Agribisnis</option>
                                    <option value="S1 Agroteknologi">S1 Agroteknologi</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class = 'choice-item-2'>
                            <h1>Pilihan 2</h1>
                            <div>
                                <p>Fakultas</p>
                                <select name="fakultas2">
                                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                                    <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                                    <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                </select>
                            </div>
                            <div>
                                <p>Jurusan</p>
                                <select name="jurusan2">
                                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                    <option value="S1 Manajemen">S1 Manajemen</option>
                                    <option value="S1 Akuntansi">S1 Akuntansi</option>
                                    <option value="S1 Agribisnis">S1 Agribisnis</option>
                                    <option value="S1 Agroteknologi">S1 Agroteknologi</option>
                                </select>
                            </div>
                        </div> -->

