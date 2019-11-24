<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/reset_stylesheet.css')?>">
        <link rel="stylesheet" href = "<?php echo base_url('assets/css/admin_stylesheet.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    </head>
    <body>
        <div class = 'admin-container'>
            <div class = 'header'>
                <div class = 'header-wrapper'>
                    <h1>SIMPENMABA | Admin</h1>
                    <p>Logout</p>
                </div>
            </div>
            <div class = 'data-container'>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>SKHUN</th>
                            <th>Ijazah</th>
                            <th>Fakultas 1</th>
                            <th>Jurusan 1</th>
                            <th>Terima</th>
                            <th>Fakultas 2</th>
                            <th>Jurusan 2</th>
                            <th>Terima</th>
                            <th>Tolak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td class = 'center'><button class="btn neutral"><i class="fa fa-file"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td>Informatika</td>
                            <td>S1 Informatika</td>
                            <td class = 'center'><button class="btn accept"><i class="fa fa-check"></i></button></td>
                            <td class = 'center reject-td'><button class="btn reject"><i class="fa fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </body>

    <script>
        $( document ).ready(function() {
            $('#table_id').DataTable( {
                "paging":   true,
                "ordering": false,
                "info":     false
            });
        });
    </script>
</html>