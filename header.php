<div class="header-top pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact" style="text-decoration: none">
                            <div class="mail">
                                <a href="mailto:thuyloi1959@wru.vn">
                                    <img src="img/mail.jpg" alt="" class="img-fluid" style="width: 25px; height: auto;">
                                    <span>Thuyloi1959@wru.vn</span>
                                </a>
                            </div>
                            <div class="call">
                                <a href="tel:+0123456789">
                                    <img src="img/Call.jpg" alt="" style="width: 25px; height: auto;">
                                    <span>0123456789</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-3" style="text-align: right; width: 250px;text-decoration: none;">
                        <div class="search">
                        <?php
                         if(isset($_SESSION['email'])) {
                            $email = $_SESSION['email'];
                            $sql="SELECT * FROM taikhoan WHERE email = '$email'";
                            $user=mysqli_query($conn, $sql);
                            $row=mysqli_fetch_array($user);
                            // <?=  chính là bằng <?php echo . Đó là viết tắt thôi
                        ?>
                            <div class="search-top">
                                <span class="user-name"><?= $row['username'] ?></span>
                                <a href="logout.php">Logout</a>
                            </div>
                         <?php } else { ?>
                            <div class="search-top">
                                <a href="">(+)</a>
                                <a href="login.php">Login</a>
                                <a href="register.php">Register</a>
                                <a href=""><img src="img/vi.jpg" alt=""></a>
                                <a href=""><img src="img/en.jpg" alt=""></a>
                            </div>
                         <?php } ?>
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text red lighten-3" id="basic-text1"><i
                                            class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>