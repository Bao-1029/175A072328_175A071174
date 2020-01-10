<?php
include('headerAD.php');
?>



<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy mã ngành học cũ
    $Idlop_old = $_GET['id'];
    //Lấy dữ liệu trên form
    $malop = $_POST['Id_Lop'];
    $tenlop = $_POST['TenLop'];
    $Idnganh = $_POST['Id_Nganh'];
    $trangthai = $_POST['TrangThai'];
    $ngaytao = date('Y-m-d');

    //Tạo truy vấn thêm
    $sql = " UPDATE LOP SET Id_Lop='$malop', TenLop='$tenlop', Id_Nganh= '$Idnganh' ,TrangThai=$trangthai WHERE Id_Lop='$Idlop_old'";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location: ./QLLop.php");
    } else {
        $err = "Lỗi thêm mới trên bảng lớp." . mysqli_error($conn);
    }
}

?>
<?php
//ĐỌc dữ liệu sửa theo mã (id) từ url
if (isset($_GET['id']) && !isset($err)) {
    include("../msql_connect.php");
    $Idlop_old = $_GET['id'];
    //Truy vấn đọc dữ liệu theo Id lớp
    $sql = " SELECT * FROM LOP WHERE Id_Lop='$Idlop_old'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $malop = $row['Id_Lop'];
    $tenlop = $row['TenLop'];
    $trangthai = $row['TrangThai'];
}

?>
<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-danger">Sửa Thông Tin Lớp</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_Lop">Id Lớp<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_Lop" name="Id_Lop" type="text" class="form-control" value="<?php echo isset($malop) ? $malop : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="TenLop">Tên Lớp<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="TenLop" name="TenLop" type="text" class="form-control" value="<?php echo isset($tenlop) ? $tenlop : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="TrangThai">Trạng Thái<span class="required">*</span></label>
                    <div class="col-md-5">
                        <select class="form-control" id="TrangThai" name="TrangThai">
                            <option value="1" <?php if (isset($trangthai)) {
                                                    echo ($trangthai == 1) ? "Selected" : "";
                                                } ?>>Hoạt động</option>
                            <option value="0" <?php if (isset($trangthai)) {
                                                    echo ($trangthai == 0) ? "Selected" : "";
                                                } ?>>Không hoạt động</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-danger" name="btnSave"><i class="fas fa-save"></i>&nbsp;Lưu</button>
                    <a href="QLLop.php" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
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