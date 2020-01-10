<?php
include('headerAD.php');
?>


<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $mamonhoc = $_POST['Id_MonHoc'];
    $tenmonhoc = $_POST['Id_MonHoc'];
    $makyhoc = $_POST['Id_KyHoc'];
    $sotinchi = $_POST['SoTinChi'];
    $trangthai = $_POST['TrangThai'];
    $ngaytao = date('Y-m-d');

    //Tạo truy vấn thêm
    $sql  = "INSERT INTO monhoc(Id_MonHoc,Id_MonHoc,Id_KyHoc,SoTinChi,NgayTao,TrangThai) ";
    $sql .= " VALUES ('$mamonhoc','$tenmonhoc','$makyhoc','$sotinchi','$ngaytao',$trangthai) ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:QLMonHoc.php");
    } else {
        $err = "Lỗi thêm mới trên bảng môn học." . mysqli_error($conn);
    }
}
?>
<!-- page content -->
<div class="right_col" role="main">

    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-warning">Thêm Môn Học</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_MonHoc">Id Môn Học<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_MonHoc" name="Id_MonHoc" type="text" class="form-control" value="<?php echo isset($mamonhoc) ? $mamonhoc : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_MonHoc">Tên Môn Học<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_MonHoc" name="Id_MonHoc" type="text" class="form-control" value="<?php echo isset($tenmonhoc) ? $tenmonhoc : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="Id_KyHoc">Id Kỳ Học<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_KyHoc" name="Id_KyHoc" type="text" class="form-control" value="<?php echo isset($makyhoc) ? $makyhoc : ""; ?>">
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
                    <button type="submit" class="btn btn-warning" name="btnSave"><i class="fas fa-save"></i>&nbsp;Thêm</button>
                    <a href="QLMonHoc" class="btn btn-primary"><i class="fas fa-times-circle"></i>&nbsp;Huỷ</a>
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