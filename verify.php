<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Tanapon</h1>
    <hr>
    <center>เข้าสู่ระบบด้วย</center>
    <?php
    $l = $_POST['login'];
    $p = $_POST['pwd'];
    echo "Login = $l " . "<br>";
    echo "Password = $p ";
    ?>
</body>
</html>