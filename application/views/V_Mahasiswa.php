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
    </head>
    <body>
        <div class = 'mahasiswa-container'>
            <div class = 'header'>
                <div class = 'header-wrapper'>
                    <h1>SIMPENMABA | Calon Mahasiswa</h1>
                    <p>Logout</p>
                </div>
            </div>
            <div class = 'information'>
                <div class = 'payment'>
                    <div class = 'title-payment'>
                        <h1>Status Pembayaran</h1>
                        <span class = 'dot'></span>
                    </div>
                    <p>Anda belum membayar biaya pendaftaran</p>
                    <form action = ''>
                        <input class = 'bukti-pembayaran' type="file" name="bukti-pembayaran" id="pembayaran-file">
                        <button id = 'submit' class = 'primary-button-login submit'>Upload</button>
                    </form>
                    <div>
                        <button id = 'view' class = 'primary-button-login view'>Lihat Bukti</button>
                    </div>
                </div>
                <div class = 'status'>
                    <h1>Status Kelulusan</h1>
                    <p>Status disini</p>
                </div>
                <div class = 'biodata'>
                    <h1>Biodata</h1>
                    <div class = 'name'>
                        <p>Nama Lengkap</p>
                        <p>Firdaus Ardhana Indradhirmaya</p>
                    </div>
                    <div class = 'email'>
                        <p>Email</p>
                        <p>daus0827@gmail.com</p>
                    </div>
                    <div class = 'address'>
                        <p>Alamat Tinggal</p>
                        <p>GBA 1 Blok D</p>
                    </div>
                    <div class = 'province'>
                        <p>Provinsi</p>
                        <p>Jawa Barat</p>
                    </div>
                    <div class = 'city'>
                        <p>Kota</p>
                        <p>Bandung</p>
                    </div>
                    <div class = 'date'>
                        <p>Tanggal Lahir</p>
                        <p>3 november 1998</p>
                    </div>
                    <div class = 'religion'>
                        <p>Agama</p>
                        <p>Islam</p>
                    </div>
                    <div class = 'document'>
                        <div class = 'ijazah'>
                            <h1>Ijazah</h1>
                            <p>Foto Ijazah</p>
                        </div>
                        <div class = 'skhun'>
                            <h1>SKHUN</h1>
                            <p>Foto SKHUN</p>
                        </div>
                    </div>
                    <div class = 'choices'>
                        <div class = 'choice-1'>
                            <h1>Pilihan 1</h1>
                            <p>Fakultas</p>
                            <p>Fakultas pilihan 1</p>
                            <p class = 'highlight'>Jurusan</p>
                            <p class = 'highlight'>Jurusan pilihan 1</p>
                        </div>
                        <div class = 'choice-2'>
                            <h1>Pilihan 2</h1>
                            <p class = 'highlight'>Fakultas</p>
                            <p class = 'highlight'>Fakultas pilihan 2</p>
                            <p>Jurusan</p>
                            <p>Jurusan pilihan 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        $( document ).ready(function() {
        });
    </script>
</html>