<?php
include("headerAD.php");
?>

<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $masinhvien = $_POST['Id_SV'];
    $hosv = $_POST['HoSV'];
    $tensv = $_POST['TenSV'];
    $email = $_POST['Email'];
    $cmt = $_POST['CMT'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = date($_POST['NgaySinh']);
    $malop = $_POST['Id_Lop'];
    // $mataikhoan = $_POST['Id_TaiKhoan'];

    //Tạo truy vấn thêm
    $sql  = "INSERT INTO sinhvien(Id_SV,HoSV,TenSV,Email,CMT,GioiTinh,NgaySinh,Id_Lop) ";
    $sql .= " VALUES ('$masinhvien','$hosv','$tensv','$email','$cmt','$gioitinh','$ngaysinh','$malop') ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:DanhSachSinhVien.php");
    } else {
        $err = "Lỗi thêm mới trên bảng sinh viên." . mysqli_error($conn);
    }
}
?>

<?php
include("../msql_connect.php");
//Tài khoản
$sql = "Select * from taikhoan ";
$result = mysqli_query($conn, $sql);

//lớp
$sql1 = "Select * from lop";
$result1 = mysqli_query($conn, $sql1);
?>
<!-- page content -->
<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Thêm Sinh Viên</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_SV">Id Sinh Viên<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="Id_SV" name="Id_SV" type="text" class="form-control" value="<?php echo isset($masinhvien) ? $masinhvien : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="HoSV">Họ SV<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="HoSV" name="HoSV" type="text" class="form-control" value="<?php echo isset($hosv) ? $hosv : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="TenSV">Tên SV<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input id="TenSV" name="TenSV" type="text" class="form-control" value="<?php echo isset($TenSV) ? $TenSV : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Email">Email<span class="required">*</span></label>
                    <div class="col-md-8">
                        <!-- <input id="Email" name="Email" type="text" class="form-control" value="<?php echo isset($email) ? $email : ""; ?>"> -->
                        <select id="Email" name="Email" class="form-control">
                            <?php
                            while ($rowTK = mysqli_fetch_array($result)) :
                            ?>
                                <option value="<?php echo $rowTK['email']; ?>"> <?php echo $rowTK['email']; ?> </option>
                            <?php
                            endwhile;
                            ?>
                        </select>
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
                    <label class="control-label col-md-4" for="ngaysinh">Ngày sinh </label>
                    <div class="col-md-8">
                        <input id="ngaysinh" name="NgaySinh" type="text" class="form-control" value="<?php echo isset($ngaysinh) ? $ngaysinh : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_Lop">Id Lớp<span class="required">*</span></label>
                    <div class="col-md-8">
                        <!-- <input id="Id_Lop" name="Id_Lop" type="text" class="form-control" value="<?php echo isset($malop) ? $malop : ""; ?>"> -->
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
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-plus-square"></i>&nbsp;Thêm</button>
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
include("footerAD.php");
?>