<?php 
session_start();
require ('msql_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu điểm sinh viên</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./JS/student.js"></script>

</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
        <div class="top-main"style="height: 50px; background-color: #7aa4db; text-align: center">
            <div style="padding: 10px 0px;"><h3>Tra cứu điểm học tập:</h3> </div>
       </div>
        <div class="container">
           <form style="padding-top: 50px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Mã Sinh Viên :</label>
                            <input type="" class="form-control" id="Masv" style="width: 70%">
                        </div>
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Năm học:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <?php 
                            $sql = "SELECT * FROM kyhoc ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['NamHoc']; ?>
                              <?php } ?>
                              </option>   
                            </select>
                           
                          </div>
                          <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Học kì:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <?php 
                            $sql = "SELECT * FROM kyhoc ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['HocKy']; ?>
                              <?php } ?></option>
                            </select>
                           
                          </div>
                    </div>
                        <div class="col-lg-6 h-75">
                        <div class="form-group">
                            <label>Số chứng minh thư: </label>
                            <input type="" class="form-control" id="SCMT" style="width: 70%">
                        </div>
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Môn học:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <?php 
                            $sql = "SELECT * FROM monhoc ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['TenMonHoc']; ?>
                              <?php } ?></option>
                            </select>
                          </div>
                          <span id='error-student'></span>
                          <button type="button" id="btn-student" class="btn student_btn" style="margin-left: 30%; background-color: blue">Tìm kiếm</button>
                    </div>
                </div>
                <?php
                                if(isset($_SESSION['email'])){
                                  $email=$_SESSION['email'];
                                  $sql1="SELECT SV.TenSV FROM sinhvien SV , taikhoan TK Where TK.email=SV.email and TK.email='$email'";
                                  $req=mysqli_query($conn, $sql1);
                                  $row=mysqli_fetch_array($req)
                                  ?>
             <h3 id='name-student'style="padding-top: 30px">Sinh viên: <?= $row['TenSV']; ?></h3>
             <?php } ?>
            </form>
            <div class="bottom-main" style="padding: 30px 0px;">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Kỳ học</th>
                    <th scope="col">Số tín chỉ</th>
                    <th scope="col">Điểm quá trình</th>
                    <th scope="col">Điểm thi</th>
                    <th scope="col">Điểm tổng kết</th>
                  </tr>
                </thead>
                <tbody id='dataStudent'>
                  
                  <?php
                                if(isset($_SESSION['email'])){
                                  $email=$_SESSION['email'];
                                  $sql = "SELECT MH.TenMonHoc,KH.HocKy ,MH.SoTinChi, D.DiemQuaTrinh, D.DiemThi, D.DiemTongKet FROM monhoc MH, diem D, kyhoc KH, sinhvien SV, taikhoan TK WHERE KH.Id_KyHoc=MH.Id_KyHoc and MH.Id_MonHoc=D.Id_MonHoc and D.Id_SV=SV.Id_SV and TK.email=SV.email and TK.email='$email'";
                                  $req=mysqli_query($conn, $sql);
                                  while($row=mysqli_fetch_array($req)) {
                             ?>
                       <tr>         
                    <td><?= $row['TenMonHoc']; ?></td>
                    <td><?= $row['HocKy']; ?></td>
                    <td><?= $row['SoTinChi']; ?></td>
                    <td><?= $row['DiemQuaTrinh']; ?></td>
                    <td><?= $row['DiemThi']; ?></td>
                    <td><?= $row['DiemTongKet']; ?></td>
                    </tr>
                    <?php } }?>
                  
                 
                </tbody>
              </table>
              <a href="index.php" style="float:right">Trở về trang chủ!!!</a>
            </div>
        </div>
    </main>
    <footer>
            <div class="design-bottom" style="height: 100%; background-color: #7aa4db; text-align: center">
                <h5>&copy; Thiết kế: Thái Bảo & Giang Nam</h5>
        </div>
    </footer>

</body>

</html>