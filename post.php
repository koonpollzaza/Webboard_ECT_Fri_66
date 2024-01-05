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
<div align="center">
    <?php
    $id = $_GET['id'];

    echo "ต้องการดูกระทู้หมายเลข $id" . "<BR>";
    ?>
    <table align="center" border="2px">
        <tr>
            <td style="text-align: left; background-color : pink ">แสดงความคิดเห็น</td>
            <br>
        </tr>
        <tr>
            <td><textarea name="message" id="" cols="70" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style="text-align : center;"><input type="submit"  value="ส่งข้อความ" ></td>
</table>
<br>
<a href="index.html">กลับไปหน้าหลัก</a>
</body>
</html>