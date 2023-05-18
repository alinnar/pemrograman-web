<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //memeriksa login
            if($user == "Joshua" && $pass == "1717") {
                //Membuat session
                $_SESSION['login'] = $user;
                //menuju ke halaman pemeriksaan session
                echo "<h1> Kamu Berhasil LOGIN! </h1>";
                echo "<h2><a href='session2.php'> Klik disini</a> untuk menuju ke halaman pemeriksaan session</h2>";
            } else { // jika gagal log in
             echo "<br><p align=center> Login Gagal";
            }
        }
        ?>
        <html>
            <head>
                <title>Login disini</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login disini</h2>
                    Username : <input type="text" name="user"><br>
                    Password : <input type="text" name="pass"><br>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
            </html>