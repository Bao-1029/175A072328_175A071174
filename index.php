<?php require ('msql_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My University</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
    <link rel="stylesheet" href="CSS/all.css">

</head>

<body>
<header>
       <?php include 'header.php'; ?>
    </header>
    <section class="main-menu">
        <?php include 'menu-navbar.php'; ?>
        <!-- slide -->
    </section>
<?php
    // Switch redirect page
        if(isset($_GET['danhmuc'])){
            $danhmuc=$_GET['danhmuc'];
        } else {
            $danhmuc='';
        }
        switch($danhmuc) {
            case "DMTT":
                if(isset($_GET['baiviet'])){
                    $baiviet=$_GET['baiviet'];
                    include('detail-post.php');
                } else {
                    $baiviet='';
                    include('list-post.php');
                }
            break;
            default:
                include('home.php');
            break;
          }
    ?>
    <footer>
    <?php include 'footer.php'; ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js.map"></script>
</body>

</html>