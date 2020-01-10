<?php
include('headerAD.php');
?>

<?php
//xác định khi người dùng submit form
if (isset($_POST['btnSave'])) {
    include("../msql_connect.php");
    //Lấy dữ liệu trên form
    $manganh = $_POST['Id_NganhHoc'];
    $tennganh = $_POST['TenNganh'];
    $trangthai = $_POST['TrangThai'];
    $ngaytao = date('Y-m-d');

    //Tạo truy vấn thêm
    $sql  = "INSERT INTO Nganhhoc(Id_NganhHoc,TenNganh,NgayTao,TrangThai) ";
    $sql .= " VALUES ('$manganh','$tennganh','$ngaytao',$trangthai) ";
    //die($sql);
    if (mysqli_query($conn, $sql)) {
        header("Location:QLNganh.php");
    } else {
        $err = "Lỗi thêm mới trên bảng ngành." . mysqli_error($link);
    }
}
?>


<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Thêm Ngành Học</h2>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <form action="" method="post" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-4" for="username">Id Ngành Học<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="Id_NganhHoc" name="Id_NganhHoc" type="text" class="form-control" value="<?php echo isset($manganh) ? $manganh : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="username">Tên Ngành<span class="required">*</span></label>
                    <div class="col-md-5">
                        <input id="TenNganh" name="TenNganh" type="text" class="form-control" value="<?php echo isset($tennganh) ? $tennganh : ""; ?>">
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
                <div class="col-md-12" style="text-align: center; padding-top: 50px;">
                    <button type="submit" class="btn btn-success" name="btnSave"><i class="fas fa-save"></i>&nbsp;Thêm</button>
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