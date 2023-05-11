<!--Membuat page facebook.com-->

<!--Code HTML Bootstrap 3-->
<!DOCTYPE html>
<html lang="en" id="facebook" class="tinyViewport tinyWidth">
<head>
  <title>Studi Kasus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<!--Membuat class jumbotron untuk keseluruhan web-->
<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row-justify-content-server">
        <!--Membuat bagian kiri web menggunakan sistem grid pada bootstrap-->
        <div class="col-sm-5">
          <h1 align="left" style="font-weight: bold; color: rgb(31, 135, 255)">facebook</h1>    
          <p>Facebook helps your connect and share
          with the people in your life</p>
        </div>
      </div>

  <!--Membuat bagian kanan web menggunakan sistem grid bootstrap-->
  <!--Membuat form dan button dari code bootstrap-->
  <div class="col-sm-4">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
      <label for="email"></label>
        <div class="form-group">
          <input class="email" type="email" class="form-control" id="email" placeholder="Email address or phone number" name="email">
        </div>
        <div class="form-group">
          <input class="pass" type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
        </div>
        <?php $status = ''; ?>
        <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          <button type="submit" value="Log In" style="font-weight: bold;" class="btn">Log in</button>
            <div class="form-group"></div>
            <div class="text-center"><a href="">Forgotten password?</a></div>
            <div class="form-group">
          <hr color="grey"></div>
          <div class="form-group">
        <button type="button" style="font-weight: bold;" class="btn2">Create new account</button></div>
   
   <!-- PHP -->
    <?php
        if (isset($_POST['email']) || isset($_POST['pwd'])) {
            if ($_POST['email'] === "revalin@gmail.com" && $_POST['pwd'] === "alin123") {
            echo '<p align=center> Selamat Datang, ' .$_POST['email'] . "!";
            } else {
            // Tampilan login gagal
            echo "<p align=center> LOGIN GAGAL!!!" ;
            }
        }
        ?>
    </form>

 <br>
    <div align="center"><a style="color: black;" href=""><b>Create a Page</b></a> for a celebrity, brand or business.</div>
    </div> 
  </div>
  
</body>
</html>