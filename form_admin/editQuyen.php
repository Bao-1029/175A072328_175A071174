<?php
include('headerAD.php');
?>


<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy mã ngành học cũ
    $Id_TK_old = $_GET['id'];
    //Lấy dữ liệu trên form
    $mataikhoan = $row['Id_TaiKhoan'];
    $email = $_POST['email'];
    $vaitro = $_POST['VaiTro'];
    $ngaytao = date('Y-m-d');
    $username = $_POST['username'];

    //Tạo truy vấn thêm
    $sql = " UPDATE taikhoan SET VaiTro = '$vaitro' WHERE Id_TaiKhoan='$Id_TK_old'";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location: ./CapQuyen.php");
    } else {
        $err = "Lỗi thêm mới trên bảng cấp quyền." . mysqli_error($conn);
    }
}

?>
<?php
//ĐỌc dữ liệu sửa theo mã (id) từ url
if (isset($_GET['id']) && !isset($err)) {
    include("../msql_connect.php");
    $Id_TK_old = $_GET['id'];
    //Truy vấn đọc dữ liệu theo Id Ngành
    $sql = " SELECT * FROM taikhoan WHERE Id_TaiKhoan='$Id_TK_old'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $email = $row['email'];
    $vaitro = $row['VaiTro'];
}

?>

<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Sửa Quyền</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
            <div class="form-group">
                    <label class="control-label col-md-4" for="username">Email<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="email" name="email" type="text" class="form-control" value="<?php echo isset($email) ? $email : ""; ?>">
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
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-save"></i>&nbsp;Lưu</button>
                    <a href="QLNganh.php" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
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