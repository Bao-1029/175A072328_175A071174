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
    <title>Quản lí điểm học tập</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
    <link rel="stylesheet" href="CSS/all.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>



    <script src="./JS/teacher.js"></script>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
        <div class="top-main"style="height: 50px; background-color: #7aa4db; text-align: center">
            <div style="padding: 10px 0px;"><h3>Quản lý điểm học tập:</h3> </div>
       </div>
        <div class="container">
        <?php
                                if(isset($_SESSION['email'])){
                                  $email=$_SESSION['email'];
                                  $sql1="SELECT GV.HoTen FROM giangvien GV , taikhoan TK Where TK.email=GV.email and TK.email='$email'";
                                  $req=mysqli_query($conn, $sql1);
                                  $row=mysqli_fetch_array($req)
                                  ?>
            <p style="padding-top: 40px;">Giảng viên:<h4><?= $row['HoTen']; ?></h4> <?php } ?></p>
           <form style="padding-top: 20px;">
                <div class="row">
                    
                    <div class="col-lg-6 h-75">
                        
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Năm học:</label>
                            </div>
                            <select class="custom-select" id="NamHoc">
                              <option>---</option>
                              <?php 
                            $sql = "SELECT distinct NamHoc FROM kyhoc ";
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
                              <label class="input-group-text" for="inputGroupSelect01">Lớp học:</label>
                            </div>
                            <select class="custom-select" id="TenLop">
                              <option>---</option>
                              <?php 
                            $sql = "SELECT * FROM lop ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['TenLop']; ?>
                              <?php } ?>
                              </option>  
                            </select>
                          </div>
                    </div>
                        <div class="col-lg-6 h-75">
                              <div class="input-group mb-3" style="width: 70%">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Học kì:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                  <option>---</option>
                                  <?php 
                            $sql = "SELECT distinct HocKy FROM kyhoc ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['HocKy']; ?>
                              <?php } ?></option>
                                </select>
                              </div>
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Môn học:</label>
                            </div>
                            <select class="custom-select" id="TenMH">
                              <option>---</option>
                              <?php 
                            $sql = "SELECT * FROM monhoc ";
                            $req= mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                             ?>
                              <option value=""><?= $row['TenMonHoc']; ?>
                              <?php } ?></option>
                            </select>
                            <span id='error-teacher'></span>
                          </div>
                         
                          <button type="button" id="btn-timkiem" class="btn btn-info" style="margin: 5% 5%;">Tìm kiếm</button>
                          <button type="button" class="btn btn-info" style="margin: 5% 5%;">Lưu</button>
                          <button type="button" class="btn btn-info" style="margin: 5% 5%;">Xuất Excel</button>
                    </div>
                </div>
            </form>
            <div class="bottom-main" style="padding: 40px 0px;">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Mã Sinh viên</th>
                    <th scope="col">Tên Sinh viên</th>
                    <th scope="col">Điểm quá trình</th>
                    <th scope="col">Điểm thi</th>
                    <th scope="col">Điểm tổng kết</th>
                    <th scope="col">Chức Năng</th>
                  </tr>
                </thead>
                <tbody id="data-teacher">
                  
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