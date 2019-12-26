<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="CSS/register.css">

    <!-- <script src="./JS/register.js"></script> -->
</head>
<body>
<header>
        <?php include 'header.php'; ?>
</header>
<section class="main-menu">
         <?php include 'menu-navbar.php'; ?>
</section>
<div class="container" >
<div class="d-flex justify-content-center h-100">
            <form class="form-horizontal w-70" >
                <div class="register-card"style=" height: 450px;
			width: 400px;
			margin-top: 100px;
			margin-bottom: 50px;
			background: #7aa4db;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
">
                <h2 style="text-align: center;
    color: white;">Register</h2>
                <div class="form-group">
                    <label for="email" class="col-sm-6 control-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" name="email" id= "email" placeholder="Email" class="form-control" name= "email" value=""  />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-6 control-label">Password*</label>
                    <div class="col-sm-12">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" value=""  />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-6 control-label">Confirm Password*</label>
                    <div class="col-sm-12">
                        <input type="password"  name="password2" id="password2" placeholder="Password" class="form-control" value=""  />
                    </div>
                </div>
                <span id="error-register"></span>
                 <!-- /.form-group -->
                <button type="button" id="btn-register" class="btn btn-primary btn-block" style= "margin-top:20px; background-color:#4b0c9e">Register</button>
                </div>
            </form> <!-- /form -->
            </div>

        </div> <!-- ./container -->
<footer>
           <?php include 'footer.php'; ?>
</footer>
<script src="./JS/register.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>