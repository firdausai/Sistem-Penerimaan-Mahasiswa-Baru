<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/reset_stylesheet.css')?>">
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/mahasiswa_stylesheet.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>
    <body>
        <div class = 'mahasiswa-container'>
            <div id="ex1" class="modal"></div>
            <div class = 'header'>
                <div class = 'header-wrapper'>
                    <h1>SIMPENMABA &nbsp;|&nbsp; Calon Mahasiswa</h1>
                    <p><a href = '<?php echo base_url('C_Mahasiswa/logout') ?>'>Logout</a></p>
                </div>
            </div>
            <div class = 'information'>
                <?php echo validation_errors('<div class = "error">', '</div>'); ?>
                <div class = 'payment'>
                    <div class = 'title-payment'>
                        <h1>Status Pembayaran<br><span>File bertipe .png dan maximum berukuran 2mb</span></h1>
                        <?php if($status_pembayaran == 0 || $status_pembayaran == 1):?>
                            <span class = 'dot danger'></span>
                        <?php elseif($status_pembayaran == 2): ?>
                            <span class = 'dot warning'></span>
                        <?php elseif($status_pembayaran == 3): ?>
                            <span class = 'dot safe'></span>
                        <?php endif; ?>
                    </div>
                    <?php if($status_pembayaran == 0):?>
                        <p>Anda belum membayar biaya pendaftaran</p>
                    <?php elseif($status_pembayaran == 1): ?>
                        <p>Bukti pembayaran anda sedang kami proses</p>
                    <?php elseif($status_pembayaran == 2): ?>
                        <p>Harap kirim ulang bukti pembayaran!</p>
                    <?php elseif($status_pembayaran == 3): ?>
                        <p>Bukti pembayaran anda sudah kami terima</p>
                    <?php endif; ?>
                    <form method = "post" action = "<?php echo base_url('C_Mahasiswa/addData'); ?>" enctype = 'multipart/form-data'>
                        <input class = 'bukti-pembayaran' type="file" name="bukti-pembayaran" id="pembayaran-file">
                        <?php if($status_pembayaran != 3):?>
                            <button name = 'BP' value = '<?php echo $id?>' id = 'submit' class = 'primary-button-login submit'>Upload</button>
                        <?php else: ?>
                            <button name = 'BP' value = '<?php echo $id?>' id = 'submit' class = 'primary-button-login submit' disabled>Upload</button>
                        <?php endif; ?>
                    </form>
                    <div>
                        <?php if($bukti_pembayaran != null):?>
                            <a href="#ex1" rel="modal:open"><button id = 'view' class = 'primary-button-login view' onclick = "doFunction('<?php echo $bukti_pembayaran; ?>');">Lihat Bukti</button></a>
                        <?php else: ?>
                            <button id = 'view' class = 'primary-button-login view' disabled>Lihat Bukti</button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class = 'status'>
                    <h1>Status Kelulusan</h1>
                    <?php if ($status_pilihan == 0):?>
                        <p>Cek halaman ini secara berkala untuk melihat status kelulusan</p>
                    <?php elseif ($status_pilihan == 1):?>
                        <p>Selamat! Anda diterima di pilihan 1</p>
                    <?php elseif ($status_pilihan == 2):?>
                        <p>Selamat! Anda diterima di pilihan 2</p>
                    <?php elseif ($status_pilihan == 3):?>
                        <p>Maaf, anda tidak masuk</p>
                    <?php endif;?>
                </div>
                <div class = 'biodata'>
                    <h1>Biodata</h1>
                    <div class = 'name'>
                        <p>Nama Lengkap</p>
                        <!-- <p>Firdaus Ardhana Indradhirmaya</p> -->
                        <p><?php echo $name;?></p>
                    </div>
                    <div class = 'email'>
                        <p>Email</p>
                        <!-- <p>daus0827@gmail.com</p> -->
                        <p><?php echo $email;?></p>
                    </div>
                    <div class = 'address'>
                        <p>Alamat Tinggal</p>
                        <!-- <p>GBA 1 Blok D</p> -->
                        <p><?php echo $address;?></p>
                    </div>
                    <div class = 'province'>
                        <p>Provinsi</p>
                        <!-- <p>Jawa Barat</p> -->
                        <p><?php echo $province;?></p>
                    </div>
                    <div class = 'city'>
                        <p>Kota</p>
                        <!-- <p>Bandung</p> -->
                        <p><?php echo $city;?></p>
                    </div>
                    <div class = 'date'>
                        <p>Tanggal Lahir</p>
                        <!-- <p>3 november 1998</p> -->
                        <p><?php echo $birthday;?></p>
                    </div>
                    <div class = 'religion'>
                        <p>Agama</p>
                        <!-- <p>Islam</p> -->
                        <p><?php echo $religion;?></p>
                    </div>
                    <div class = 'document'>
                        <div class = 'ijazah'>
                            <h1>Ijazah</h1>
                            <!-- <p>Foto Ijazah</p> -->
                            <img src = "<?php echo base_url('assets/uploads/'.$ijazah.'.png'); ?>"/>
                        </div>
                        <div class = 'skhun'>
                            <h1>SKHUN</h1>
                            <!-- <p>Foto SKHUN</p> -->
                            <img src = "<?php echo base_url('assets/uploads/'.$skhun.'.png'); ?>"/>
                        </div>
                    </div>
                    <div class = 'choices'>
                        <div class = 'choice-1'>
                            <h1>Pilihan 1</h1>
                            <p>Fakultas</p>
                            <!-- <p>Fakultas pilihan 1</p> -->
                            <p><?php echo $fakultas1;?></p>
                            <p class = 'highlight'>Jurusan</p>
                            <!-- <p class = 'highlight'>Jurusan pilihan 1</p> -->
                            <p class = 'highlight'><?php echo $jurusan1;?></p>
                        </div>
                        <div class = 'choice-2'>
                            <h1>Pilihan 2</h1>
                            <p class = 'highlight'>Fakultas</p>
                            <!-- <p class = 'highlight'>Fakultas pilihan 2</p> -->
                            <p class = 'highlight'><?php echo $fakultas2;?></p>
                            <p>Jurusan</p>
                            <!-- <p>Jurusan pilihan 2</p> -->
                            <p><?php echo $jurusan2;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>

        function doFunction(name) {
            $( "#image-modal" ).remove();
            var tag1 = '<img id = image-modal src = http://localhost/Sistem-Penerimaan-Mahasiswa-Baru/assets/uploads/';
            var tag2 = '.png>';
            var comb = tag1.concat(name);
            var comb = comb.concat(tag2);
            $( "#ex1" ).append(comb);
        };

        $( document ).ready(function() {
        });
    </script>
</html>