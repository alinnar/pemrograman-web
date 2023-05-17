<?php
    session_start();
    if(isset($_SESSION['login'])){
        echo "<h1>Selamat Datang, ".$_SESSION['login'] ."</h1>";
        echo "<h2> Anda berhasil login! <br> Ini adalah beranda kamu </br>. </h2>";
        echo "<h2><a href='session3.php'>Klik disini </a> untuk logout</h2>";
    }
    else{
        //Session tidak muncul karena belum login atau belum berhasil login
        die ("Anda belum login! Login terlebih dahulu <a href='session.php'> disini </a>");
    }
?>