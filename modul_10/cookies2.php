<?php
    if(isset($_COOKIE['username'])) {
        echo "<h1> Cookie 'username' ada. </h1><br> Username : " .$_COOKIE['username'];
    } else {
        echo "<h1> Cookie 'username' TIDAK ADA </h1>";
    }

    if (isset($_COOKIE['full_name'])) {
        echo "<h1> Cookie 'full_name' ada. </h1><br> Nama Lengkap : " .$_COOKIE['full_name'];
    } else{
        echo "<h1> Cookie 'full_name' TIDAK ADA </h1>";
    }
    echo "<h2> <a href='cookies3.php'> KLIK disini </a> untuk menghapus cookies. </h2>";
?>