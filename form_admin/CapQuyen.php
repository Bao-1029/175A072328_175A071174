<?php
include('headerAD.php');
?>

<?php
include("../msql_connect.php");
//Tạo truy vấn lấy dữ liệu
$sql = "Select * from taikhoan WHERE 1=1 ";
// Thực thi câu lệnh truy vấn
$result = mysqli_query($conn, $sql);
?>

<!-- page content -->
<div class="right_col" role="main">
    <div style="padding: 50px;">
        <div class="x_title">
            <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-success">Cấp quyền</h2>
            <div class="clearfix"></div>
        </div>
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="dt-buttons btn-group">
                <a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
                    <span>Copy</span>
                </a>
                <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
                    <span>CSV</span>
                </a>
                <a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
                    <span>Print</span>


                </a>
            </div>
            <div id="datatable-buttons_filter" class="dataTables_filter">
                <label>Search: <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-buttons"></label>
            </div>
            <table class="table table-bordered" style="width: 100%;">

                <thead>
                    <td>#</td>
                    <td>Id Tài Khoản</td>
                    <td>Email</td>
                    <td>Vai Trò</td>
                    <td>Chức năng</td>
                </thead>
                <tbody>
                <?php
                    $stt = 0;
                    while ($row = mysqli_fetch_array($result)) :
                        $stt++;
                    ?>
                        <tr>
                            <th scope="row"><?php echo $stt; ?></th>
                            <td><?php echo $row['Id_TaiKhoan']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['VaiTro']; ?></td>
                            <td>
                                <a href="EditQuyen.php?id=<?php echo $row['Id_TaiKhoan'] ?>">
                                    <i class="fas fa-tools"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('footerAD.php');
?>