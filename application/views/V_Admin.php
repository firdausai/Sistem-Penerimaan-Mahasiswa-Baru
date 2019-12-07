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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>
    <body>
        <div class = 'admin-container'>
            <div id="ex1" class="modal"></div>
            <div class = 'header'>
                <div class = 'header-wrapper'>
                    <h1>SIMPENMABA &nbsp;|&nbsp; Admin</h1>
                    <p><a href = '<?php echo base_url('C_Admin/logout') ?>'>Logout</a></p>
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
                        <?php foreach($query->result_array() as $row): ?>
                            <?php if ($row['status_pilihan'] == '0'): ?>
                                <tr class = 'center'>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['skhun']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['ijazah']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td><?php echo $row['fakultas1']; ?></td>
                                    <td><?php echo $row['jurusan1']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept1/";?>' method = 'post'><button name = 'P1' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td><?php echo $row['fakultas2']; ?></td>
                                    <td><?php echo $row['jurusan2']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept2/";?>' method = 'post'><button name = 'P2' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td class = 'center reject-td'><form action = '<?php echo base_url()."C_Admin/denied/";?>' method = 'post'><button name = 'P3' value = '<?php echo $row['id']?>' class="btn reject"><i class="fa fa-times"></i></button></form></td>
                                </tr>
                            <?php elseif ($row['status_pilihan'] == '1'): ?>
                                <tr class = 'picked center'>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['skhun']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['ijazah']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td class = 'selected'><?php echo $row['fakultas1']; ?></td>
                                    <td class = 'selected'><?php echo $row['jurusan1']; ?></td>
                                    <td class = 'center selected'><form action = '<?php echo base_url()."C_Admin/accept1/";?>' method = 'post'><button name = 'P1' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td><?php echo $row['fakultas2']; ?></td>
                                    <td><?php echo $row['jurusan2']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept2/";?>' method = 'post'><button name = 'P2' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td class = 'center reject-td'><form action = '<?php echo base_url()."C_Admin/denied/";?>' method = 'post'><button name = 'P3' value = '<?php echo $row['id']?>' class="btn reject"><i class="fa fa-times"></i></button></form></td>
                                </tr>
                            <?php elseif ($row['status_pilihan'] == '2'): ?>
                                <tr class = 'picked center'>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['skhun']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['ijazah']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td><?php echo $row['fakultas1']; ?></td>
                                    <td><?php echo $row['jurusan1']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept1/";?>' method = 'post'><button name = 'P1' value = '<?php echo $row['id']?>' class="btn accept no-border"><i class="fa fa-check"></i></button></form></td>
                                    <td class = 'selected'><?php echo $row['fakultas2']; ?></td>
                                    <td class = 'selected'><?php echo $row['jurusan2']; ?></td>
                                    <td class = 'center selected'><form action = '<?php echo base_url()."C_Admin/accept2/";?>' method = 'post'><button name = 'P2' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td class = 'center reject-td'><form action = '<?php echo base_url()."C_Admin/denied/";?>' method = 'post'><button name = 'P3' value = '<?php echo $row['id']?>' class="btn reject"><i class="fa fa-times"></i></button></form></td>
                                </tr>
                            <?php elseif ($row['status_pilihan'] == '3'): ?>
                                <tr class = 'rejected center'>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['skhun']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td class = 'center'><a href="#ex1" rel="modal:open"><button class="btn neutral" onclick = "doFunction('<?php echo $row['ijazah']; ?>');"><i class="fa fa-file"></i></button></a></td>
                                    <td><?php echo $row['fakultas1']; ?></td>
                                    <td><?php echo $row['jurusan1']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept1/";?>' method = 'post'><button name = 'P1' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td><?php echo $row['fakultas2']; ?></td>
                                    <td><?php echo $row['jurusan2']; ?></td>
                                    <td class = 'center'><form action = '<?php echo base_url()."C_Admin/accept2/";?>' method = 'post'><button name = 'P2' value = '<?php echo $row['id']?>' class="btn accept"><i class="fa fa-check"></i></button></form></td>
                                    <td class = 'center reject-td'><form action = '<?php echo base_url()."C_Admin/denied/";?>' method = 'post'><button name = 'P3' value = '<?php echo $row['id']?>' class="btn reject"><i class="fa fa-times"></i></button></form></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

            $('#table_id').DataTable( {
                "paging":   true,
                "ordering": false,
                "info":     false
            });
        });
    </script>
</html>