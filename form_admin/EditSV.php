<?php
include('headerAD.php');
?>

<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy mã ngành học cũ
    $Idsv_old = $_GET['id'];
    //Lấy dữ liệu trên form
    $hosv = $_POST['HoSV'];
    $tensv = $_POST['TenSV'];
    $cmt = $_POST['CMT'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = date($_POST['NgaySinh']);
    $malop = $_POST['Id_Lop'];

    //Tạo truy vấn thêm
    $sql = " UPDATE sinhvien SET HoSV='$hosv',TenSV='$tensv', CMT = '$cmt', GioiTinh = '$gioitinh', NgaySinh= '$ngaysinh', Id_Lop='$malop' WHERE Id_SV='$Idsv_old'";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location: ./DanhSachSinhVien.php");
    } else {
        $err = "Lỗi thêm mới trên bảng sinh viên." . mysqli_error($conn);
    }
}

?>
<?php
//ĐỌc dữ liệu sửa theo mã (id) từ url
if (isset($_GET['id']) && !isset($err)) {
    include("../msql_connect.php");
    $Idsv_old = $_GET['id'];
    //Truy vấn đọc dữ liệu theo Id Ngành
    $sql = " SELECT * FROM sinhvien WHERE Id_SV='$Idsv_old'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hosv = $row['HoSV'];
    $tensv = $row['TenSV'];
    $cmt = $row['CMT'];
    $gioitinh = $row['GioiTinh'];
    $ngaysinh = $row['NgaySinh'];
    $malop = $row['Id_Lop'];
}

?>

<?php
include("../msql_connect.php");
$sql1 = "Select * from lop";
$result1 = mysqli_query($conn, $sql1);
?>

<!-- page content -->
<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Sửa thông tin sinh viên</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="HoSV">Họ SV<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="HoSV" name="HoSV" type="text" class="form-control" value="<?php echo isset($hosv) ? $hosv : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="TenSV">Tên SV<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="TenSV" name="TenSV" type="text" class="form-control" value="<?php echo isset($tensv) ? $tensv : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="CMT">CMT<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="CMT" name="CMT" type="text" class="form-control" value="<?php echo isset($cmt) ? $cmt : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Giới tính </label>
                    <div class="col-md-8">
                        <input id="GioiTinh" name="GioiTinh" type="text" class="form-control" value="<?php echo isset($gioitinh) ? $gioitinh : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="NgaySinh">Ngày sinh </label>
                    <div class="col-md-8">
                        <input id="NgaySinh" name="NgaySinh" type="text" class="form-control" value="<?php echo isset($ngaysinh) ? $ngaysinh : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_Lop">Id Lớp<span class="required">*</span></label>
                    <div class="col-md-8">
                        <select id="Id_Lop" name="Id_Lop" class="form-control">
                            <?php
                            while ($rowidlop = mysqli_fetch_array($result1)) :
                            ?>
                                <option value="<?php echo $rowidlop['Id_Lop']; ?>"> <?php echo $rowidlop['Id_Lop']; ?> </option>
                            <?php
                            endwhile;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-save"></i>&nbsp;Lưu</button>
                    <a href="DanhSachSinhVien.php" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
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