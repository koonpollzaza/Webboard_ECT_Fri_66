<?php
session_start();
if(isset($_SESSION['id']))
{
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Tanapon</h1>
    <div style = "text-align: center";>
<?php
    $l = $_POST['login'];
    $p = $_POST['pwd'];
    if($l == "admin" && $p == "ad1234")
    {
        $_SESSION['username'] = "admin";
        $_SESSION['role'] = "a";
        $_SESSION['id'] = session_id();
        echo "ยินดีต้อนรับ คุณ ADMIN";
    }
    elseif($l == "member" && $p == "mem1234")
    {
        $_SESSION['username'] = "member";
        $_SESSION['role'] = "m";
        $_SESSION['id'] = session_id();
        echo "ยินดีต้อนรับ คุณ MEMBER";
    }
    else
    {
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    }
    ?>
    </div>
    <center><a href="index.php">กลับไปยังหน้าหลัก</a></center>
</body>
</html>