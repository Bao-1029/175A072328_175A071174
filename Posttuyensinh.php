<?php require ('msql_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuyển sinh</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
</head>
<body>
<header>
        <?php include'header.php'; ?>
    </header>
    <!-- menu navbar -->
    <section class="main-menu">
         <?php include'menu-navbar.php'; ?>
    </section>
    <section style="background-color: #EFEFEF;">
        <div class="container">
            <div class="row main">
                <div class="col-md-12">
                    <h2>Tuyển sinh</h2>
                    <a href=""><img src="./img/lichthi.jpg" alt="#"></a>
                    <div class="row">
                    <?php 
                            $sql = "SELECT * FROM baiviet BV, danhmucbaiviet DMBV WHERE BV.Madanhmuc = DMBV.Madanhmuc AND DMBV.Tendanhmuc = N'tuyensinh' ";
                            $tuyensinh=mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($tuyensinh)) {
                    ?>
                        
                        <div class="col-md-12" style="padding:30px 0px">
                            <h1><?= $row['Tieude']; ?></h1>
                            <h3><?= $row['Motabaiviet']; ?></h3>
                            <span><?= $row['Noidung']; ?></span>
                            <br>
                            <p style="float:right">Nguồn : <?= $row['Tacgia']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <!-- footer -->

    <footer>
           <?php include'footer.php'; ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js.map"></script>
</body>
</html>
