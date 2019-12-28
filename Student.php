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
    <title>Sinh Viên</title>
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
            <div style="padding: 10px 0px;"><h3>Tra cứu điểm học tập:</h3> </div>
       </div>
        <div class="container">
           <form style="padding-top: 50px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Mã Sinh Viên :</label>
                            <input type="" class="form-control" id="masinhvien" style="width: 70%">
                        </div>
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
                              <label class="input-group-text" for="inputGroupSelect01">Học kì:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>---</option>
                              <option value="1">HKI-GĐ1</option>
                              <option value="2">HKI-GĐ2</option>
                              <option value="3">HKII-GĐ1</option>
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
                              <option value="1">Lí thyết tính toán</option>
                              <option value="2">Công nghệ Web</option>
                              <option value="3">Thống kê ứng dụng</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-info" style="margin-left: 30%;">Tìm kiếm</button>
                    </div>
                </div>
            </form>
            <div class="bottom-main" style="padding: 50px 0px;">
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
                <tbody>
                  <tr>
                    <td>Lý thuyết tính toán</td>
                    <td>HK1</td>
                    <td>3</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Thống kê ứng dụng</td>
                    <td>HK1</td>
                    <td>3</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Mạng máy tính</td>
                    <td>HK1</td>
                    <td>3</td>
                    <td>8</td>
                    <td>9</td>
                    <td>8.5</td>
                  </tr>
                </tbody>
              </table>
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