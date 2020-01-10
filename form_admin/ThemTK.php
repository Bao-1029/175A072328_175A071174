<?php
include('headerAD.php');
?>



<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $email = $_POST['email'];
    $matkhau = $_POST['MatKhau'];
    $vaitro = $_POST['VaiTro'];
    $username = $_POST['username'];
    $ngaytao = date('Y-m-d');

    $matkhaupam = password_hash($matkhau, PASSWORD_DEFAULT);
    //Tạo truy vấn thêm
    $sql  = "INSERT INTO TAIKHOAN(email,MatKhau,VaiTro, username, NgayTao) ";
    $sql .= " VALUES ('$email','$matkhaupam','$vaitro', '$username','$ngaytao') ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:QLTaiKhoan.php");
    } else {
        $err = "Lỗi thêm mới trên bảng tài khoản." . mysqli_error($conn);
    }
}
?>
<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-warning">Thêm Tài Khoản</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="email">Email<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="email" name="email" type="text" class="form-control" value="<?php echo isset($email) ? $email : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Password">Mật khẩu<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="MatKhau" name="MatKhau" type="text" class="form-control" value="<?php echo isset($matkhau) ? $matkhau : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="quyen">Vai trò<span class="required">*</span></label>
                    <div class="col-md-5">
                        <select class="form-control" name="VaiTro">
                            <option value="2" <?php if (isset($vaitro)) {
                                                    echo ($vaitro == 2) ? "Selected" : "";
                                                } ?>>Giảng Viên</option>
                            <option value="0" <?php if (isset($vaitro)) {
                                                    echo ($vaitro == 0) ? "Selected" : "";
                                                } ?>>Sinh Viên</option>
                            <option value="1" <?php if (isset($vaitro)) {
                                                    echo ($vaitro == 1) ? "Selected" : "";
                                                } ?>>admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Password">User Name<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="username" name="username" type="text" class="form-control" value="<?php echo isset($username) ? $username : ""; ?>">
                    </div>
                </div>
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-warning" name="btnSave"><i class="fas fa-save"></i>&nbsp;Thêm</button>
                    <a href="QLTaiKhoan.php" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
                </div>
                <?php
                if (isset($err)) :
                ?>
                    <span class="alert alert-danger" role="alert"><?php echo $err; ?></span>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

<?php
include('footerAD.php');
?>