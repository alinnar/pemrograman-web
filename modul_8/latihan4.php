<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Seleksi</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_sELF'];?>" method="post">
    Pekerjaan
    <select name="job">
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="ABRI">ABRI</option>
        <option value="PNS">PNS</option>
        <option value="Swasta">Swasta</option>
</select> <br />
<?php
if (isset($_POST['job'])) {
    echo $_POST['job'];
}
?>

</form>
</body>
</html>