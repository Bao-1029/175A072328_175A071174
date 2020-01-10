<?php
include('headerAD.php');
?>

<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy mã ngành học cũ
    $Idgv_old = $_GET['id'];
    //Lấy dữ liệu trên form
    $hotengv = $_POST['HoTen'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = date($_POST['NgaySinh']);
    $diachi = $_POST['DiaChi'];
    $manganhhoc = $_POST['Id_Nganh'];

    //Tạo truy vấn thêm
    $sql = " UPDATE giangvien SET HoTen='$hotengv', GioiTinh = '$gioitinh', NgaySinh= '$ngaysinh',DiaChi = '$diachi',Id_Nganh='$manganhhoc' WHERE Id_GV='$Idgv_old'";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location: ./DanhSachGiangVien.php");
    } else {
        $err = "Lỗi thêm mới trên bảng giảng viên." . mysqli_error($conn);
    }
}

?>
<?php
//ĐỌc dữ liệu sửa theo mã (id) từ url
if (isset($_GET['id']) && !isset($err)) {
    include("../msql_connect.php");
    $Idgv_old = $_GET['id'];
    //Truy vấn đọc dữ liệu theo Id Ngành
    $sql = " SELECT * FROM giangvien WHERE Id_GV='$Idgv_old'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hotengv = $row['HoTen'];
    $gioitinh = $row['GioiTinh'];
    $ngaysinh = $row['NgaySinh'];
    $diachi = $row['DiaChi'];
    $manganhhoc = $row['Id_Nganh'];
}

?>

<?php
include("../msql_connect.php");
$sql1 = "Select * from nganhhoc";
$result1 = mysqli_query($conn, $sql1);
?>
<!-- page content -->
<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Sửa thông tin giảng viên</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="HoTen">Họ Tên GV<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="HoTen" name="HoTen" type="text" class="form-control" value="<?php echo isset($hotengv) ? $hotengv : ""; ?>">
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
                    <label class="control-label col-md-4" for="DiaChi">Địa chỉ</label>
                    <div class="col-md-8">
                        <input id="DiaChi" name="DiaChi" type="text" class="form-control" value="<?php echo isset($diachi) ? $diachi : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_Lop">Id Ngành Học<span class="required">*</span></label>
                    <div class="col-md-8">
                        <select id="Id_Nganh" name="Id_Id_NganhLop" class="form-control">
                            <?php
                            while ($rowidnganh = mysqli_fetch_array($result1)) :
                            ?>
                                <option value="<?php echo $rowidnganh['Id_NganhHoc']; ?>"> <?php echo $rowidnganh['Id_NganhHoc']; ?> </option>
                            <?php
                            endwhile;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-save"></i>&nbsp;Lưu</button>
                    <a href="DanhSachGiangVien.php" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
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