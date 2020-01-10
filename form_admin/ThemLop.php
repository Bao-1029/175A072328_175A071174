<?php
include('headerAD.php');
?>


<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $malop = $_POST['Id_Lop'];
    $tenlop = $_POST['TenLop'];
    $manganh = $_POST['Id_Nganh'];
    $ngaytao = date('Y-m-d');
    $trangthai = $_POST['TrangThai'];

    //Tạo truy vấn thêm
    $sql  = "INSERT INTO Lop(Id_Lop,TenLop,Id_Nganh,NgayTao,TrangThai) ";
    $sql .= " VALUES ('$malop','$tenlop', '$manganh','$ngaytao',$trangthai) ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:QLLop.php");
    } else {
        $err = "Lỗi thêm mới trên bảng lớp." . mysqli_error($conn);
    }
}
?>

<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-danger">Thêm Lớp</h2>
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
                    <label class="control-label col-md-4" for="username">Tên Lớp<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="TenLop" name="TenLop" type="text" class="form-control" value="<?php echo isset($TenLop) ? $TenLop : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="username">Id Ngành<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_Nganh" name="Id_Nganh" type="text" class="form-control" value="<?php echo isset($manganh) ? $manganh : ""; ?>">
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
                    <button type="submit" class="btn btn-danger" name="btnSave"><i class="fas fa-plus-square"></i>&nbsp;Thêm</button>
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