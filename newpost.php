<?php require ('msql_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tin tức</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
</head>
<body>
<header>
       <?php include'header.php'; ?>
</header>
<section class="main-menu">
        <?php include'menu-navbar.php'; ?>
</section>
<div class="container">
<div class="row">
   <div class="col-lg-5"> 
       <img src="./img/cnsh3.jpg" alt="" style= "width: 100%;
        height: 45%;padding-top:20px">
        <br>
       <img src="./img/thong-bao.png" alt="" style= "width: 100%;
        height: 45%;padding-top:20px">
   </div>
   <div class="col-lg-7">
   <?php 
                            $sql = "SELECT * FROM baiviet BV, danhmucbaiviet DMBV WHERE BV.Madanhmuc = DMBV.Madanhmuc AND DMBV.Madanhmuc = N'DMTT'";
                            $thongbao=mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($thongbao)) {
                    ?>
                        
                        <div style="padding:30px 0px">
                            <h4><?= $row['Tieude']; ?></h4>
                            <p><?= $row['Motabaiviet']; ?></p>
                            <br>
                            <a href="index.php?baiviet=<?= $row['Idbaiviet']; ?>" style="float:right; text-decoration: none;"> Xem chi tiết</a>
                            <br>
                        </div>
                        <?php } ?>
   </div>
</div>
</div>
<footer>
    <?php include'footer.php'; ?>
</footer>
</body>
</html>