<?php

require "koneksi.php";

$sql = "select * from profile_member";

// $rows = $koneksi->execute_query($sql, [])->fetch_all((MYSQLI_ASSOC));

var_dump($rows);


// foreach ($rows as $row)
// {
//     echo "{$row['id']}: {$row['nama_barang']}\n";
// }  

// kode php lama
$rows = mysqli_query($koneksi, $sql);

//     $barang = [
//         [
//             "nama" => "Laptop",
//             "stok" => "6",
//             "status" => "Rusak"
//         ],
//         [
//             "nama" => "PC",
//             "stok" => "38",
//             "status" => "Baik"
//         ],
//         [
//             "nama" => "Printer",
//             "stok" => "1",
//             "status" => "Rusak"
//         ],
//     ];
// var_dump($barang);
// echo "<br>";
// echo "<br>";




?>













<!DOCTYPE html>
<html>
    <head>
       <style> 
        body {
            font-style: italic;
        }

         tr, td, th {
            border:  black solid 2px;
            border-collapse: collapse;
        }
        th {
            
        }

        table {
            width: 70%;
            border-collapse: collapse;
            text-align: center;
            
        }
       </style>
    </head>
    <body>
        <a class="tambah" href="tambah.php"> tambahkan data </a>
        <table>
            <thead>
                <tr>
                    <th> id member </th>
                    <th> Nama </th>
                    <th> umur akun </th>
                    <th> tanggal masuk server </th>
                    <th> Roles </th>
                    <th> Tag Member </th>
                    <th> status </th>
                    <th> Atur </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1; 
                // foreach ($barang as $item) {
                while ($item = mysqli_fetch_assoc($rows))
                {
            ?>

            <tr>
                <td> <?= $no; ?></td>
                <td> <?= $item["Nama"] ?></td>
                <td> <?= $item["Umur_akun"] ?></td>
                <td> <?= $item["Tanggal_masuk_server"] ?></td>
                <td> <?= $item["Roles"] ?></td>
                <td> <?= $item["Tag_member"] ?></td>
                <td> <?= $item["status"] ?></td>
                <td> 
                    <a href="Edit_barang.php?id=<?=$item['id_member']?>">  edit </a>
                    <a href="hapus_barang.php?id=<?=$item['id_member']?>" onclick="return confirm('Hapus data ini?')"> hapus </a>
                </td>
                <!-- <td> <a href="#"> edit </a> <a href="#">Hapus</a> </td> -->
            </tr>

            <?php

            $no += 1;
                }
            ?>

            </tbody>
        </table>
    </body>
</html>