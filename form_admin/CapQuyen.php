<?php
include('headerAD.php');
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
                            <label>Search: <input type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="datatable-buttons"></label>
                        </div>
                        <table class="table table-bordered" style="width: 100%;">

                            <thead>
                                <td>Id Tài Khoản</td>
                                <td>Email</td>
                                <td>Vai Trò</td>
                                <td>Trạng Thái</td>
                                <td>Chức năng</td>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">1</td>
                                    <td>tranhao@gmail.com</td>
                                    <td>Giảng Viên</td>
                                    <td>0</td>
                                    <td>
                                        <a href="addQuyen.php">
                                            <i class="fas fa-edit"></i>
                                        </a> |
                                        <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a> |
                                        <a href="editQuyen.php">
                                            <i class="fas fa-plus-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">2</td>
                                    <td>yennhi@gmail.com</td>
                                    <td>Sinh Viên</td>
                                    <td>0</td>
                                    <td>
                                        <a href="addQuyen.php">
                                            <i class="fas fa-edit"></i>
                                        </a> |
                                        <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a> |
                                        <a href="editQuyen.php">
                                            <i class="fas fa-plus-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">3</td>
                                    <td>namhai@gmail.com</td>
                                    <td>Sinh Viên</td>
                                    <td>0</td>
                                    <td>
                                        <a href="addQuyen.php">
                                            <i class="fas fa-edit"></i>
                                        </a> |
                                        <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a> |
                                        <a href="editQuyen.php">
                                            <i class="fas fa-plus-square"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<?php
include('footerAD.php');
?>