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
            <p style="padding-top: 40px;">Giảng viên:<h4>Nguyễn Văn A</h4></p>
           <form style="padding-top: 20px;">
                <div class="row">
                    
                    <div class="col-lg-6 h-75">
                        
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Năm học:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <option value="1">2017-2018</option>
                              <option value="2">2018-2019</option>
                              <option value="3">2019-2020</option>
                            </select>
                          </div>
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Lớp học:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <option value="1">59TH1</option>
                              <option value="2">59TH2</option>
                              <option value="3">59TH3</option>
                            </select>
                          </div>
                    </div>
                        <div class="col-lg-6 h-75">
                              <div class="input-group mb-3" style="width: 70%">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Học kì:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>---</option>
                                  <option value="1">HKI-GĐ1</option>
                                  <option value="2">HKI-GĐ2</option>
                                  <option value="3">HKII-GĐ1</option>
                                </select>
                              </div>
                        <div class="input-group mb-3" style="width: 70%">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Môn học:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <option value="1">Lí thyết tính toán</option>
                              <option value="2">Công nghệ Web</option>
                              <option value="3">Thống kê ứng dụng</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-info" style="margin: 5% 5%;">Tìm kiếm</button>
                          <button type="submit" class="btn btn-info" style="margin: 5% 5%;">Lưu</button>
                          <button type="submit" class="btn btn-info" style="margin: 5% 5%;">Xuất Excel</button>
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
                <tbody>
                  <tr>
                    <td>175A072328</td>
                    <td>Nguyễn Thái Bảo</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                    <td><a href="#">
                        <i class="fas fa-edit"></i>
                    </a> |
                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                        <i class="fas fa-trash-alt"></i>
                    </a> |
                    <a href="#">
                        <i class="fas fa-plus-square"></i>
                    </a></td>
                  </tr>
                  <tr>
                    <td>175A071174</td>
                    <td>Hoàng Giang Nam</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                    <td><a href="#">
                        <i class="fas fa-edit"></i>
                    </a> |
                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                        <i class="fas fa-trash-alt"></i>
                    </a> |
                    <a href="#">
                        <i class="fas fa-plus-square"></i>
                    </a></td>
                  </tr>
                  <tr>
                    <td>175A071449</td>
                    <td>Nguyễn Văn Vượng</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                    <td><a href="#">
                        <i class="fas fa-edit"></i>
                    </a> |
                    <a href="#" onclick="return confirm('Bạn có muốn xóa không?');">
                        <i class="fas fa-trash-alt"></i>
                    </a> |
                    <a href="#">
                        <i class="fas fa-plus-square"></i>
                    </a></td>
                  </tr>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js.map"></script>
</body>

</html>