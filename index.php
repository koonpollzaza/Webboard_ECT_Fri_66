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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>HomePage</title>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="mt-3"> Web Tanapon</h1>
    <nav class="navbar navbar-expand-lg" style="background-color: #FFFACD;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-house-door-fill"></i> Home</a>
        <ul class="navbar-nav">
            <?php if(!isset($_SESSION['id'])) { ?>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="login.php"><i class="bi bi-pencil-square"></i>เข้าสู่ระบบ</a>
            </li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item dropdown">
          <a class="btn btn-outline-secondary  btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-lines-fill"></i>
          <?php
          echo $_SESSION['username']
          ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
        </li>
        <?php } ?>
      </ul>
  </div>
</nav>
<div class="mt-3 d-flex justify-content-between">
    <div>
    <label>หมวดหมู่</label>
    <span class="dropdown">
  <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    -- ทั้งหมด --
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
    <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
    <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
  </ul>
</span>
    </div>
    <?php
if(isset($_SESSION['id'])) {
?>
<div><a href="newpost.php" class="btn btn-success btn-sm">
    <i class='bi bi-plus'></i>สร้างกระทู้ใหม่</a></div>
<?php } ?>

</div>
    


    <table class="table table-striped mt-4">
    <?php
    for($i = 1; $i <= 10; $i++)
    {
        echo "<tr><td class ='d-flex justify-content-between'><a href=post.php?id=$i style = text-decoration:none>กระทู้ที่ $i </a>";
        if(isset($_SESSION['id']) && $_SESSION['role']=='a')
            {
                echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$i class='btn btn-danger btn-sm me-5'><i class='bi bi-trash3'></i></a>";
            }

        echo "</td></tr>";
    }
    ?>
    </table>

</div>
</body>
</html>