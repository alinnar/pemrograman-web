<!DOCTYPE html>
<?php 
 
session_start();
 
if (!isset($_SESSION['login'])) {
    header("Location: studikasus.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
<h1 align="center" style="font-weight: bold; color: rgb(0, 0, 0)">Beranda</h1>    
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['login'] ."!". "</h1>"; ?>
            <div class="input-group">
            <a href="studikasus.php" class="btn">Logout</a>
            </div>
</body>
</html>