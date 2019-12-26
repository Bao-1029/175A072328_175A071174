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
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
 require ('login-process.php');
} // End of the main Submit conditional.
?>
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/dky.png" class="brand_logo" alt="Logo">
					</div>
                 </div>
				<div class="d-flex justify-content-center form_container">
				<form action="login_dm01.php" method="post" name="loginform" id="loginform">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="Username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Password">
						</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Login</button>
           </div>
           <div class="d-flex justify-content-center mt-3 login_container">
            <button type="button" name="button" class="btn login_btn">Register</button>
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