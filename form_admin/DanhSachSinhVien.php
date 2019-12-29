<?php
include('headerAD.php');
?>
        <!-- page content -->
        <div class="right_col" role="main">

            <div style="padding: 50px;">
                <div class="x_title">
                    <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-primary">Danh sách Sinh Viên</h2>
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
                            <td>Id Sinh Viên</td>
                            <td>Họ Sinh Viên</td>
                            <td>Tên Sinh Viên</td>
                            <td>Email</td>
                            <td>CMT</td>
                            <td>Giới Tính</td>
                            <td>Ngày sinh</td>
                            <td>Lớp</td>
                            <td>Mật khẩu</td>
                            <td>Chức năng</td>
                        </thead>


                        <tbody>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">sv1</td>
                                <td>Phạm</td>
                                <td>Hoài Thu</td>
                                <td>pthu0647@gmail.com</td>
                                <td>01636590096</td>
                                <td>Nữ</td>
                                <td>23/04/1998</td>
                                <td>59TH3</td>
                                <td>abc</td>
                                <td>
                                    <a href="ThemSV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditSV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">sv2</td>
                                <td>Nguyễn</td>
                                <td>Mai Phương</td>
                                <td>maiphuong@gmail.com</td>
                                <td>0989822601</td>
                                <td>Nữ</td>
                                <td>23/04/1998</td>
                                <td>59PM1</td>
                                <td>xyz</td>
                                <td>
                                    <a href="ThemSV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditSV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">sv3</td>
                                <td>Nguyễn</td>
                                <td>Duy Quân</td>
                                <td>duyquan@gmail.com</td>
                                <td>175071112</td>
                                <td>Nam</td>
                                <td>23/04/1991</td>
                                <td>59TH1</td>
                                <td>zxc</td>
                                <td>
                                    <a href="ThemSV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditSV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">sv4</td>
                                <td>Hoàng</td>
                                <td>Trần Ngọc</td>
                                <td>tranngoc@gmail.com</td>
                                <td>01636590096</td>
                                <td>Nam</td>
                                <td>23/10/1990</td>
                                <td>59HT</td>
                                <td>asd</td>
                                <td>
                                    <a href="ThemSV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditSV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">sv5</td>
                                <td>Trần</td>
                                <td>Thúy Nga</td>
                                <td>thuynga@gmail.com</td>
                                <td>0989822601</td>
                                <td>Nữ</td>
                                <td>15/09/1999</td>
                                <td>59TH2</td>
                                <td>qwe</td>
                                <td>
                                    <a href="ThemSV.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditSV.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
include('footerAD.php');
?>