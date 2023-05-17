<?php
    //set jam expiration date 1 menit yang lalu
    setcookie("username", "", time() -60); //60 detik = 1 menit (hitungan perdetik)
    setcookie("full_name", "", time() -60);
    echo "<h1>Cookies berhasil dihapus </h1>";
    echo "<h2><a href='cookies2.php'>Klik disini</a> untuk pemeriksaan cookies</h2>";
?>