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
        </div>
      </div>

  <!--Membuat form dan button dari code bootstrap-->
  <div class="col-sm-4">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
    <br>
      <label for="email">  Buat Akun Baru </label> 
        <!--Membuat form nama depan, nama belakang, email dan password-->
        <div class="form-group"> 
          <input class="email" type="text" class="form-control" placeholder="Nama Depan" id="text" name="text">
        </div>
        <div class="form-group"> 
          <input class="email" type="text" class="form-control" placeholder="Nama Belakang" id="text" name="text">
        </div>
        <div class="form-group"> 
          <input class="email" type="email" class="form-control" id="email" placeholder="Email atau Nomor seluler" name="email">
        </div>
        <div class="form-group"> 
          <input class="pass" type="password" class="form-control" placeholder="Password" id="pwd" name="pwd">
        </div>


        <?php $status = ''; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    
            <div class="text-center"><a href="studikasus.php">Sudah memiliki akun?</a></div>
            <div class="form-group">
          <hr color="grey"></div>
          <div class="form-group">
        <button type="button" style="font-weight: bold;" class="btn2"><a href="studikasus3.php">Daftar</a></button></div>
   
    </form>
    </div> 
  </div>
</body>
</html>