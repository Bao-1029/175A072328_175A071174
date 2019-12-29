<?php
include('headerAD.php');
?>
        <!-- page content -->
        <div class="right_col" role="main">

            <div style="padding: 50px;">
                <div class="x_title">
                    <h2 style="font-size: 20px;font-weight: bold;" class="btn btn-warning">Môn Học</h2>
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
                            <td>Id Môn Học</td>
                            <td>Tên Môn Học</td>
                            <td>Id Kỳ Học</td>
                            <td>Số Tín Chỉ</td>
                            <td>Ngày Tạo</td>
                            <td>Trạng Thái</td>
                            <td>Chức năng</td>
                        </thead>


                        <tbody>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">m1</td>
                                <td>Công nghệ Web</td>
                                <td>k1</td>
                                <td>3</td>
                                <td>10/12/2019</td>
                                <td>0</td>
                                <td>
                                    <a href="ThemMonHoc.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditMH.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>


                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">m2</td>
                                <td>Phân tích thiết kế hệ thống thông tin</td>
                                <td>k2</td>
                                <td>3</td>
                                <td>10/12/2018</td>
                                <td>0</td>
                                <td>
                                    <a href="ThemMonHoc.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditMH.php">
                                        <i class="fas fa-tools"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">m3</td>
                                <td>Lý Thuyết Tính Toán</td>
                                <td>k2</td>
                                <td>3</td>
                                <td>10/10/2019</td>
                                <td>0</td>
                                <td>
                                    <a href="ThemMonHoc.php">
                                        <i class="fas fa-plus-square"></i>
                                    </a> |
                                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> |
                                    <a href="EditMH.php">
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