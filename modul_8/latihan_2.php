<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Variabel</title>
</head>
<body>
    <?php
    // Deklarasi dan inisialisasi
    $bil = 3;

    echo $bil;
    ?>

<br>
<br>

    <?php
    // Deklarasi dan inisialisasi
    $bil = 3;

    // Dumping informasi mengenau variabel
    var_dump($bil);
    print_r($bil);
?>

<br>
<br>

    <?php 
    $bil = 3;
    var_dump($bil);
    // Output: string(3)

    $var = "";
    var_dump($var);
    // Output:string(0) ""

    $var = null;
    var_dump($var);
    // Output: NULL
    ?>

</body>
</html>