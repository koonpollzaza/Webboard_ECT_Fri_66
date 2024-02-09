<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>HomePage</title>
</head>
<body>
    <h1 style="text-align: center;"> Web Tanapon</h1>
    <hr>
    <form>
        หมวดหมู่ <select name "Category">
        <option value="all">--ทั้งหมด--</option>
        <option value="geraral">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <?php
    if (!isset($_SESSION['id']))
    {
        echo "<a href=login.php style='float:right;'>เข้าสู่ระบบ</a>";
    }
    else
    {
        echo "<div style='float:right;'>
                ผู้ใช้งานระบบ : $_SESSION[username]
                <a href=logout.php>ออกจากระบบ</a>
        </div>";
        echo "<br><a href=newpost.php>สร้างกระทู้ใหม่</a>";
    }
    ?>
</form>
<ul>
    <?php
    for($i = 1; $i <= 10; $i++)
    {
        echo "<li><a href=post.php?id=$i>กระทู้ที่ $i </a>";
        if(isset($_SESSION['id']) && $_SESSION['role']=='a')
            {
                echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
            }

        echo "</li>";
    }
    

    ?>
</ul>
</body>
</html>