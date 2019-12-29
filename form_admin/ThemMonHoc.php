<?php
include('headerAD.php');
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
                                <label class="control-label col-md-4" for="username">Id Môn Học<span
                                            class="required">*</span></label>
                                <div class="col-md-5">
                                    <input id="username" name="username" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4" for="username">Tên Môn Học<span
                                            class="required">*</span></label>
                                <div class="col-md-5">
                                    <input id="username" name="username" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4" for="username">Id Kỳ Học<span
                                            class="required">*</span></label>
                                <div class="col-md-5">
                                    <input id="username" name="username" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4" for="username">Ngày Tạo<span
                                            class="required">*</span></label>
                                <div class="col-md-5">
                                    <input id="username" name="username" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4" for="password">Trạng Thái<span
                                            class="required">*</span></label>
                                <div class="col-md-5">
                                    <input id="newpass" name="password" type="password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-12 button-themcb" style="text-align: center; padding-top: 50px;">
                                <button type="submit" class="btn btn-warning themcb" value="them" name="themcanbo" onclick="checkmatkhau()">Thêm</button>
                                <button type="reset" class="btn btn-primary">Huỷ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<?php
include('footerAD.php');
?>