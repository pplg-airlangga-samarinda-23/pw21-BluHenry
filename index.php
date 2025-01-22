<?php
//; menampilkan isi dari variabel superglobal $_post
    echo "</br>";

    // ambil nilai dari variabel $_post
    $username = $_POST["username"];
    $password = $_POST["password"];
    $username_bener = "BluHenry";
    $password_bener = "admin";
    

    $cek = "admin";

    // 2 == "2" > true, 2 tipe data yg berbeda tetapi nilai nya sama
    // 2 === "2" > false, 2 tipe data harus sama jika berbeda maka nilai nya false
    if ($password == $password_bener && $username == $username_bener) {
        echo "password dan username bener cuy silahkan masuk admin!!! <br>";
        header("Location:Barang.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form class="container" action="" method="post">
            <div class="name">
                <label for="username"> username </label> <br>
                <input type="text" name="username">
            </div>
            <div class="password">
                <label for="password"> password </label> <br>
                <input type="text" name="password">
            </div>
            <a href="Register.php"> Register akun </a>
            <div class="login">
                <button type="submit"> login </button>
            </div>
        </form>
    </body>
</html>