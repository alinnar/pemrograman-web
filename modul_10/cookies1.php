<?php
    $value1 = 'Joshua';
    $value2 = 'Joshua Hong';
    setcookie("username", $value1);
    setcookie("full_name", $value2, time()+60); // login exp 1 menit
    echo "<h1> Ini halaman untuk set cookie </h2>";
    echo "<h2> <a href='cookies2.php'>KLIK disini </a> untuk mengecek cookies.";
?>