<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav id="nav" class="navbar navbar-expand-lg">
                        <div class="menu-toggle navbar-toggler ml-auto">
                            <i class="fas fa-bars" data-toggle="collapse" data-target="#showMenu"></i>
                        </div>
                        <div class="collapse navbar-collapse" id="showMenu">
                            <ul class="navbar-nav mx-auto main-nav">
                                <li><a href="index.php" title="Home">Home</a></li>
                                <li class="dropdown"><a href="index.php?category=all">Tin tức & thông báo</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="index.php?category=tintuc" title="">Tin tức</a></li>
                                            <li><a href="index.php?category=thongbao" title="">Thông báo</a></li>
                                            <li><a href="#" title="">Tin Video</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" title="TuyenSinh">Tuyển Sinh</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="#" title="">Đại học chính quy</a></li>
                                            <li><a href="#" title="">Thạc sĩ</a></li>
                                            <li><a href="#" title="">Tiến sĩ</a></li>
                                            <li><a href="#" title="">Vừa học vừa làm</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- <li><a href="#" title="LienHe">Liên hệ</a></li> -->
                                <li class="dropdown"><a href="#" title="GioiThieu">Giới thiệu</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="#" title="">Sứ mạng, tầm nhìn</a></li>
                                            <li><a href="#" title="">Tổng quan</a></li>
                                            <li><a href="#" title="">Cơ cấu tổ chức và nhân lực</a></li>
                                            <li><a href="#" title="">Cơ sở vật chất</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" title="Đào tạo">Đào tạo</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="" title="">Đại học chính quy</a></li>
                                            <li><a href="" title="">Thạc sĩ</a></li>
                                            <li><a href="" title="">Tiến sĩ</a></li>
                                            <li><a href="" title="">Hệ sau đại học</a></li>
                                            <li><a href="" title="">Chương chình tiên tiến</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" title="KHCN">Khoa học công nghệ</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="" title="">Tin KHCN</a></li>
                                            <li><a href="" title="">Hội nghị hội thảo</a></li>
                                            <li><a href="" title="">Tiêu chuẩn, quy chuẩn</a></li>
                                            <li><a href="" title="">Thông báo</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" title="Sinh viên">Sinh viên</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="#" title="">Quy chế, Quy định</a></li>
                                            <li><a href="#" title="">Hoạt động sinh viên</a></li>
                                            <li><a href="#" title="">Hỗ trợ sinh viên</a></li>
                                            <li><a href="#" title="">Học phí</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" title="doingoai">Đối ngoại</a>
                                    <div class="nav-sub">
                                        <ul class="dropdown-nav">
                                            <li><a href="#" title="">Giới thiệu chung</a></li>
                                            <li><a href="#" title="">Tin tức đối ngoại</a></li>
                                            <li><a href="#" title="">Dự án quốc tế</a></li>
                                            <li><a href="#" title="">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <?php
                                if(isset($_SESSION['email']) && isset($_SESSION['role'])
                                 && $_SESSION['role'] ==1) {
                                    // Nếu có session email thì check tiếp xem có session role không , có cả 2 session thì check tiếp xem role ==1 không. =1 thì mới hiện.
                                ?>
                                    <li class="dropdown"><a href="form_admin/indexAD.php" title="quanli">Quản Lí</a>
                                    </li>
                                <?php } ?>
                                <?php
                                if(isset($_SESSION['email']) && isset($_SESSION['role'])
                                 && $_SESSION['role'] ==0) {
                                    // Nếu có session email thì check tiếp xem có session role không , có cả 2 session thì check tiếp xem role ==1 không. =1 thì mới hiện.
                                ?>
                                    <li class="dropdown"><a href="student.php" title="tradiem">Tra Cứu Điểm</a>
                                    </li>
                                <?php } ?>
                                <?php
                                if(isset($_SESSION['email']) && isset($_SESSION['role'])
                                 && $_SESSION['role'] ==2) {
                                    // Nếu có session email thì check tiếp xem có session role không , có cả 2 session thì check tiếp xem role ==1 không. =1 thì mới hiện.
                                ?>
                                    <li class="dropdown"><a href="teacher.php" title="quanlidiem">Quản Lý Điểm</a>
                                    </li>
                                <?php } ?>
                                
                            </ul>
                        
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
        </div>