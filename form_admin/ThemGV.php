<?php
include('headerAD.php');
?>

<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $magiangvien = $_POST['Id_GV'];
    $hotengv = $_POST['HoTen'];
    $email = $_POST['Email'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = date($_POST['NgaySinh']);
    $diachi = $_POST['DiaChi'];
    $manganhhoc = $_POST['Id_Nganh'];

    //Tạo truy vấn thêm
    $sql  = "INSERT INTO giangvien(Id_GV,HoTen,Email,GioiTinh,NgaySinh,DiaChi,Id_Nganh) ";
    $sql .= " VALUES ('$magiangvien','$hotengv','$email','$gioitinh','$ngaysinh','$diachi','$manganhhoc') ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:DanhSachGiangVien.php");
    } else {
        $err = "Lỗi thêm mới trên bảng giảng viên." . mysqli_error($conn);
    }
}
?>

<?php
include("../msql_connect.php");
//Tài khoản
$sql = "Select * from taikhoan ";
$result = mysqli_query($conn, $sql);

//lớp
$sql1 = "Select * from nganhhoc";
$result1 = mysqli_query($conn, $sql1);
?>

<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Thêm Giảng Viên</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="Id_GV">Id Giảng Viên<span class="required">*</span></label>
                        <div class="col-md-8">
                            <input id="Id_GV" name="Id_GV" type="text" class="form-control" value="<?php echo isset($magiangvien) ? $magiangvien : ""; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="HoTen">Họ tên GV<span class="required">*</span></label>
                        <div class="col-md-8">
                            <input id="HoTen" name="HoTen" type="text" class="form-control" value="<?php echo isset($hotengv) ? $hotengv : ""; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="Email">Email<span class="required">*</span></label>
                        <div class="col-md-8">
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
                        <label class="control-label col-md-4">Giới tính </label>
                        <div class="col-md-8">
                            <input id="GioiTinh" name="GioiTinh" type="text" class="form-control" value="<?php echo isset($gioitinh) ? $gioitinh : ""; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="Ngaysinh">Ngày sinh </label>
                        <div class="col-md-8">
                            <input id="ngaysinh" name="NgaySinh" type="text" class="form-control" value="<?php echo isset($ngaysinh) ? $ngaysinh : ""; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="DiaChi">Địa chỉ </label>
                        <div class="col-md-8">
                            <input id="DiaChi" name="DiaChi" type="text" class="form-control" value="<?php echo isset($diachi) ? $diachi : ""; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="Id_Lop">Id Ngành Học<span class="required">*</span></label>
                        <div class="col-md-8">
                            <select id="Id_Nganh" name="Id_Nganh" class="form-control">
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
                </div>
                <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-plus-square"></i>&nbsp;Thêm</button>
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