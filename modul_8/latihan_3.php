<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tipe</title>
</head>
<body>

    <?php 
    $bil = 3;
    var_dump(is_int($bil));
    // Output: bool(true)
    ?>

<br>
<br>

    <?php 
    $str = '123abc';

    // Casting nilai variabel $str ke integer
    $bil = (int) $str; // $bil = 123

    echo gettype($bil);
    // Output: integer
    ?>

</body>
</html>