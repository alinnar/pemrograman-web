<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prefill Data Radio Button</title>
</head>
<body>
    
    <form action="<?php $_SERVER ['PHP_SELF'];?>" method="post"> Jenis Kelamin
        <input type="radio" name="sex" value="Pria" checked 
        <?php 
        if ($_POST['sex'] == 'Pria') {
            echo 'checked="checked"';
        }
        ?>
        /> Pria
        
        <input type="radio" name="sex" value="Wanita" /> Wanita <br />
        <?php
        if ($_POST['sex'] == 'Wanita') {
            echo 'checked="checked"';
        }
        ?>

        <input type="submit" value="OK" />
    </form>

    <?php
        if (isset($_POST['sex'])) {
            echo $_POST['sex'];
        }
    ?>
    
</body>
</html>