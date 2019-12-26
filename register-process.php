<?php 
    // khởi tạo dòng 3 để sử dụng được sesion ở dòng 23.
    // include file kết nối sql
   require ('msql_connect.php');
   // Tạo biến email và mật khẩu gán bằng giá trị của 2 trường nhập trong form đăng nhập. Trim là để xoá bỏ khoảng trắng đầu và cuối chuỗi. VD : '  email1   ' =  'email1'
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $password2 = trim($_POST["password2"]);
    // SQL câu lệnh
    $sql = "SELECT * FROM taikhoan where email = '$email'";
    mysqli_set_charset($conn, 'UTF8');
    // Thực thi sql
    $result1 = mysqli_query($conn, $sql);
    // Đếm số bản ghi phù hợp sql ( Chính là xem bản ghi có email nhập vào có tồn tại hay không )
    $count = mysqli_num_rows($result1);
    // Nếu tồn tại ( có từ 1 bản ghi trở nên. Thực ra thì chỉ có 1 mà thôi k đc 2)
    if($count == 1) {
        echo json_encode(["trangthai" => false, "code" => 1]);
    } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql_register = "INSERT INTO taikhoan(email, MatKhau) VALUES('$email', '$password_hash')";
            $req = mysqli_query($conn, $sql_register);
            if($req) {
                echo json_encode(["trangthai" => true]);
            } else {
                echo json_encode(["trangthai" => false,"code" => 2, "sql" => $sql_register]);
            }
    }
?>