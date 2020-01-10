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
    <link rel="stylesheet" href="CSS/login.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./JS/login.js"></script>
</head>
<body>
<header>
        <?php include 'header.php'; ?>
</header>
<section class="main-menu">
         <?php include 'menu-navbar.php'; ?>
</section>
<div class="container">
<main>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/dky.png" class="brand_logo" alt="Logo">
					</div>
                 </div>
				<div class="d-flex justify-content-center form_container">
				<form name="loginform"  id="loginform">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="email-login" class="form-control input_user" value="" placeholder="Email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="password-login" class="form-control input_pass" value="" placeholder="Password">
						</div>
						<span id="error-login"></span>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
							
				 	<button type="button" id="btn-login" class="btn login_btn">Login</button>
           </div>
           <div class="d-flex justify-content-center mt-3 login_container">
            <button type="button" name="button" class="btn login_btn" onclick="window.location.href='register.php'">Register</button>
				</div>
					</form>
				</div>	
			</div>
		</div>
</main>
</div>
<footer>
           <?php include 'footer.php'; ?>
</footer>
</body>
</html>