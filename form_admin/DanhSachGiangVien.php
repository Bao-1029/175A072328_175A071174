<?php
include('headerAD.php');
?>
        <!-- page content -->
        <div class="right_col" role="main">

            <div style="padding: 50px;">
                <div class="x_title">
                    <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-primary">Danh sách giảng viên</h2>
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
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">

                        <thead>
                            <td>Id Giảng Viên</td>
                            <td>Họ Tên GV</td>
                            <td>Email</td>
                            <td>Giới Tính</td>
                            <td>Ngày Sinh</td>
                            <td>Địa Chỉ</td>
                            <td>Ngành</td>
                            <td>Chức năng</td>
                        </thead>


                        <tbody>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">gv1</td>
                                <td>Phạm Minh Phương</td>
                                <td>minhphuong@gmail.com</td>
                                <td>Nữ</td>
                                <td>23/04/1988</td>
                                <td>Sơn La</td>
                                <td>Hệ thống thông tin</td>
                                <td>
                                    <a href="ThemGV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditGV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>


                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">gv2</td>
                                <td>Nguyễn Hoàng Quỳnh</td>
                                <td>hoangquynh@gmail.com</td>
                                <td>Nữ</td>
                                <td>23/04/1978</td>
                                <td>Hòa Bình</td>
                                <td>Công nghệ thông tin</td>
                                <td>
                                    <a href="ThemGV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditGV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">gv3</td>
                                <td>Nguyễn Bình Minh</td>
                                <td>binhminh@gmail.com</td>
                                <td>Nam</td>
                                <td>23/05/1991</td>
                                <td>Hà Nội</td>
                                <td>Công nghệ phần mềm</td>
                                <td>
                                    <a href="ThemGV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditGV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">gv4</td>
                                <td>Hoàng Sơn Hải</td>
                                <td>sonhai@gmail.com</td>
                                <td>Nam</td>
                                <td>23/10/1990</td>
                                <td>Hà Nội</td>
                                <td>Công nghệ thông tin</td>
                                <td>
                                    <a href="ThemGV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditGV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">gv5</td>
                                <td>Trần Yến Nhi</td>
                                <td>yennhi@gmail.com</td>
                                <td>Nữ</td>
                                <td>15/09/1989</td>
                                <td>Hải Phòng</td>
                                <td>Hệ thống thông tin</td>
                                <td>
                                    <a href="ThemGV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditGV.php">
                                        <i class="fas fa-tools"></i>
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